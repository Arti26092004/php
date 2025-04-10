<?php
$marks = array(
    "DIYA" => array(
        "physics" => 75,
        "maths" => 90,
        "Bio" => 96,
        "IP" => 100,
        "Psychology" => 80,
    )
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks for DIYA</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #F2F2F2;
        }
        .Footer {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>
<h2 style="text-align: center;">Marks for DIYA</h2>
<table>
<tr>
    <th>S.No</th>
    <th>Subject</th>
    <th>Marks</th>
</tr>
<?php
$serial_no = 1;
foreach ($marks["DIYA"] as $subject => $score) {
    echo "<tr>
        <td>" . $serial_no++ . "</td>
        <td>" . ucfirst($subject) . "</td>
        <td>" . $score . "</td>
    </tr>";
}
$total_marks = array_sum($marks["DIYA"]);
$total_subj = count($marks["DIYA"]);
$out_of = $total_subj * 100;
$perc = ($total_marks / $out_of) * 100;
?>
<tr>
    <td colspan="2"><strong>Percentage</strong></td>
    <td><strong><?php echo number_format($perc, 2); ?> %</strong></td>
</tr>
</table>
<div class="Footer">
    <p>Generated dynamically via PHP</p>
</div>
</body>
</html>
