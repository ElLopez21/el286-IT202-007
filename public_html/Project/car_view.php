<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../partials/flash.php");

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>

<?php

//ucid: el286 12/13
try{
    $db = getDB();

    if(isset($_GET['id'])){
        $carId = $_GET['id'];

        $stmt = $db->prepare("SELECT * FROM CAR_DATA WHERE car_id = :carId");
        $stmt->bindParam(':carId', $carId, PDO::PARAM_INT);
        $stmt->execute();

        $car = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$car){
            header("Location: car_list_samp.php?error=Incorrect ID");
            exit();
        }
    } else{
        header("Location: car_list_samp.php");
        exit();
    }

} catch(Exception $e){
    $errorMessage = "Error fetching car details" . $e->getMessage();
}
?>

<div class = "container mt-5">
    <h2>Data Details</h2>
    <?php if (isset($errorMessage)): ?>
        <div>
            <?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?>
        </div>
    <?php else : ?>
        <div class = "card">
            <div class = "card-body">
                <h5 class="car-title">Car Details</h5>
                <ul class = "list-group list-group-flush">
                    <li class = "list-group-item">Make ID: <?php echo htmlspecialchars($car['make_id']); ?></li>
                    <li class = "list-group-item">Model Name: <?php echo htmlspecialchars($car['name_m']); ?></li>
                    <li class = "list-group-item">Make Name: <?php echo htmlspecialchars($car['make_name']); ?></li>
                    <li class = "list-group-item">Year: <?php echo htmlspecialchars($car['year']); ?></li>
                </ul>

                <?php if(has_role("Admin")) : ?>
                    <div class = "mt-3">
                        <a href="<?php echo get_url('admin/car_edit.php?id=' . $car['car_id']); ?>">Edit</a>
                        <a href="<?php echo get_url('admin/car_delete.php?id=' . $car['car_id']); ?>">Delete</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>