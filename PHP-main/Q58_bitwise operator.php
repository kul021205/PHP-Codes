<?php
$a = 5;  // 0101 in binary
$b = 3;  // 0011 in binary

echo "Bitwise AND (&): " . ($a & $b) . "<br>";  // 0001 = 1
echo "Bitwise OR (|): " . ($a | $b) . "<br>";   // 0111 = 7
echo "Bitwise XOR (^): " . ($a ^ $b) . "<br>";  // 0110 = 6
echo "Bitwise NOT (a): " . ($a) . "<br>";     // Negation
echo "Left Shift (a << 1): " . ($a << 1) . "<br>";  // 1010 = 10
echo "Right Shift (a >> 1): " . ($a >> 1) . "<br>"; // 0010 = 2

echo "This code is executed by Kulraj Singh 113!";
?>