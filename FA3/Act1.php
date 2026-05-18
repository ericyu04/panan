<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
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
        }
        th {
            background-color: #ffb26a;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID Number</th>
            <th>Name</th>
            <th>Image</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>
        <?php
        $students = array(
            array("id" => "001", "name" => "Ichi",  "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "2000-01-01", "contact" => "1234567890"),
            array("id" => "002", "name" => "Mao", "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "1999-02-02", "contact" => "0987654321"),
            array("id" => "003", "name" => "Denji", "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "2001-03-03", "contact" => "1122334455"),
            array("id" => "004", "name" => "Frieren", "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "1998-04-04", "contact" => "2233445566"),
            array("id" => "005", "name" => "Goro", "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "2002-05-05", "contact" => "3344556677"),
            array("id" => "006", "name" => "Makoto", "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "1997-06-06", "contact" => "4455667788"),
            array("id" => "007", "name" => "Enjin", "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "2003-07-07", "contact" => "5566778899"),
            array("id" => "008", "name" => "Kaito", "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "1996-08-08", "contact" => "6677889900"),
            array("id" => "009", "name" => "Guts", "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "1995-09-09", "contact" => "7788990011"),
            array("id" => "010", "name" => "Aki", "image" => "https://bluemoji.io/cdn-proxy/646218c67da47160c64a84d5/698e41fc8ca563c9d4c24cb9_107.png", "birthday" => "1994-10-10", "contact" => "8899001122")
        );
        usort($students, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });
        
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['id'] . "</td>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td><img src='" . $student['image'] . "' alt='" . $student['name'] . "' width='100'></td>";
            echo "<td>" . $student['birthday'] . "</td>";
            echo "<td>" . $student['contact'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>