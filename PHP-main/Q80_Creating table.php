<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // sql to create table
    $sql = "CREATE TABLE students (
    Stud_ID int(11) NOT NULL,
    Stud_Name varchar(40) NOT NULL,
    Stud_Email varchar(40) NOT NULL,
    Stud_Contact char(10) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table students created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
    echo"<br>This code is executed by Kulraj Singh 113!!";
?>