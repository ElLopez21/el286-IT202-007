<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/db.php"); 

try {
    $db = getDB();

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 10;
        $limit = max(1, min($limit, 100));

        $sortField = isset($_GET['sort']) ? $_GET['sort'] : 'car_id';
        $sortOr = isset($_GET['direction']) ? $_GET['direction'] : 'asc';

        $stmt = $db->prepare("SELECT DISTINCT car_id, make_id, name_m, make_name FROM CAR_DATA ORDER BY $sortField $sortOr LIMIT :limit");
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        $carData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else{
         $limit = 10;
         $sortField = 'car_id';
         $sortOr = 'asc';
         $stmt= $db->prepare("SELECT DISTINCT car_id, make_id, name_m, make_name FROM CAR_DATA ORDER BY $sortField $sortOr LIMIT :limit");
         $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
         $stmt->execute();

        $carData =$stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

} catch (Exception $e) {
    $errorMessage = "Error fetching car data. " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Data List</h2>

        <?php if (isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($errorMessage, ENT_QUOTES); ?>
            </div>
        <?php endif; ?>

        <form method="GET" class = "form-inline">
            <div class = "form-group mx-2">
                <label for="limit" class = "mr-2">Limit 1-100:</label>
                <input type="number" id="limit" class="form-control" name="limit" value="<?php echo $limit; ?>" min="1" max="100">
            </div>
            
            <div class = "form-group mx-2">
                <label for="sort" class = "mr-2">Sort Field:</label>
                <select id = "sort" class = "form-control" name="sort">
                    <option value="car_id" <?php echo ($sortField === 'car_id') ? 'selected' : ''; ?>> Car Id</option>
                    <option value="make_id" <?php echo ($sortField === 'make_id') ? 'selected' : ''; ?>> Make Id</option>
                    <option value="name_m" <?php echo ($sortField === 'name_m') ? 'selected' : ''; ?>> Model Name </option>
                    <option value="make_name" <?php echo ($sortField === 'make_name') ? 'selected' : ''; ?>>Make Name</option>
                </select>
            </div>
            
            <div class = "form-group mx-2">
                <label for="direction" class = "mr-2">Sort Order:</label>
                <select name="direction" id="direction" class="form-control">
                    <option value="asc" <?php echo ($sortOr === 'asc') ? 'selected' : ''; ?>> Ascend</option>
                    <option value="desc" <?php echo ($sortOr === 'desc') ? 'selected' : ''; ?>>Descend</option>
                </select>
            </div>

            <button type="submit" class = "btn btn-primary mx-2">Apply</button> 
        </form>

        <?php if (!empty($carData)) : ?>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Car ID</th>
                        <!-- <th>Make ID</th> -->
                        <th>Name</th>
                        <th>Make Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carData as $car) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($car['car_id']); ?></td>
                            <!-- <td><//?php echo htmlspecialchars($car['make_id']); ?></td> -->
                            <td><?php echo htmlspecialchars($car['name_m']); ?></td>
                            <td><?php echo htmlspecialchars($car['make_name']); ?></td>
                            <td>
                                <a href="car_view.php?id=<?php echo $car['car_id']; ?>">View</a>
                                <a href="delete.php?id=<?php echo $car['car_id']; ?>">Delete</a>
                                <a href="edit.php?id=<?php echo $car['car_id']; ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p class = "alert alert-warning">No results at this time.</p>
        <?php endif; ?>
    </div>
</body>

</html>
