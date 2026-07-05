<?php
session_start();
$message = "";
$displayData = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $FirstName = $_POST['FirstName'];
    $MiddleName = $_POST['MiddleName'];
    $LastName = $_POST['LastName'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];
    $Birthday = $_POST['Birthday'];
    $Email = $_POST['Email'];
    $ContactNumber = $_POST['ContactNumber'];

    if (empty($FirstName) || empty($MiddleName) || empty($LastName) || empty($Username) || empty($Password) || empty($ConfirmPassword) || empty($Birthday) || empty($Email) || empty($ContactNumber)) {
        $message = "<div class='alert alert-danger'>All fields are required.</div>";
    }
    elseif ($Password !== $ConfirmPassword) {
        $message = "<div class='alert alert-danger'>Password and confirm password are not the same.</div>";
    }
    elseif ( !preg_match('/^[a-zA-Z0-9\-\s]+$/', $FirstName) || !preg_match('/^[a-zA-Z0-9\-\s]+$/', $MiddleName) || !preg_match('/^[a-zA-Z0-9\-\s]+$/', $LastName) || !preg_match('/^[a-zA-Z0-9\-\s]+$/', $Username)) {
        $message = "<div class='alert alert-danger'>Names and username should only contain letters, numbers, hyphens, and spaces.</div>";
    }
    else {
        $_SESSION['registered_user'] = $Username;
        $_SESSION['registered_pass'] = $Password;

        $message = "<div class='alert alert-success'>Registration successful! You can now log in.</div>";
        $displayData = "
            <hr>
                <p class='mb-1'><strong>Full Name:</strong> $FirstName $MiddleName $LastName</p>
                <p class='mb-1'><strong>Username:</strong> $Username</p>
                <p class='mb-1'><strong>Password:</strong> $Password</p>
                <p class='mb-1'><strong>Birthday:</strong> $Birthday</p>
                <p class='mb-1'><strong>Email:</strong> $Email</p>
                <p class='mb-1'><strong>Contact Number:</strong> $ContactNumber</p>
            <div class='text-center mt-3'>
                <a href='ActA-home.php' class='btn btn-primary btn-sm'>Go to Login Page</a>
            </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Activity A - Registration</title>
</head>
<body>
    <div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Activity A - Registration</h2>
            <?= $message; ?>
    </div>

    <div class="card shadow-sm">
                <div class="card-body">
                    <form method="post">

                        <div class="mb-3">
                            <label for="First Name" class="form-label">First Name</label>
                            <input type="text" name="FirstName" id="FirstName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Middle Name" class="form-label">Middle Name</label>
                            <input type="text" name="MiddleName" id="MiddleName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Last Name" class="form-label">Last Name</label>
                            <input type="text" name="LastName" id="LastName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Username" class="form-label">Username</label>
                            <input type="text" name="Username" id="Username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" name="Password" id="Password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Confirm Password" class="form-label">Confirm Password</label>
                            <input type="password" name="ConfirmPassword" id="ConfirmPassword" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Birthday" class="form-label">Birthday</label>
                            <input type="date" name="Birthday" id="Birthday" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" name="Email" id="Email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Contact Number" class="form-label">Contact Number</label>
                            <input type="text" name="ContactNumber" id="ContactNumber" class="form-control">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>

                    <div class="card-body">
                        <?= $displayData; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>