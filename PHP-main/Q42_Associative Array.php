<?php
     
        $salaries = array("roshan" => 2000, "twinkle" => 1000, "zara" => 500);
     
    echo "Salary of Roshan is ". $salaries['roshan'] . "<br>";
    echo "Salary of Twinkle is ".  $salaries['twinkle']. "<br>";
    echo "Salary of Zara is ".  $salaries['zara']. "<br>";
     
    
    $salaries['roshan'] = "high";
    $salaries['qadir'] = "medium";
    $salaries['twinkle'] = "low";
     
    echo "Salary of Roshan is ". $salaries['roshan'] . "<br>";
    echo "Salary of Twinkle is ".  $salaries['twinkle']. "<br>";
    echo "Salary of Zara is ".  $salaries['zara']. "<br>";
    echo"<br>This code is executed by Kulraj Singh 113!";
    
?>
