<?php
session_start();
unset($_SESSION["uName"]);
echo "<script>window.location.href='AdminLogin.php?emptybox=session expire'</script>";


?>