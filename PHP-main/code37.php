<?php
	//First Method
	$numbers = array(1,2,3,4,5);
	foreach($numbers as $value){
		echo "Value is: $value <br/>";
	}

	echo "<br>";

	//Second Method
	$numbers[0] = "one";
	$numbers[1] = "two";
	$numbers[2] = "three";
	$numbers[3] = "four";
	$numbers[4] = "five";
	
	foreach($numbers as $value){
		echo "Value is: $value <br/>";
	}
	
	echo "<br>";
	    echo "Made By Kulraj Singh 113";
?>