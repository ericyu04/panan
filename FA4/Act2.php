<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Functions</title>
    <style>
        body { 
            font-family: Arial, sans-serif; padding: 20px; 
        }
        table {
            width: 100%; 
            border-collapse: collapse; 
            text-align: center; 
        }
        th, td {
            border: 1px solid #333; 
            padding: 10px; 
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>PHP String Functions on 20 Names</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Number of characters</th>
            <th>Uppercase first character</th>
            <th>Replace vowels with @</th>
            <th>Check position of character "a" (starts with 0)</th>
            <th>Reverse name</th>
        </tr>

        <?php
        $names = array(
            "chrisa", "ichi", "saitama", "denji", "maomao", 
            "guts", "hinata", "makoto", "jiwoo", "park", 
            "goku", "luffy", "sukuna", "mitsuki", "rudo", 
            "stark", "musashi", "jinwoo", "dokja", "punpun"
        );

        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

        foreach ($names as $name) {
            $length = strlen($name);
            $ucfirst_name = ucfirst($name);
            $replaced_vowels = str_replace($vowels, "@", $name);
            $pos = strpos(strtolower($name), "a");
            $display_pos = $pos;
            $reversed = strrev($name);

            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$length</td>";
            echo "<td>$ucfirst_name</td>";
            echo "<td>$replaced_vowels</td>";
            echo "<td>$display_pos</td>";
            echo "<td>$reversed</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>