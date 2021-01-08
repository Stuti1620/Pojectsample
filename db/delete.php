
<?php
session_start();
include('connection.php');
$empid = $_GET['idname'];
$empDelet = 'DELETE FROM `employee` WHERE Id ="'.$empid.'"' ;
if($connect)
{
    if(mysqli_query($connect,$empDelet))
    {
        echo "<script>alert('data deleted successfully');
                window.location='../dashboard.php';
                 </script>";
    }
    else
    {
        echo "<script>alert('data not deleted successfully');
            window.location='../dashboard.php';
             </script>";
    }
}
  
?>