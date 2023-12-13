<?php

try{
    $db = getDB();

    if(isset($_GET['id'])){
        $carId = $_GET['id'];

        $stmt = $db->prepare("SELECT * FROM CAR_DATA WHERE car_id = :carId");
        $stmt->bindParam(":carId", $carId, PDO::PARAM_INT);
        $stmt->execute();

        $car = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$car){
            flash("Car can't be found", "danger");
            die(header("Location: car_list_samp.php"));
        }
    } elseif($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $carId = $_POST['car_id'];
        $stmt = $db->prepare("DELETE FROM CAR_DATA WHERE car_id = :carId");
        $stmt->bindParam(":carId", $carId, PDO::PARAM_INT);
        $stmt->execute();

        header("Location: Project/car_list_samp.php?message=Car+delete+complete");
        exit();
    }
} catch(Exception $e){
    flash("Error in deleting the car", "danger");
    die(header("Location: car_list_samp.php"));
}

?>

<div class = "container mt-5">
    <h2>Deleting Car:</h2>
    <?php if (!empty($car)) : ?>
        <p>Notice: Confident in deleting the car?<?php echo $car["car_id"]; ?></p>
        <form method="POST">
            <input type="hidden" name = "car_id" value="<?php echo $car["car_id"]; ?>">
            <button class = "btn btn-primary" type = "submit">Delete Car</button>
        </form>
    <?php else: ?>
        <p class = "alert alert-danger"> Car Not found</p>
    <?php endif; ?>
</div>