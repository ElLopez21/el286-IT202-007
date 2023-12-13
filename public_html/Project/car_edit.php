<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<?php

try{
    $db = getDB();

    if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
        flash("Invalid car Id", "danger");
        die(header("Location: car_list_samp.php"));
    }

    $carId = $_GET['id'];

    $stmt = $db->prepare("SELECT * FROM CAR_DATA WHERE car_id = :carId");
    $stmt->bindParam(':carId', $carId, PDO::PARAM_INT);
    $stmt->execute();

    $carExist = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$carExist){
        flash("Car can't be found", "danger");
        die(header("Location: car_list_samp.php"));
    }

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $carName = $_POST['car_name'] ?? '';
        $carModel = $_POST['car_model'] ?? '';

        if(empty($carName)){
            flash("Car Name can't be empty", "warning");
        }
        elseif(!preg_match('/^[a-zA-Z0-9\s]+$/', $carName)){
            flash("Car Name should contain letters, numbers, anc spaces if applied", "warning");
        }

        if(empty($carModel)){
            flash("Car Model can't be empty", "warning");
        }
        elseif(!preg_match('/^[a-zA-Z0-9\s]+$/', $carModel)){
            flash("Car Model should contain letters, numbers, anc spaces if applied", "warning");
        }
        else{
            try{
                $stmt = $db->prepare("UPDATE CAR_DATA SET car_name = :carName, car_model = :carModel WHERE car_id = :carId");
                $stmt->bindParam(':carId', $carId, PDO::PARAM_INT);
                $stmt->bindParam(':carName', $_POST['car_name'], PDO::PARAM_STR);
                $stmt->bindParam(':carModel', $_POST['car_model'], PDO::PARAM_STR);
                $stmt->execute();
                flash("Car has been updated succesfully.", "success");

                $stmt = $db->prepare("SELECT * FROM CAR_DATA WHERE car_id = :carId");
                $stmt->bindParam(':carId', $carId, PDO::PARAM_INT);
                $stmt->execute();
                $carExist = $stmt->fetch(PDO::FETCH_ASSOC);
            } catch(Exception $e){
                flash("Error occured on updating the car", "danger");
                $errorMess = "Error updating the car" . $e->getMessage();
            }
        }
    }
} catch(Exception $e){
    flash("Error fetching the car data", "danger");
}

?>

<div class = "container mt-5">
    <h2>Editing Car: </h2>

    <?php if (isset($errorMess)) : ?>
        <div class = "alert alert-danger" role="alert">
            <?php echo htmlspecialchars($errorMess, ENT_QUOTES); ?>
        </div>
    <?php endif; ?>

    <form method="POST" class = "mt-3">
        <label for="car_name" class = "form-label">Car Name: </label>
        <input type="text" id="car_name" class ="form-control" name="car_name" value="<?php htmlspecialchars($carExist['car_name']); ?>">

        <label for="car_model">Car Model: </label>
        <input type="text" id="car_model" class ="form-control" name="car_model" value="<?php htmlspecialchars($carExist['car_model']); ?>">
        <button type="submit" class = "btn btn-primary">Update Car</button>
    </form>
</div>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>