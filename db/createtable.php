<?php
    include("connection.php");
    if($connect)
    {
        $tablecreate = "CREATE TABLE `sampledb`.`employee` ( `Id` INT(5) NULL AUTO_INCREMENT , `Name` VARCHAR(30) NOT NULL , `Mail` VARCHAR(20) NOT NULL , `Mobile_no` VARCHAR(10) NOT NULL ,`Password` VARCHAR(14) NOT NULL ,`Profile_img` VARCHAR(500) NOT NULL, PRIMARY KEY (`Id`)) ENGINE = InnoDB ";
        if(mysqli_query($connect,$tablecreate))
        {
            echo "table created";
        }
        else
        {
            die(mysqli_error($connect)."not connected");
        }

    }
    else{
        die(mysqli_error($connect)."connection not made");

    }
    
?>