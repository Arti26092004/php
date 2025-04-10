<?php
// Associative array to store subject marks
$marks = array(
    "Maths" => 85,
    "English" => 78,
    "Science" => 92,
    "History" => 74,
    "Computer" => 88
);

// Calculate total marks
$totalMarks = array_sum($marks);

// Number of subjects
$totalSubjects = count($marks);

// Calculate percentage
$percentage = ($totalMarks / ($totalSubjects * 100)) * 100;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Student Marks</h2>

<table>
    <tr>
        <th>Subject</th>
        <th>Marks</th>
    </tr>
    <?php
    foreach ($marks as $subject => $mark) {
        echo "<tr><td>$subject</td><td>$mark</td></tr>";
    }
    ?>
    <tr>
        <th>Total Marks</th>
        <td><?php echo $totalMarks; ?></td>
    </tr>
    <tr>
        <th>Percentage</th>
        <td><?php echo number_format($percentage, 2) . "%"; ?></td>
    </tr>
</table>

</body>
</html>

?>