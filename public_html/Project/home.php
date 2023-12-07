<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>

<?php
require_once(__DIR__ ."/../../lib/db.php");
// require_once("safer_echo.php");
// require_once("user_helpers.php");

// Check if the user is logged in
if (!is_logged_in(true)) {
    // Redirect unauthorized users to the login page
    die();
}

// Default limit for records
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 10;
$limit = ($limit >= 1 && $limit <= 100) ? $limit : 10;

// Fetch data from the database
try {
    $db = getDB();
    $stmt = $db->prepare("SELECT id, model, make, year FROM CAR_DATA LIMIT :limit");
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();
    $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    // Handle database error
    $errorMessage = "Error fetching car data. Please try again.";
}

?>
<body>
    <div class="container mt-5">
        <h2>Car Data List</h2>

        <?php if (isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php safer_echo($errorMessage); ?>
            </div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Model</th>
                        <th>Make</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cars as $car) : ?>
                        <tr>
                            <td><?php safer_echo($car['model']); ?></td>
                            <td><?php safer_echo($car['make']); ?></td>
                            <td><?php safer_echo($car['year']); ?></td>
                            <td>
                                <!-- Links for each list item -->
                                <a href="<?php echo get_url('view_car.php?id=' . $car['id']); ?>" class="btn btn-info btn-sm">View</a>
                                <a href="<?php echo get_url('delete_car.php?id=' . $car['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this car?')">Delete</a>
                                <a href="<?php echo get_url('edit_car.php?id=' . $car['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Filter and Sort Options -->
        <form method="GET" action="">
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label for="limit">Records per page:</label>
                    <input type="number" class="form-control" id="limit" name="limit" value="<?php safer_echo($limit); ?>" min="1" max="100">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Apply</button>
                </div>
            </div>
        </form>
    </div>
</body>
