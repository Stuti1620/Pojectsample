
<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My login page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">  
        <link rel="stylesheet" href="css/fromcss.css">
    </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box" method ="POST" action="db/logincheck.php">
                    <h1>Login</h1>
                    <?php
                        if(isset($_GET['emptybox']))
                        {
                            echo "<p class='text-muted'>" .$_GET['emptybox']."</p>";
                        }
                        else
                        {echo "<p class='text-muted'> Please enter your login and password!</p>";}
                    ?>
                     
                    <input type="text" name="aName" placeholder="Admin Name"> 
                    <input type="password" name="aPass" placeholder="Admin Password"> 
                    <a class="forgot text-muted" href="#">Forgot password?</a> 
                    <input type="submit" name="submit" value="Login">
                    <a class="forgot text-muted" href="adminregister.html">New User Please SignUp</a>
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li>
                                <a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>