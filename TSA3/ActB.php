<?php
$conn = mysqli_connect("localhost", "root", "", "actb");
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($conn, $_POST['MiddleName']);
    $LastName = mysqli_real_escape_string($conn, $_POST['LastName']);
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);
    $ConfirmPassword = mysqli_real_escape_string($conn, $_POST['ConfirmPassword']);
    $Birthday = mysqli_real_escape_string($conn, $_POST['Birthday']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $ContactNumber = mysqli_real_escape_string($conn, $_POST['ContactNumber']);

    if ($Password !== $ConfirmPassword) {
        $message = "<div class='alert alert-danger'>Password and confirm password are not the same.</div>";
    } 
    else {
            $sql = "INSERT INTO actb (first_name, middle_name, last_name, username, password, birthday, email, contact_number) 
            VALUES ('$FirstName', '$MiddleName', '$LastName', '$Username', '$Password', '$Birthday', '$Email', '$ContactNumber')";
        if (mysqli_query($conn, $sql)) {
            $message = "<div class='alert alert-success'>Registered in Database!</div>";
        } 
        else {
            $message = "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Activity B - Registration</title>
</head>
<body>
    <div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Activity B - Registration</h2>
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
                            <a href="ActB-login.php" class="btn btn-secondary">Login</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>