<?php
	function isArmstrong($num) {
    	$sum = 0;
    	$temp = $num;
    	$numLength = strlen((string)$num);

    		while ($temp > 0) {
        		$digit = $temp % 10;
        		$sum += pow($digit, $numLength);
        		$temp = (int)($temp / 10);
    		}	

    		return $sum == $num;
	}	

	$number = 153;
	if (isArmstrong($number)) {
    		echo "$number is an Armstrong number.";
	} else {
    		echo "$number is not an Armstrong number.";
	}
	echo "<br><br>";
	    echo "Made By Kulraj Singh 113";
?>
