<?php

  if(isset($_POST['updatesubmit']))
  { 
    $empid = $_GET['idname'];
    $eName = $_POST['ename'] ;
    $eMail = $_POST['eemail'] ;
    $eMobile = $_POST['emobile'];
    $eCity= $_POST['ecity'];
    $efileName = $_FILES['eupload']['name'];
    $fileTemp = $_FILES['eupload']['tmp_name'];
    $fileSize = $_FILES['eupload']['size'];
    $file_dest = "../upload/".$efileName;
    move_uploaded_file($fileTemp,$file_dest);

    $eUpdate = "UPDATE `employee` SET `Name` = '$eName', `Mail` = '$eMail', `Mobile` = '$eMobile',' `City`='$eCity' , ' `Profile_img`='$efileName' WHERE `employee`.`Id` = '$empid'";
      
    if($connect)
    {
        if(mysqli_query($connect,$eUpdate))
        {
            echo "<script>
            alert('data updated successfully')
            window.location.href='dashborad.php'
             </script>";
        }
        else
        {
             die(mysqli_error($connect).'data not updated succesfully');
        }
    }
}


?>