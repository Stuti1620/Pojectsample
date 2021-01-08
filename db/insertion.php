<?php 
include ("connection.php");
if(isset($_POST['adminsubmit']))
{
    $aname = $_POST['aName'];
    $amail = $_POST['aEmail'];
    $amobile = $_POST['aMobile'];
    $apass = $_POST['aPass'];
    $fileName = $_FILES['upload']['name'];
    $fileTemp = $_FILES['upload']['tmp_name'];
    $fileSize = $_FILES['upload']['size'];
    $file_dest = "../upload/".$fileName;
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







    $data = "INSERT INTO `admin` (`Id`, `Name`, `Mail`, `Mobile_no`, `Password`,`Profile_img`) VALUES ('', '$aname', '$amail', '$amobile', '$apass','$fileName')";
    if($connect)
    {
        if(mysqli_query($connect,$data))
        {
            echo "<script type = 'text/javascript'>window.location='../AdminLogin.html';</script> ";
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
