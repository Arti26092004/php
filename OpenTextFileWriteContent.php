<?php
$FileName = "newFile.txt";
$myFile = fopen($FileName, "w") or die("Unable to open file!");
$txt = "John Doe\n";
if (fwrite($myFile, $txt) === false) {
    echo "Failed to write to file!";
} else {
    echo "Content successfully written!";
}
fclose($myFile);
?>
