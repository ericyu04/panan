<?php
session_start();

if (!isset($_SESSION['active_user'])) {
    header("Location: ActA-login.php");
    exit();
}

if (isset($_GET['logout'])) {
    unset($_SESSION['active_user']);
    header("Location: ActA-login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Activity A - Homepage</title>
</head>
<body>
    <div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Homepage</h2>
    </div>

    <div class="card shadow-sm">
                <div class="card-body text-center">
                    
                    <h3>Welcome, <?= htmlspecialchars($_SESSION['active_user']) ?>!</h3>
                    <p>You have successfully logged in.</p>
                    <a href="?logout=true" class="btn btn-danger mt-3">Log-out</a>

                </div>
            </div>
        </div>
    </div>

</body>
</html>