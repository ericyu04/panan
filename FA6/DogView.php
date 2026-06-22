<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "dogdb";
$conn = mysqli_connect($host, $user, $password, $dbname);

$sql = "SELECT * FROM doginfo ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Dog List</title>
</head>
<body>
    <div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Dog List</h2>
            <a href="DogRegister.php" class="btn btn-success">+ Register New Dog</a>
    </div>

    <div class="row g-4">
                <?php
                $counter = 1;
                while($row = mysqli_fetch_assoc($result)):
                ?>
                <div class = "col-md-6">
                    <div class = "card shadow-sm">
                            <div class = "card-body">
                                <h5 class="card-title"><?= $row['Name']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $row['Breed']; ?></h6>
                                <p class="card-text">
                                    Age: <?= $row['Age']; ?> years<br>
                                    Address: <?= $row['Address']; ?><br>
                                    Color: <?= $row['Color']; ?><br>
                                    Height: <?= $row['Height']; ?> ft<br>
                                    Weight: <?= $row['Weight']; ?> kilos
                                </p>
                        </div>
                    </div>
                </div>

                <?php
                        endwhile;

                        if(mysqli_num_rows($result) == 0):
                        ?>
                            <p class="text-center text-muted">No dogs registered yet...</p>
                        <?php
                        endif;
                ?>


    </div>
</body>
</html>
