<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3 - Two-Digit Decimal Combinations</title>
</head>
<body>
    <?php
        for ($x = 0; $x <= 99; $x++) {
            if ($x < 10) {
                echo "0" . $x . ", ";
            } else {
                echo $x . ", ";
            }
        }
    ?>
</body>
</html>