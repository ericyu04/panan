<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Fruits</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
            padding: 20px;
        }
        table {
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #333; 
            padding: 12px;
            text-align: left;
        }
        img {
            width: 80px; height: auto; border-radius: 8px;
        }
    </style>
</head>
<body>

    <h2>My Fruits</h2>

    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

        <?php
        $fruits = array(
            "Mango" => array("image" => "images\mango.png", "desc" => "Color yellow with shades of orange.", "fact" => "It is the national fruit of India, Pakistan, and the Philippines."),
            "Banana" => array("image" => "images\banana.png", "desc" => "Color Yellow.", "fact" => "Bananas are a healthful addition to a balanced diet, providing vital nutrients and fiber."),
            "Apple" => array("image" => "images\apple.png", "desc" => "Round fruit with red or green skin.", "fact" => "Apples float in water because they are 25% air."),
            "Strawberry" => array("image" => "images\strawberry.png", "desc" => "Red and sweet with seeds on the outside.", "fact" => "It is the only fruit that wears its seeds on the outside."),
            "Grapes" => array("image" => "images\grapes.png", "desc" => "Small, round, purple or green berries.", "fact" => "Grapes are botanically classified as berries."),
            "Orange" => array("image" => "images\orange.png", "desc" => "Citrus fruit with a tough bright skin.", "fact" => "The color orange was actually named after the fruit."),
            "Pineapple" => array("image" => "images\pineapple.png", "desc" => "Spiky yellow fruit.", "fact" => "A pineapple is actually a cluster of hundreds of fruitlets."),
            "Watermelon" => array("image" => "images\watermelon.png", "desc" => "Large green fruit with red insides.", "fact" => "Watermelons are 92% water."),
            "Kiwi" => array("image" => "images\kiwi.png", "desc" => "Small brown fuzzy fruit", "fact" => "Kiwis have more vitamin C than oranges."),
            "Blueberry" => array("image" => "images\blueberry.png", "desc" => "Small, round, dark blue berries.", "fact" => "Blueberries are one of the only naturally blue foods.")
        );

        ksort($fruits);

        foreach ($fruits as $name => $details) {
            echo "<tr>";
            echo "<td><img src='" . $details['image'] . "' alt='" . $name . "'></td>";
            echo "<td><strong>" . $name . "</strong></td>";
            echo "<td>" . $details['desc'] . "</td>";
            echo "<td>" . $details['fact'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

<?php require 'footer.php'; ?>
</body>
</html>