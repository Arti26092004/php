<?php
// Displaying local time information
print_r(localtime());
echo "<br><br>";

// Correct usage of print_r with localtime and associative array
print_r(localtime(time(), true));
?>
