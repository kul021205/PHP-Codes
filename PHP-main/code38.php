<?php
	$a = ["a" => 1, "b" => 2, "c" => 3];
	$b = ["c" => 4, "d" => 5];

	// Union
	$union = $a + $b; 
	print_r($union); // Keeps values from $a for duplicate keys
	echo "<br>";

	// Equality
	var_dump($a == ["a" => 1, "b" => 2, "c" => 3]); // true
	echo "<br>";

	// Identity
	var_dump($a === ["a" => 1, "b" => 2, "c" => 3]); // true (same order)
	echo "<br>";

	// Inequality
	var_dump($a != $b); // true
	echo "<br>";
	
	// Non-identity
	var_dump($a !== ["b" => 2, "a" => 1, "c" => 3]); // true (order mismatch)
	echo "<br><br>";
	    echo "Made By Kulraj Singh 113";
?>
