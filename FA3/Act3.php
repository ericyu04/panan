<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>
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
    function calculate($param1, $param2, $param3) {
        return array(
            'sum' => $param1 + $param2 + $param3,
            'difference' => $param1 - $param2 - $param3,
            'product' => $param1 * $param2 * $param3,
            'quotient' => $param1 / $param2 / $param3
        );
    }
    $param1 = 21;
    $param2 = 67;
    $param3 = 420;
    $results = calculate($param1, $param2, $param3);
    $sum = $results['sum'];
    $difference = $results['difference'];
    $product = $results['product'];
    $quotient = $results['quotient'];
    ?>
    <table>
        <tr>
            <th colspan="2">My Parameter Values: <?php echo $param1; ?>, <?php echo $param2; ?>, <?php echo $param3; ?></th>
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