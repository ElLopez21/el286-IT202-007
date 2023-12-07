<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/api_helper.php");

$params = [];
// $year = se("year", null, 2015, false);
$year = isset($_POST['year']) ? $_POST['year'] : 2015;

// Ensure that the year is within a valid range
if ($year < 2015 || $year > 2020) {
    $year = 2017;
}

$params["year"] = $year;

$verbose = se("yes", null, "yes", false);
$params["verbose"] = $verbose; 

try {
    $response = get("https://car-api2.p.rapidapi.com/api/models", "CAR_API_KEY", $params, true, "car-api2.p.rapidapi.com");
    $responseData = json_decode($response['response'], true);

    //if decoding was successful
    if ($responseData === null && json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("Error decoding JSON data");
    }
} catch (Exception $e) {
    $errorMessage = "Error fetching car API data. " . $e->getMessage(); //API request error
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Car API Data</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Car API Data</h2>

        <form method="post" action="">
            <div class="mb-3">
                <label for="year">Select Year:</label>
                <select name="year" id="year">
                    <?php
                    //$selectedYear = isset($params['year']) ? $params['year'] : 2020;
                    for ($i = 2015; $i <= 2020; $i++) {
                        echo "<option value=\"$i\" " . ($i == $year ? "selected" : "") . ">$i</option>";
                        // if ($selectedYear == $i) {
                        //     echo " selected";
                        // }
                        // echo ">$i</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" >Submit</button>
        </form>

        <?php if (isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($responseData['data']) && !empty($responseData['data'])) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Model ID</th>
                        <th>Model Name</th>
                        <th>Make ID</th>
                        <th>Make Name</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($responseData['data'] as $car) : ?>
                        <tr>
                            <td><?php safer_echo($car['id']); ?></td>
                            <td><?php safer_echo($car['make_id']); ?></td>
                            <td><?php safer_echo($car['name']); ?></td>
                            <td><?php safer_echo($car['make']['id']); ?></td>
                            <td><?php safer_echo($car['make']['name']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

</body>

</html>