<?php
    $hostname ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $connect = mysqli_connect($hostname,$dbusername,$dbpassword);
    if($connect)
    {
        $db = "create database sampledb";
        echo "connection done";
        mysqli_query($connect,$db);

    } 
    else{
        
        echo "connection not done";

    }

?>
