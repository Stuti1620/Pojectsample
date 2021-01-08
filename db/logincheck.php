<?php 
session_start();
require_once('connection.php');
 if(isset($_POST['submit']))
{
    if(isset($_POST['aName']) && isset($_POST['aPass']))
    {
        $AName = $_POST['aName'];
        $APassword = $_POST['aPass'];
        if(empty($AName) || empty($APassword))
        {
            echo "<script>window.location.href='../AdminLogin.php?emptybox=fill in blanks'</script>";
        }
        else
        {
            if($connect)
            {
                $select = 'select * from admin where Name ="'. $AName .'" and  Password ="'.$APassword.'"';
                $result = mysqli_query($connect, $select);
                if($result)
                {   
                    if(mysqli_fetch_assoc($result))
                    {
                        $_SESSION['uName'] = $_POST['aName'] ; 
                        echo "<script type = 'text/javascript'>window.location='../dashboard.php';</script> ";
                    }
                    else
                    {
                        echo "<script type = 'text/javascript'>window.location='../AdminLogin.php?emptybox= invalid user name and password';</script>";
                    }
                
                }
                else
                {
                    die(mysqli_error($connect));
                }
            }
        }
    }
}
?>