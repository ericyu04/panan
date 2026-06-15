<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['colors'])) {
        $colors = $_GET['colors'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Colors</title>
</head>
<body>
    <h1>Result Colors</h1>
    <h2>Your Favorite Colors:</h2>
    <ul>
        <?php
            echo "<li style='color: {$colors[0]};'>Color #: {$colors[0]}</li>";
            echo "<li style='color: {$colors[1]};'>Color #2: {$colors[1]}</li>";
            echo "<li style='color: {$colors[2]};'>Color #3: {$colors[2]}</li>";
            echo "<li style='color: {$colors[3]};'>Color #4: {$colors[3]}</li>";
            echo "<li style='color: {$colors[4]};'>Color #5: {$colors[4]}</li>";
        ?>
    </ul>
</body>
</html>