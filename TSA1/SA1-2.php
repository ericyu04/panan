<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        .container{
            display: grid;
            grid-template-columns: repeat(11, 1fr);
            aspect-ratio: 1 / 1;
            border: 3px solid #79633a;
            margin: 20px;
        }
        .light {
            background-color: #f0b13d;
        }
        .dark {
            background-color: #9b7d2a;
        }
        .cell {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1 {
            text-align: center;
        }

    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
    <div class="container">
        <?php
        for($row = 0; $row <= 10; $row++) {
            for($col = 0; $col <= 10; $col++) {
                $value = $row * $col;
                $class = ($row + $col) % 2 == 0 ? 'light' : 'dark';
                echo "<div class='cell $class'>$value</div>";
            }
        }
        ?>
    </div>
</body>
</html>