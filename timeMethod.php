<!DOCTYPE html>
<html>
<head>
    <title>Time Function Demo</title>
</head>
<body>

<h2>PHP time() Function Demo</h2>

<?php
// Get current Unix timestamp
$currentTime = time();

// Display the raw timestamp
echo "<p>$currentTime</p>";

// Convert the timestamp to readable date & time
echo "<p>" . date("Y-m-d H:i:s", $currentTime) . "</p>";
?>

</body>
</html>
