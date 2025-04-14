<?php

    if (!(file_exists("welcome.txt")))
    {
        echo "could not open the file<br>";
    }
    
    else
    {
        $text = fopen("welcome.txt","r");
        var_dump($text)."<br>";
    }
    echo"<br> This code is executed by Kulraj Singh 113!!";
?>