<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "dogdb";
$conn = mysqli_connect($host, $user, $password, $dbname);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $Breed = mysqli_real_escape_string($conn, $_POST['Breed']);
    $Age = (int)mysqli_real_escape_string($conn, $_POST['Age']);
    $Address = mysqli_real_escape_string($conn, $_POST['Address']);
    $Color = mysqli_real_escape_string($conn, $_POST['Color']);
    $Height = (float)mysqli_real_escape_string($conn, $_POST['Height']);
    $Weight = (float)mysqli_real_escape_string($conn, $_POST['Weight']);

    $sql = "INSERT INTO doginfo
        (name, breed, age, address, color, height, weight)
        VALUES (
            '$Name',
            '$Breed',
            '$Age',
            '$Address',
            '$Color',
            '$Height',
            '$Weight'
        )";

    if(mysqli_query($conn, $sql)) {
        $message = "Registration completed successfully...";
        $type = "success";
    } else {
        $message = "Registration error: " . mysqli_error($conn);
        $type = "danger";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Dog Registration</title>
</head>
<body>
    <div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Dog Registration</h2>
    </div>

    <div class="card shadow-sm">
                <div class="card-body">
                    <form action="" method="post" novalidate>
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" name="Name" id="Name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Breed" class="form-label">Breed</label>
                            <input type="text" name="Breed" id="Breed" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Age" class="form-label">Age</label>
                            <input type="text" name="Age" id="Age" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" name="Address" id="Address" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Color" class="form-label">Color</label>
                            <input type="text" name="Color" id="Color" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Height" class="form-label">Height</label>
                            <input type="text" name="Height" id="Height" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Weight" class="form-label">Weight</label>
                            <input type="text" name="Weight" id="Weight" class="form-control">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                            <a href="DogView.php" class="btn btn-secondary">View List</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
