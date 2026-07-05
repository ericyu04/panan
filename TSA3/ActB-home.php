<?php
session_start();
if (!isset($_SESSION['db_user'])) {
    header("Location: ActB-login.php");
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ActB-login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "actb");
$username = $_SESSION['db_user'];
$message = "";

$query = "SELECT * FROM actb WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$userData = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current = mysqli_real_escape_string($conn, $_POST['current']);
    $new = mysqli_real_escape_string($conn, $_POST['new']);
    $re_enter = mysqli_real_escape_string($conn, $_POST['re_enter']);

    if ($current !== $userData['password']) {
        $message = "<div class='alert alert-danger'>Current password is not the same with the old password.</div>";
    } 
    elseif ($new !== $re_enter) {
        $message = "<div class='alert alert-danger'>New password and Re-Enter new password should be the same.</div>";
    } 
    else {
        $updateQuery = "UPDATE actb SET password = '$new' WHERE username = '$username'";
        mysqli_query($conn, $updateQuery);
        $userData['password'] = $new;
        $message = "<div class='alert alert-success'>Password successfully reset.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Activity B - Homepage</title>
</head>
<body>
    <div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Activity B - Homepage</h2>
    </div>

    <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="mb-0">User Information Form</h4>
                        <a href="?logout=true" class="btn btn-secondary">Log-out</a>
                    </div>
                        
                    <p class="mb-1"><strong>Welcome</strong> <?= $userData['first_name'] . " " . $userData['middle_name'] . " " . $userData['last_name'] ?></p>
                    <p class="mb-1"><strong>Birthday:</strong> <?= $userData['birthday'] ?></p>
                    <p class="mb-0 mt-2"><strong>Contact Details</strong></p>
                    <p class="mb-0 ms-3"><strong>Email:</strong> <?= $userData['email'] ?></p>
                    <p class="mb-3 ms-3"><strong>Contact:</strong> <?= $userData['contact_number'] ?></p>

                <hr>
                    <h6 class="mb-3">RESET PASSWORD</h6>
                    <?= $message ?>   
                    <form method="post">
                        <div class="row mb-2">
                            <label class="col-sm-5 col-form-label">Enter Current Password:</label>
                            <div class="col-sm-7"><input type="password" name="current" class="form-control form-control-sm" required></div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-5 col-form-label">Enter New Password:</label>
                            <div class="col-sm-7"><input type="password" name="new" class="form-control form-control-sm" required></div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-5 col-form-label">Re-Enter New Password:</label>
                            <div class="col-sm-7"><input type="password" name="re_enter" class="form-control form-control-sm" required></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-light border px-4">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>