<?php
// 1. time(): Returns the current Unix timestamp
$timestamp = time();
echo "Current Unix timestamp: " . $timestamp . "<br>";

// 2. date(): Formats a timestamp into a human-readable date
echo "Current Date and Time (Y-m-d H:i:s): " . date("Y-m-d H:i:s", $timestamp) . "<br>";

// 3. mktime(): Generates a Unix timestamp for a specific date (17th March 2025)
$customTimestamp = mktime(0, 0, 0, 3, 17, 2025);
echo "Unix timestamp for 17th March 2025: " . $customTimestamp . "<br>";

// 4. localtime(): Returns an array with local time information
$localTime = localtime(time(), true);
echo "Local Hour: " . $localTime['tm_hour'] . "<br>";
echo "Local Minute: " . $localTime['tm_min'] . "<br>";
echo "Local Second: " . $localTime['tm_sec'] . "<br>";
echo "Local Day: " . $localTime['tm_mday'] . "<br>";
echo "Local Month: " . ($localTime['tm_mon'] + 1) . "<br>"; // Months are zero-based
echo "Local Year: " . ($localTime['tm_year'] + 1900) . "<br>";

// 5. strtotime(): Converts a human-readable date string into a timestamp
$futureDate = "2025-12-31";
$futureTimestamp = strtotime($futureDate);
echo "Unix timestamp for $futureDate: " . $futureTimestamp . "<br>";

echo "This code is executed by Kulraj Singh 113!";
?>
