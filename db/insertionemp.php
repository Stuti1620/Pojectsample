<?php 
include ("connection.php");
if(isset($_POST['empsubmit']))
{
    $ename = $_POST['ename'];
    $email = $_POST['eemail'];
    $emobile = $_POST['emobile'];
    $ecity = $_POST['ecity'];
    $efileName = $_FILES['eupload']['name'];
    $fileTemp = $_FILES['eupload']['tmp_name'];
    $fileSize = $_FILES['eupload']['size'];
    $file_dest = "../upload/".$efileName;
    move_uploaded_file($fileTemp,$file_dest);

    // $file_name = $_FILES['empImg']['name'];
    // $file_size = $_FILES['empImg']['size'];
    // $file_tmp = $_FILES['empImg']['tmp_name'];
    // $file_type = $_FILES['empImg']['type'];
    // $file_ext=strtolower(end(explode('.',$_FILES['empImg']['name'])));
    // $extensions= array("jpeg","jpg","png");
    
    // if(in_array($file_ext,$extensions)=== false){
    //    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    // }
    
    // if($file_size > 2097152) {
    //    $errors[]='File size must be excately 2 MB';
    // }
    
    // if(empty($errors)==true) 
    // {
    //    move_uploaded_file($file_tmp,"../upload/".$file_name);
    //   }




  


    $data1 = "INSERT INTO `employee` (`Id`, `Name`, `Mail`, `Mobile_no`, `City`,`Profile_img`) VALUES ('', '$ename', '$email', '$emobile', '$ecity','$efileName')";
    if($connect)
    {
        if(mysqli_query($connect,$data1))
        {
            echo "<script type = 'text/javascript'>window.location='../tables.php';</script> ";
        }
        else
        {
            die(mysqli_error($connect)."data not inserted");
        }
    }
}

//$update = "UPDATE 'student' SET 'name'=, '$sname', 'email' = '$smail', 'mobile'= '$smobile' WHERE 'student'.'id'= 2";
//$delete = "DELETE FROM 'student' WHERE 'id'= 3";
?>
