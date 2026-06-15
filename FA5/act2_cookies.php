<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'] ?? '';
    $middleName = $_POST['middleName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';

    setcookie('firstName', $firstName, time()+10, '/');
    setcookie('middleName', $middleName, time()+20, '/');
    setcookie('lastName', $lastName, time()+30, '/');

    $_COOKIE['firstName'] = $firstName;
    $_COOKIE['middleName'] = $middleName;
    $_COOKIE['lastName'] = $lastName;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Expiration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2C878B;
            color: #373b3e;
        }
        h1 {
            font-size: 30px;
            text-align: center;
            color: #373b3e;
        }
        .result-box{
            margin-top: 20px;
            padding: 20px;
            border-top: 3px solid #2C868A;
            background-color: #2C878B;
        }
        .label {
            font-weight: bold;
            color: #373b3e;
            display: inline-block;
            width: 150px;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            background-color: #4A9B9F;
            padding: 30px;
            border: 1px solid #00585C;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    
    </style>
</head>

<body>
    <h1>Student Registration Form</h1>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="firstName">First Name:</label><br>
            <input type="text" id="firstName" name="firstName" required value="<?php echo htmlspecialchars($_COOKIE['firstName'] ?? ''); ?>"><br><br>

            <label for="middleName">Middle Name:</label><br>
            <input type="text" id="middleName" name="middleName" required value="<?php echo htmlspecialchars($_COOKIE['middleName'] ?? ''); ?>"><br><br>

            <label for="lastName">Last Name:</label><br>
            <input type="text" id="lastName" name="lastName" required value="<?php echo htmlspecialchars($_COOKIE['lastName'] ?? ''); ?>"><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<div class='result-box'>";
            echo "<h2>Registration Details Submitted!</h2>";

            $firstName = $_POST['firstName'];
            $middleName = $_POST['middleName'];
            $lastName = $_POST['lastName'];

            $formattedFirstName = ucwords(strtolower($firstName));
            $formattedMiddleName = ucwords(strtolower($middleName));
            $formattedLastName = ucwords(strtolower($lastName));
            $fullName = $formattedFirstName . " " . $formattedMiddleName . " " . $formattedLastName;

            echo "<p><span class='label'>Full Name:</span> " . $fullName . "</p>";

            echo "</div>";
        }
    ?>
        <div class="result-box">
            <h2>Current Cookie Values:</h2>
            <p><span class="label">First Name:</span> <?php echo isset($_COOKIE['firstName']) ? $_COOKIE['firstName'] : "No first name in cookie."; ?></p>
            <p><span class="label">Middle Name:</span> <?php echo isset($_COOKIE['middleName']) ? $_COOKIE['middleName'] : "No middle name in cookie."; ?></p>
            <p><span class="label">Last Name:</span> <?php echo isset($_COOKIE['lastName']) ? $_COOKIE['lastName'] : "No last name in cookie."; ?></p>
        </div>
</body>
</html>