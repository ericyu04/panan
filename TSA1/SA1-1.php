<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Student Registration Form</h1> <!-- PHP forms: first name, middle name, last name, birthdate, sex, address, contact number, email address, educational background -->
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="firstName">First Name:</label><br>
            <input type="text" id="firstName" name="firstName" required><br><br>

            <label for="middleName">Middle Name:</label><br>
            <input type="text" id="middleName" name="middleName" required><br><br>

            <label for="lastName">Last Name:</label><br>
            <input type="text" id="lastName" name="lastName" required><br><br>
            <label for="birthdate">Birthdate:</label><br>
            <input type="date" id="birthdate" name="birthdate" required><br><br>

            <label for="sex">Sex:</label><br>
            <input type="radio" id="male" name="sex" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="sex" value="female" required>
            <label for="female">Female</label><br><br>

            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" required><br><br>
            <label for="contact">Contact Number:</label><br>
            <input type="text" id="contact" name="contact" required><br><br>
            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <h2>Educational Background</h2>
            <p><font style="font-size: 14px;">Please provide details about your educational background, including the name of the institution, degree obtained, and year of graduation.</font></p>
            <label for="institution">Name of Institution:</label><br>
            <input type="text" id="institution" name="institution" required><br><br>
            <label for="degree">Degree Obtained:</label><br>
            <input type="radio" id="degree" name="degree" value="Senior High School" required>
            <label for="degree">Senior High School</label><br>
            <input type="radio" id="degree" name="degree" value="College" required>
            <label for="degree">College</label><br><br>
            <label for="graduationYear">Year of Graduation:</label><br>
            <input type="number" id="graduationYear" name="graduationYear" min="1900" max="2023" required><br><br>

            <label for="program">Chosen Program:</label><br>
            <input type="radio" id="program1" name="program" value="Computer Science" required>
            <label for="program1">Computer Science</label><br>
            <input type="radio" id="program2" name="program" value="Information Technology" required>
            <label for="program2">Information Technology</label><br>
            <input type="radio" id="program3" name="program" value="Multimedia Arts" required>
            <label for="program3">Multimedia Arts</label><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
    <!-- PHP code, convert input to variables -->
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<div class='result-box'>";
            echo "<h2>Registration Details Submitted!</h2>";

            $firstName = $_POST['firstName'];
            $middleName = $_POST['middleName'];
            $lastName = $_POST['lastName'];
            $birthdate = $_POST['birthdate'];
            $sex = $_POST['sex'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $institution = $_POST['institution'];
            $degree = $_POST['degree'];
            $graduationYear = $_POST['graduationYear'];
            $program = $_POST['program'];

            $formattedFirstName = ucwords(strtolower($firstName));
            $formattedMiddleName = ucwords(strtolower($middleName));
            $formattedLastName = ucwords(strtolower($lastName));
            $fullName = $formattedFirstName . " " . $formattedMiddleName . " " . $formattedLastName;
            $formattedAddress = ucwords(strtolower($address));
            $formattedInstitution = ucwords(strtolower($institution));
            $formattedEmail = strtolower($email);
            $formattedSex = ucfirst(strtolower($sex));
            $formattedYear = $graduationYear;
            $formattedContact = $contact;

            echo "<p><span class='label'>Full Name:</span> " . $fullName . "</p>";
            echo "<p><span class='label'>Birthdate:</span> " . $birthdate . "</p>";
            echo "<p><span class='label'>Sex:</span> " . $formattedSex . "</p>";
            echo "<p><span class='label'>Address:</span> " . $formattedAddress  . "</p>";
            echo "<p><span class='label'>Contact Number:</span> " . $formattedContact . "</p>";
            echo "<p><span class='label'>Email Address:</span> " . $formattedEmail . "</p>";
            echo "<p><span class='label'>Educational Institution:</span> " . $formattedInstitution . "</p>";
            echo "<p><span class='label'>Degree Obtained:</span> " . $degree . "</p>";
            echo "<p><span class='label'>Year of Graduation:</span> " . $formattedYear . "</p>";
            echo "<p><span class='label'>Chosen Program:</span> " . $program . "</p>";
            echo "</div>";
        }
    ?>
</body>
</html>