<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Colors</title>
</head>
<body>
    <h1>Favorite Colors</h1>
    <form action="ResultColors.php" method="GET">
        <label for="color1">Favorite Color 1:</label>
        <input type="text" id="color1" name="colors[]" required><br><br>

        <label for="color2">Favorite Color 2:</label>
        <input type="text" id="color2" name="colors[]" required><br><br>

        <label for="color3">Favorite Color 3:</label>
        <input type="color" id="color3" name="colors[]" required><br><br>

        <label for="color4">Favorite Color 4:</label>
        <input type="color" id="color4" name="colors[]" required><br><br>

        <label for="color5">Favorite Color 5:</label>
        <input type="color" id="color5" name="colors[]" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>