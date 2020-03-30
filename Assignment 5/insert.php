<?php

    $First_Name = filter_input(INPUT_POST, 'First_Name');
    $Last_Name = filter_input(INPUT_POST, 'Last_Name');
    $Position = filter_input(INPUT_POST, 'Position');
    $Email_Id = filter_input(INPUT_POST, 'Email_Id');
    $Mobile_Number = filter_input(INPUT_POST, 'Mobile_Number');
    $Gender = filter_input(INPUT_POST, 'Gender');
    $Institute_Organisation = filter_input(INPUT_POST, 'Institute_Organisation');
    $City = filter_input(INPUT_POST, 'City');
    $Pin_Code = filter_input(INPUT_POST, 'Pin_Code');
    $State = filter_input(INPUT_POST, 'State');
    $Country = filter_input(INPUT_POST, 'Country');

    $host       = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname     = "pruthil";
    
    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) 
    {
        die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } 
    else 
    {
        $sql =  "INSERT INTO userinfo (First_Name, Last_Name, Position, Email_Id, Mobile_Number, Gender, Institute_Organisation, City, Pin_Code, State, Country)
        values ('$First_Name','$Last_Name','$Position','$Email_Id','$Mobile_Number','$Gender','$Institute_Organisation','$City','$Pin_Code','$State','$Country') ";
        
        if ($conn->query($sql)) 
        {
            echo "New record is inserted sucessfully";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>". $conn->error;
        }
        $conn->close();
    }
?>