<?php
	$numbers = [12, 45, 2, 99, 8, 67, 34];
	$max = $numbers[0];

	for ($i = 1; $i < count($numbers); $i++) {
    		if ($numbers[$i] > $max) {
        		$max = $numbers[$i];
    		}
	}

	echo "The biggest number in the array is: " . $max;
	echo "<br><br>";
    echo "Made By Kulraj Singh 113";
?>
