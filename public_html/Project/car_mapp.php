<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/api_helper.php");
//require_once(__DIR__ . "/../../lib/db.php");
function map_data($api_data){
    $records=[];

    foreach($api_data as $data){
        $record["car_id"] = se($data, 'id', null, false);
        $record["make_id"] = se($data, 'make_id', null, false);
        $record["name_m"] = se($data, 'name', null, false);

        $make = isset($data['make']) ? $data['make'] : null;
        $record["make_name"] = se($make, 'name', null, false);

        array_push($records, $record);
    }
    return $records;
}

$params = [];
$year = se("year", null, 2015, false);

// Ensure that the year is within a valid range
if ($year < 2015 || $year > 2020) {
    $year = 2020;
}

$params["year"] = $year;

$verbose = se("yes", null, "yes", false);
$params["verbose"] = $verbose; 

try {
    $response = get("https://car-api2.p.rapidapi.com/api/models", "CAR_API_KEY", $params, true, "car-api2.p.rapidapi.com");
    $responseData = json_decode($response['response'], true);

    // Check if decoding was successful
    if ($responseData === null && json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Error decoding JSON data");
    }

    if (isset($responseData['data']) && is_array($responseData['data'])) {
        $db = getDB();
        $records = map_data($responseData['data']);

        foreach ($records as $record) {
            $stmt = $db->prepare("INSERT INTO CAR_DATA (car_id, make_id, name_m, make_name) VALUES (:carID, :makeID, :nameM, :makeName) ");

            $stmt->bindParam(':carID', $record["car_id"], PDO::PARAM_INT);
            $stmt->bindParam(':makeID', $record["make_id"], PDO::PARAM_INT);
            $stmt->bindParam(':nameM', $record["name_m"], PDO::PARAM_STR);
            $stmt->bindParam(':makeName', $record["make_name"], PDO::PARAM_STR);

            $stmt->execute();
        }
    }
} catch (Exception $e) {
    $errorMess = "Error fetching data" . $e->getMessage();
    error_log(var_export($errorMess, true));
}
