<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            font-size: 30px;
            margin-left: 20px;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
    
    </style>
</head>

<body>
    <h1>Student Registration Form</h1> <!-- PHP forms: first name, middle name, last name, birthdate, sex, address, contact number, email address, educational background -->
    <div class="container">
        <form action="SA1-2.php" method="post">
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

            <input type="submit" value="Submit">
        </form>
    </div>
    <!-- PHP code, convert input to variables -->
    <?php
    ?>
</body>
</html>