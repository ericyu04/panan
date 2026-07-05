<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Activity A</title>
</head>
<body>
    <div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>My Personal Information</h2>
    </div>

    <div class="card shadow-sm">
                <div class="card-body">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

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
                            <a href="DogView.php" class="btn btn-secondary">View List</a>
                        </div>

                    </form>
                    <div class="card-body">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $FirstName = $_POST["FirstName"] ?? "";
                                if (empty($FirstName)) {
                                    echo "<br>First Name is required.<br>";
                                }
                                    if (!empty($FirstName) && !preg_match("/[A-Za-z0-9]/", $FirstName)) {
                                        echo "<br>First Name should only contain letters and spaces.<br>";
                                    }
                            $MiddleName = $_POST["MiddleName"] ?? "";
                                if (empty($MiddleName)) {
                                    echo "<br>Middle Name is required.<br>";
                                }
                                    if (!empty($MiddleName) && !preg_match("/[A-Za-z0-9]/", $MiddleName)) {
                                        echo "<br>Middle Name should only contain letters and spaces.<br>";
                                    }
                            $LastName = $_POST["LastName"] ?? "";
                                if (empty($LastName)) {
                                    echo "<br>Last Name is required.<br>";
                                }
                                    if (!empty($LastName) && !preg_match("/[A-Za-z0-9]/", $LastName)) {
                                        echo "<br>Last Name should only contain letters and spaces.<br>";
                                    }
                            $Birthday = $_POST["Birthday"] ?? "";
                                if (empty($Birthday)) {
                                    echo "<br>Date of Birth is required.<br>";
                                }
                            $Email = $_POST["Email"] ?? "";
                                if (empty($Email)) {
                                    echo "<br>Email is required.<br>";
                                }
                                    if (!empty($Email) && !preg_match("/[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z0-9]+/", $Email)) {
                                        echo "<br>Email should be a valid email address.<br>";
                                    }
                            $ContactNumber = $_POST["ContactNumber"] ?? "";
                                if (empty($ContactNumber)) {
                                    echo "<br>Contact Number is required.<br>";
                                }
                                if (!empty($ContactNumber) && !preg_match("/^[0-9]+$/", $ContactNumber)) {
                                    echo "<br>Contact Number should only contain numbers.<br>";
                                }
                                
                                echo "<h2>Received Information:</h2>";
                                echo "Full Name: " . $FirstName . " " . $MiddleName . " " . $LastName . "<br>";
                                echo "Username: " . $_POST["Username"] . "<br>";
                                echo "Password: " . $_POST["Password"] . "<br>";
                                echo "Birthday: " . $Birthday . "<br>";
                                echo "Email: " . $Email . "<br>";
                                echo "Contact Number: " . $ContactNumber . "<br>";
                            }               
                            else {
                                echo "Please fill out the form.";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>