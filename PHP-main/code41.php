<?php
	//First Method
	$salaries = array("roshan" => 2000, "twinkle" => 1000, "zara" => 500);
	echo "Salary of Roshan is: " . $salaries['roshan'] . "<br/>";
	echo "Salary of Twinkle is: " . $salaries['twinkle'] . "<br/>";
	echo "Salary of Zara is: " . $salaries['zara'] . "<br><br>";
	
	//Second Method
	$salaries['roshan'] = "High";
	$salaries['twinkle'] = "Medium";
	$salaries['zara'] = "Low";
	
	echo "Salary of Roshan is: " . $salaries['roshan'] . "<br/>";
	echo "Salary of Twinkle is: " . $salaries['twinkle'] . "<br/>";
	echo "Salary of Zara is: " . $salaries['zara'] . "<br/>";
	
	echo "<br>";
	    echo "Made By Kulraj Singh 113";
?>

