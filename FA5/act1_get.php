<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Form (GET)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="date"], textarea {
            width: 300px;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        </style>
</head>
<body>
    <h1>Information Form (GET)</h1>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="fname">First Name:</label><br>
        <input type="text" name="fname"><br><br>

        <label for="mname">Middle Name:</label><br>
        <input type="text" name="mname"><br><br>

        <label for="lname">Last Name:</label><br>
        <input type="text"  name="lname"><br><br>

        <label for="dateob">Date of Birth:</label><br>
        <input type="date" name="dateob"><br><br>

        <label for="address">Address:</label><br>
        <textarea  name="address"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $fname = $_GET["fname"] ?? "";
                if (empty($fname)) {
                    echo "<br>First Name is required.<br>";
                }
                    if (!empty($fname) && !preg_match("/^[a-zA-Z]+$/", $fname)) {
                        echo "<br>First Name should only contain letters.<br>";
                    }
            $mname = $_GET["mname"] ?? "";
                if (empty($mname)) {
                    echo "<br>Middle Name is required.<br>";
                }
                    if (!empty($mname) && !preg_match("/^[a-zA-Z]+$/", $mname)) {
                        echo "<br>Middle Name should only contain letters.<br>";
                    }
            $lname = $_GET["lname"] ?? "";
                if (empty($lname)) {
                    echo "<br>Last Name is required.<br>";
                }
                    if (!empty($lname) && !preg_match("/^[a-zA-Z]+$/", $lname)) {
                        echo "<br>Last Name should only contain letters.<br>";
                    }
            $dateob = $_GET["dateob"] ?? "";
                if (empty($dateob)) {
                    echo "<br>Date of Birth is required.<br>";
                }
            $address = $_GET["address"] ?? "";
                if (empty($address)) {
                    echo "<br>Address is required.<br>";
                }
                    if (!empty($address) && !preg_match("/^[a-zA-Z0-9\s,.]+$/", $address)) {
                        echo "<br>Address should only contain letters, numbers, spaces, and commas.<br>";
                    }

                echo "<h2>Received Information:</h2>";
                echo "First Name: " . $fname . "<br>";
                echo "Middle Name: " . $mname . "<br>";
                echo "Last Name: " . $lname . "<br>";
                echo "Date of Birth: " . $dateob . "<br>";
                echo "Address: " . $address . "<br>";

                }
        else {
            echo "Please fill out the form.";
        }

    ?>


</body>
</html>