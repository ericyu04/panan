<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume of Shapes</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto; 
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <?php
    function Cube($s) {
        return pow($s, 3);
    }
    function RectPrism($l, $w, $h) {
        return $l * $w * $h;
    }
    function Cylinder($r, $h) {
        return pi() * pow($r, 2) * $h;
    }
    function Cone($r, $h) {
        return (1/3) * pi() * pow($r, 2) * $h;
    }
    function Sphere($r) {
        return (4/3) * pi() * pow($r, 3);
    }
    ?>

    <table>
        <tr>
            <th colspan="4">Volume of Shapes</th>
        </tr>
        <tr>
            <th>Shape</th>
            <th>Values</th>
            <th>Formula</th>
            <th>Answer</th>
        </tr>
        <tr>
            <td>Cube</td>
            <td>s = 5</td>
            <td>v = s³</td>
            <td><?php echo number_format(Cube(5), 2); ?></td>
        </tr>
        <tr>
            <td>Rectangular Prism</td>
            <td>l = 4, w = 3, h = 6</td>
            <td>v = l × w × h</td>
            <td><?php echo number_format(RectPrism(4, 3, 6), 2); ?></td>
        </tr>
        <tr>
            <td>Cylinder</td>
            <td>r = 3, h = 7</td>
            <td>v = πr²h</td>
            <td><?php echo number_format(Cylinder(3, 7), 2); ?></td>
        </tr>
        <tr>
            <td>Cone</td>
            <td>r = 4, h = 9</td>
            <td>v = ⅓πr²h</td>
            <td><?php echo number_format(Cone(4, 9), 2); ?></td>
        </tr>
        <tr>
            <td>Sphere</td>
            <td>r = 6</td>
            <td>v = ⁴⁄₃πr³</td>
            <td><?php echo number_format(Sphere(6), 2); ?></td>
        </tr>
    </table>
    
<?php require 'footer.php'; ?>
</body>
</html>