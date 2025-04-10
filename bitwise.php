<!DOCTYPE html>
<html>
<head>
    <title>Bitwise Operators Demo</title>
</head>
<body>

<h2>PHP Bitwise Operators Demo</h2>

<?php
$a = 5;  // 0101 in binary
$b = 3;  // 0011 in binary

echo "<p>a = $a</p>";
echo "<p>b = $b</p>";

echo "<p>a & b = " . ($a & $b) . " (Bitwise AND)</p>";       // 0101 & 0011 = 0001 => 1
echo "<p>a | b = " . ($a | $b) . " (Bitwise OR)</p>";        // 0101 | 0011 = 0111 => 7
echo "<p>a ^ b = " . ($a ^ $b) . " (Bitwise XOR)</p>";       // 0101 ^ 0011 = 0110 => 6
echo "<p>~a = " . (~$a) . " (Bitwise NOT)</p>";              // ~0101 = 1010 (32-bit complement)
echo "<p>a << 1 = " . ($a << 1) . " (Left Shift)</p>";       // 0101 << 1 = 1010 => 10
echo "<p>a >> 1 = " . ($a >> 1) . " (Right Shift)</p>";      // 0101 >> 1 = 0010 => 2
?>

</body>
</html>
