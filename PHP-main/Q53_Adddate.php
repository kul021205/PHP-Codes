<?php

    $date=date_create("2025-03-10");
    date_add($date,date_interval_create_from_date_string("40 days"));
    echo date_format($date,"Y-m-d");
    echo"<br>";
    echo"This code is executed by Kulraj Singh 113!";

?>