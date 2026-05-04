<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2 - Grading System</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            color: #5f5fff;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            border: 1px solid #000;
        }
        th {
            padding: 8px;
            text-align: left;
        }
        td {
            padding: 8px;
            border: 1px solid #000;
        }
    </style>    
</head>
<body>
    <?php
        $name = "Ericson John S. Yu"; // THE NAME
        $grade = 59; // THE GRADE
        $rank = "";

        if ($grade >= 93 && $grade <= 100) {
            $rank = "A";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ea5489be478613512121_43.png' alt='Happy Emoji' style='width: 100px; height: auto;'></center>";  
        } elseif ($grade >= 90 && $grade <= 92) {
            $rank = "A-";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ebb4e15ae36942b44682_17.png' alt='Moderately Happy Emoji' style='width: 100px; height: auto;'></center>";
        } elseif ($grade >= 87 && $grade <= 89) {
            $rank = "B+";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ebb4e15ae36942b44682_17.png' alt='Moderately Happy Emoji' style='width: 100px; height: auto;'></center>";
        } elseif ($grade >= 83 && $grade <= 86) {
            $rank = "B";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png' alt='Contented Emoji' style='width: 100px; height: auto;'></center>";
        } elseif ($grade >= 80 && $grade <= 82) {
            $rank = "B-";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3eb826bc6e984281381bc_20.png' alt='Contented Emoji' style='width: 100px; height: auto;'></center>";
        } elseif ($grade >= 77 && $grade <= 79) {
            $rank = "C+";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ebee9fba77d7c220630c_15.png' alt='Blank Smile Emoji' style='width: 100px; height: auto;'></center>";
        } elseif ($grade >= 73 && $grade <= 76) {
            $rank = "C";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ebee9fba77d7c220630c_15.png' alt='Blank Smile Emoji' style='width: 100px; height: auto;'></center>";
        } elseif ($grade >= 70 && $grade <= 72) {
            $rank = "C-";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3ebee9fba77d7c220630c_15.png' alt='Blank Smile Emoji' style='width: 100px; height: auto;'></center>";
        } elseif ($grade >= 67 && $grade <= 69) {
            $rank = "D+";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e9d199f130135a88d4b8_55.png' alt='Fearful Emoji' style='width: 100px; height: auto;'></center>";
        } elseif ($grade >= 63 && $grade <= 66) {
            $rank = "D";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e9d199f130135a88d4b8_55.png' alt='Fearful Emoji' style='width: 100px; height: auto;'></center>";
        } elseif ($grade >= 60 && $grade <= 62) {
            $rank = "D-";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e9d199f130135a88d4b8_55.png' alt='Fearful Emoji' style='width: 100px; height: auto;'></center>";
        } else {
            $rank = "F";
            $pic = "<center><img src='https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/66b3e64db28ac4501d1bfbf1_67.png' alt='Sad Emoji' style='width: 100px; height: auto;'></center>";
        }
    ?>
    <table>
        <tr>
            <th>Name: <?php echo $name; ?></th>
        </tr>
        <tr>
            <td>Rank: <?php echo $rank; ?></td>
            <td>Grade: <?php echo $grade; ?></td>
            <td><?php echo $pic; ?></td>
        </tr>
    </table>


</body>
</html>