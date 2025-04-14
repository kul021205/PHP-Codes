<?php
date_default_timezone_set('Asia/Kolkata'); // Set the timezone to New Delhi

$latitude = 28.6139;  // New Delhi Latitude
$longitude = 77.2090; // New Delhi Longitude
$zenith = 90 + (50 / 60); // Standard zenith for sunrise/sunset calculation
$offset = 5.5; // UTC offset for IST (Indian Standard Time)

// Calculate sunrise and sunset times
$sunrise = date("H:i:s", strtotime(date_sunrise(time(), SUNFUNCS_RET_STRING, $latitude, $longitude, $zenith, $offset)));
$sunset = date("H:i:s", strtotime(date_sunset(time(), SUNFUNCS_RET_STRING, $latitude, $longitude, $zenith, $offset)));

echo "Sunrise in New Delhi: $sunrise<br>";
echo "Sunset in New Delhi: $sunset<br>";
echo "This code is executed by Kulraj Singh 113!";
?>