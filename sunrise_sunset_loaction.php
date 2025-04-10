<?php
$data = "2025-02-23";
$longitude = 77.2000;
$latitude = 28.6139;

// Convert the date to a Unix timestamp
$timestamp = strtotime($data);

// Get sunrise and sunset info
$sun_info = date_sun_info($timestamp, $latitude, $longitude);

// Format sunrise and sunset times
$sunrise = date("H:i:s", $sun_info["sunrise"]);
$sunset = date("H:i:s", $sun_info["sunset"]);

// Display the results
echo "On $data in Delhi:<br>";
echo "Sunrise: $sunrise<br>";
echo "Sunset: $sunset<br>";
?>
