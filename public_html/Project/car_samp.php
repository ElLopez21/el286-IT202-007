<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/api_helper.php");

// Define parameters
$params = [];
$year = se("year", null, 2015, false);

// Ensure that the year is within a valid range
if ($year < 2015 || $year > 2020) {
    $year = 2020;
}

$params["year"] = $year;

//$make = custom_get('make');
// if ($make !== null) {
//     $params["make"] = $make;
// }
if(isset($make)){
    $params["make"] = $make;
  }

// You can add more parameters as needed

// API request
try {
    $results = get("https://car-api2.p.rapidapi.com/api/models", "CAR_API_KEY",$params, true, "car-api2.p.rapidapi.com");

    // Log the response
    error_log("Response: " . var_export($results, true));

    // Process $results as needed
    $statusCode = $results["status"];
    $responseBody = $results["response"];

    if ($statusCode == 200 && isset($responseBody)) {
        // Successfully received data, you can parse and use $responseBody
        $result = json_decode($responseBody, true);

        // Display the data in HTML
        echo '<html>';
        echo '<head><title>Car API Data</title></head>';
        echo '<body>';
        echo '<h1>Car API Data</h1>';
        
        // Display specific data, adjust based on the actual structure of the API response
        echo '<p>Make: ' . se($result, "make") . '</p>';
        echo '<p>year: ' . se($result, "year") . '</p>';
        // Add more fields as needed
        
        echo '</body>';
        echo '</html>';
    } else {
        // Handle errors based on the status code
        $result = [];
        echo "Error: HTTP Status Code " . $statusCode . ", Response: " . $responseBody;
    }

    // Continue with any additional processing based on $result
} catch (Exception $e) {
    // Handle exceptions, e.g., missing or empty API key
    flash("An unexpected error occurred, please try again", "danger");
}
?>