<?php

require(__DIR__ . "/../../../partials/nav.php");


//ucid: el286 12/13
if($_SERVER["REQUEST_METHOD"] === "POST") {

    $carName = $_POST['car_name'] ?? '';
    if(empty($carName)){
        flash("Car Name can't be empty", "warning");
    }
    elseif(!preg_match('/^[a-zA-Z0-9\s]+$/', $carName)){
        flash("Car Name should contain letters, numbers, anc spaces if applied", "warning");
    }

    $carModel = $_POST['car_model'] ?? '';
    if(empty($carModel)){
        flash("Car Model can't be empty", "warning");
    }
    elseif(!preg_match('/^[a-zA-Z0-9\s]+$/', $carModel)){
        flash("Car Model should contain letters, numbers, and space if applied", "warning");
    }

    else{
        try{
            $db = getDB();
            $stmt = $db->prepare("INSERT INTO CAR_DATA (car_name, car_model) VALUES (:carName, :carModel)");
            $stmt->bindParam(':carName', $carName, PDO::PARAM_STR);
            $stmt->bindParam(':carModel', $carModel, PDO::PARAM_STR);
            $stmt->execute();
            flash("Car created successfulyl!", "success");
            $successMess = "Car created good";
            //}

        } catch(Exception $e){
            flash("Error creating the car you wanted", "danger");
            $errorMess = "error creating car." . $e->getMessage();

        }
    }   
}

?>

<body>
    <div class = "container mt-5">
        <h2>Creating a Car:</h2>

        <?php if (isset($errorMess)) : ?>
            <div class = "alert alert-danger" role="alert">
                <?php echo htmlspecialchars($errorMess, ENT_QUOTES); ?>

            </div>
        <?php endif; ?>
        <?php if (isset($successMess)) : ?>
            <div class = "alert alert-success" role="alert">
                <?php echo htmlspecialchars($successMess, ENT_QUOTES); ?>

            </div>
        <?php endif; ?>

        <form method="POST">
            <label for="car_name">Car Name: </label>
            <input type="text" id="car_name" name ="car_name">

            <label for="car_model">Car Model: </label>
            <input type="text" id="car_model" name ="car_model">

            <button type = "submit">Create Car</button>
        </form>
    </div>
</body>

<?php
require(__DIR__ . "/../../../partials/flash.php");
?>