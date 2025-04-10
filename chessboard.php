<!DOCTYPE html>
<html>
<head>
    <title>Chess Board in PHP</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 60px;
            height: 60px;
        }
        .white {
            background-color: #ffffff;
        }
        .black {
            background-color: #000000;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Chess Board in PHP</h2>

<?php
echo "<table border='1'>";

for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        $total = $row + $col;
        if ($total % 2 == 0) {
            echo "<td class='white'></td>";
        } else {
            echo "<td class='black'></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>