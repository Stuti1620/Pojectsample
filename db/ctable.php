<?php 
include("connection.php");
if($connect)
    {
        $tablecreate1 = "CREATE TABLE `sampledb`.`admin` ( `Id` INT(5) NULL AUTO_INCREMENT , `FName` VARCHAR(30) NOT NULL ,`LName` VARCHAR(30) NOT NULL , `Mail` VARCHAR(20) NOT NULL , `Mobile_no` VARCHAR(10) NOT NULL ,`Password` VARCHAR(14) NOT NULL ,`Profile_img` VARCHAR(500) NOT NULL, PRIMARY KEY (`Id`)) ENGINE = InnoDB ";
        if(mysqli_query($connect,$tablecreate1))
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