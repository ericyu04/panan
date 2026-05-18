<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
    <style>
        table {
            width: 85%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            text-align: center;
        }
        th {
            background-color: #ffb26a;
        }
    </style>
</head>
<body>
    <?php
    $numbers = array(1,2,3,4,5,6,7,8,9,10);
    $sum = 0;
    $difference = 0;
    $product = 1;
    $quotient = 1;
    foreach ($numbers as $number) {
        $sum += $number;
        $difference -= $number;
        $product *= $number;
        $quotient /= $number;
    }
    ?>
    <table>
        <tr>
            <th colspan="2">Array list: 1,2,3,4,5,6,7,8,9,10</th>
        </tr>
        <tr>
            <th>Operation</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>Sum</td>
            <td><?php echo $sum; ?></td>
        </tr>
        <tr>
            <td>Difference</td>
            <td><?php echo $difference; ?></td>
        </tr>
        <tr>
            <td>Product</td>
            <td><?php echo $product; ?></td>
        </tr>
        <tr>
            <td>Quotient</td>
            <td><?php echo $quotient; ?></td>
        </tr>
    </table>
</body>
</html>