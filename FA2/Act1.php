<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1 - Measure Conversion Chart</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            background-color: #f9f9f9;
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ffff00;
        }
        
    </style>
</head>
<body>
    <?php
       $base = 1;
        // Metric conversions
        $cm_to_mm = $base * 10;
        $dm_to_cm = $base * 100;
        $m_to_cm = $base * 100;
        $km_to_m = $base * 1000;
        // Imperial conversions
        $ft_to_in = $base * 12;
        $yd_to_ft = $base * 3;
        $ch_to_yd = $base * 22;
        $fur_to_yd = $base * 220;
        $fur_to_ch = $base * 10;//extra
        $mi_to_yd = $base * 1760;
        $mi_to_fur = $base * 8;//extra
        // Metric to Imperial conversions
        $mm_to_in = $base * 0.03937;
        $cm_to_in = $base * 0.39370;
        $m_to_in = $base * 39.370008;
        $m_to_ft = $base * 3.28084;
        $m_to_yd = $base * 1.09361;
        $km_to_yd = $base * 1093.6133;
        $km_to_mi = $base * 0.621371;
        //Imperial to Metric conversions
        $in_to_cm = $base * 2.54;
        $ft_to_cm = $base * 30.48;
        $yd_to_cm = $base * 91.44;
        $yd_to_m = $base * 0.9144;
        $mi_to_m = $base * 1609.344;
        $mi_to_km = $base * 1.609344;
    ?>

    <div style="display: flex; align-items: center; width: 90%; margin: 20px auto;">
        <h1 style="text-align: left; color: #5f5fff; flex: 1;">MEASURE CONVERSION CHART - LENGTHS (UK)</h1>
        <img src="https://gdap.org.ph/wp-content/uploads/2023/04/Far-Eastern-University-Institute-of-Technology.png" alt="feu tech logo" style="width: 100px; height: auto; margin-left: 10px;">
    </div>
    <table>
        <tr>
            <th colspan="6" style="text-align: center;"><strong>METRIC CONVERSIONS</strong></th>
        </tr>
        <tr>
            <td>1 centimetre</td>
            <td>=</td>
            <td><?php echo $cm_to_mm; ?> millimetres</td> 
            <td>1 cm</td>
            <td>=</td>
            <td><?php echo $cm_to_mm; ?> mm</td>
        </tr>
        <tr>
            <td>1 decimetre</td>
            <td>=</td>
            <td><?php echo $dm_to_cm; ?> centimetres</td>
            <td>1 dm</td>
            <td>=</td>
            <td><?php echo $dm_to_cm; ?> cm</td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $m_to_cm; ?> centimetres</td>
            <td>1 m</td>
            <td>=</td>
            <td><?php echo $m_to_cm; ?> cm</td>
        </tr>
        <tr>
            <td>1 kilometre</td>
            <td>=</td>
            <td><?php echo $km_to_m; ?> metres</td>
            <td>1 km</td>
            <td>=</td>
            <td><?php echo $km_to_m; ?> m</td>
        </tr>
    </table>

    <table>
        <tr>
            <th colspan = "6" style="text-align: center;"><strong>IMPERIAL CONVERSIONS</strong></th>
        </tr>
        <tr>
            <td>1 foot</td>
            <td>=</td>
            <td><?php echo $ft_to_in; ?> inches</td>
            <td>1 ft</td>
            <td>=</td>
            <td><?php echo $ft_to_in; ?> in</td>
        </tr>
        <tr>
            <td>1 yard</td>
            <td>=</td>
            <td><?php echo $yd_to_ft; ?> feet</td>
            <td>1 yd</td>
            <td>=</td>
            <td><?php echo $yd_to_ft; ?> ft</td>
        </tr>
        <tr>
            <td>1 chain</td>
            <td>=</td>
            <td><?php echo $ch_to_yd; ?> yards</td>
            <td>1 ch</td>
            <td>=</td>
            <td><?php echo $ch_to_yd; ?> yd</td>
        </tr>
        <tr>
            <td>1 furlong</td>
            <td>=</td>
            <td><?php echo $fur_to_yd; ?> yards</ td>
            <td>1 fur</td>
            <td>=</td>
            <td><?php echo $fur_to_yd; ?> yd (or <?php echo $fur_to_ch; ?> ch)</td>
        </tr>
        <tr>
            <td>1 mile</td>
            <td>=</td>
            <td><?php echo $mi_to_yd; ?> yards</td>
            <td>1 mi</td>
            <td>=</td>
            <td><?php echo $mi_to_yd; ?> yd (or <?php echo $mi_to_fur; ?> fur)</td>
        </tr>
    </table>

    <table>
        <tr>
            <th colspan = "6" style="text-align: center;"><strong>METRIC -> IMPERIAL CONVERSIONS</strong></th>
        </tr>
        <tr>
            <td>1 millimetre</td>
            <td>=</td>
            <td><?php echo $mm_to_in; ?> inches</td>
            <td>1 mm</td>
            <td>=</td>
            <td><?php echo $mm_to_in; ?> in</td>
        </tr>
        <tr>
            <td>1 centimetre</td>
            <td>=</td>
            <td><?php echo $cm_to_in; ?> inches</td>
            <td>1 cm</td>
            <td>=</td>
            <td><?php echo $cm_to_in; ?> in</td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $m_to_in; ?> inches</td>
            <td>1 m</td>
            <td>=</td>
            <td><?php echo $m_to_in; ?> in</td>
        </tr>
        <tr>
            <td>1 metre</td>
            <td>=</td>
            <td><?php echo $m_to_ft; ?> feet</td>
            <td>1 m</td>
            <td>=</td>
            <td><?php echo $m_to_ft; ?> ft</td>
        </tr>
            <tr>
                <td>1 metre</td>
                <td>=</td>
                <td><?php echo $m_to_yd; ?> yards</td>
                <td>1 m</td>
                <td>=</td>
                <td><?php echo $m_to_yd; ?> yd</td>
        </tr>
        <tr>
            <td>1 kilometre</td>
            <td>=</td>
            <td><?php echo $km_to_yd; ?> yards</td>
            <td>1 km</td>
            <td>=</td>
            <td><?php echo $km_to_yd; ?> yd</td>
        </tr>
        <tr>
            <td>1 kilometre</td>
            <td>=</td>
            <td><?php echo $km_to_mi; ?> miles</td>
            <td>1 km</td>
            <td>=</td>
            <td><?php echo $km_to_mi; ?> mi</td>
        </tr>
    </table>
    
    <table>
        <tr>
            <th colspan = "6" style="text-align: center;"><strong>IMPERIAL -> METRIC CONVERSIONS</strong></th>
        </tr>
        <tr>
            <td>1 inch</td>
            <td>=</td>
            <td><?php echo $in_to_cm; ?> centimetres</td>
            <td>1 in</td>
            <td>=</td>
            <td><?php echo $in_to_cm; ?> cm</td>
        </tr>
        <tr>
            <td>1 foot</td>
            <td>=</td>
            <td><?php echo $ft_to_cm; ?> centimetres</td>
            <td>1 ft</td>
            <td>=</td>
            <td><?php echo $ft_to_cm; ?> cm</td>
        </tr>
        <tr>
            <td>1 yard</td>
            <td>=</td>
            <td><?php echo $yd_to_cm; ?> centimetres</td>
            <td>1 yd</td>
            <td>=</td>
            <td><?php echo $yd_to_cm; ?> cm</td>
        </tr>
        <tr>
            <td>1 yard</td>
            <td>=</td>
            <td><?php echo $yd_to_m; ?> metres</td>
            <td>1 yd</td>
            <td>=</td>
            <td><?php echo $yd_to_m; ?> m</td>
        </tr >
        <tr>
            <td>1 mile</td>
            <td>=</td>
            <td><?php echo $mi_to_m; ?> metres</td>
            <td>1 mi</td>
            <td>=</td>
            <td><?php echo $mi_to_m; ?> m</td>
        </tr>
        <tr>
            <td>1 mile</td>
            <td>=</td>
            <td><?php echo $mi_to_km; ?> kilometres</td>
            <td>1 mi</td>
            <td>=</td>
            <td><?php echo $mi_to_km; ?> km</td>
        </tr>
    </table>
</body>
<footer style="margin: 20px auto;">
    <div style="display: flex; align-items: center;">
        <p style="margin: 0; text-align: center; flex: 1;">&copy; 2026 Ericson John S. Yu</p>
        <img src="https://www.wallmonkeys.com/cdn/shop/products/47002791-LRG_530x.jpg?v=1578660671" alt="emoji time" style="width: 100px; height: auto;">
    </div>
</footer>
</html >