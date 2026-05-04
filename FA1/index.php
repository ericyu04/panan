<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <?php
        //Personal Information
        $name = "Ericson John S. Yu";
        $course = "BSITAGD";
        $year = "3rd Year";
        //Skills
        $skill1 = "HTML";
        $skill2 = "CSS";
        $skill3 = "JavaScript";
        $skill4 = "PHP";
        //Education
        $edu1 = "High School: St. Mary's College of Meycauayan";
        $edu2 = "College: FEU Institute of Technology";
        //Interests
        $interest1 = "Gaming";
        $interest2 = "Technology";
        $interest3 = "Music";
        $interest4 = "Art";
        //Certifications
        $cert1 = " Linux Essentials";
        $cert2 = " Cisco Certified Support Technician Networking (CCST Networking)";
        $cert3 = " CCNA: Introduction to Networks";
    ?>

    <header>
        <h1>Ericson John S. Yu</h1>
        <h3>BSITAGD - 3rd Year</h3>
    </header>

    <div class="container">
        <div>
            <h2>Skills</h2>
            <ul>
                <li><?php echo $skill1; ?></li>
                <li><?php echo $skill2; ?></li>
                <li><?php echo $skill3; ?></li>
                <li><?php echo $skill4; ?></li>
            </ul>
        </div>
        <div>
            <h2>Education</h2>
            <ul>
                <li><?php echo $edu1; ?></li>
                <li><?php echo $edu2; ?></li>
            </ul>
        </div>

        <div>
            <h2>Interests</h2>
            <ul>
                <li><?php echo $interest1; ?></li>
                <li><?php echo $interest2; ?></li>
                <li><?php echo $interest3; ?></li>
                <li><?php echo $interest4; ?></li>
            </ul>
        </div>
        <div>
            <h2>Certifications</h2>
            <ul>
                <li><?php echo $cert1; ?></li>
                <li><?php echo $cert2; ?></li>
                <li><?php echo $cert3; ?></li>
            </ul>
        </div>

    </div>

    <footer>
        <p>Email: esyu@fit.edu.ph | Contact Information: 09123456789</p>
        <p>Copyright &copy; <?php echo date("Y"); ?> by <?php echo $name; ?></p>  
    </footer>
</body>
</html>