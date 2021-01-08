<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<?php 
session_start();
if(isset($_SESSION['uName']) == TRUE)
{ 
  include_once('include/header.php');
  require_once('db/connection.php');
  $abc = $_SESSION['uName'];
  $select ="select * from admin where Name ='".$abc."'";
  $result=mysqli_query($connect, $select);
  if($result)
  {
      while($rows = mysqli_fetch_assoc($result))
      {

      
 ?>
<body class="user-profile">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="dashboard.php">
            <i class="fas fa-cube"></i>
            <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="icons.php">
            <i class="fas fa-atom"></i>
            <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="map.php">
            <i class="far fa-map"></i>
            <p>Maps</p>
            </a>
          </li>
          <li class="active">
            <a href="employee.php">
            <i class="far fa-bell"></i>
            <p>Employees Form</p>
            </a>
          </li>
          <li>
          <?php echo '<a href="user.php?idno='.$rows['Id'].'">
              <i class="far fa-user"></i>
              <p>User Profile</p>
            </a>';?>
          </li>
          <li>
          <?php echo '<a href="tables.php?idno='.$rows['Id'].'">
              <i class="fas fa-list-ul"></i>
              <p>Tables</p>
            </a>';?>
          </li>
          <li>
          <?php echo '<a href="typography.php?idno='.$rows['Id'].'">
              <i class="fas fa-bold"></i>
              <p>Typograpy</p>
            </a>';?>
          </li>
          <li class="active-pro">
            <a href="upgrade.php">
            <i class="fas fa-cloud-upload-alt"></i>
            <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <img src="icons/loupe.png">
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <img src ="icons/music-sound-wave-line.png">
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="icons/worldwide.png">
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="logout.php">logout</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user.php">
                <?php echo "<img src='upload/".$rows['Profile_img']."' alt='Image Description' class='rounded-circle' width = '22px' height = '22px'>";?>
                  <p>
                    <span class="d-md-block"><?php echo $rows['Name'];}}?></span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              
              <div class="card-body">
                <form method="Post" action="" enctype="multipart/form-data" novalidate>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <?php
                        if(isset($_GET['idname'])== true)
                        {
                          $empid = $_GET['idname'];
                          if($connect)
                          { 
                            $select = "select * from employee where Id='".$empid."'";
                            $result =mysqli_query($connect,$select);
                            if($result)
                            {
                              if(mysqli_num_rows($result)>0)
                              {
                                while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                        <label>Name</label>
                        <input type="text" class="form-control" name="ename" placeholder="Name" value="<?php echo $row['Name'];?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="ecity" placeholder="City Name" value="<?php echo $row['City'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="text" class="form-control" name="emobile" placeholder="Mobile_No." value="<?php echo $row['Mobile_no'];?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="eemail"class="form-control" placeholder="Email" value="<?php echo $row['Mail'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label id="fileupload">User Profile</label>
                        <input type="hidden" name="eupload"  placeholder="Upload your Photo" class="form-control" id="fileupload">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <input type="submit" name="updatesubmit"  placeholder="Submit" class="btn btn-primary btn-lg btn-block">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src=<?php echo "upload/".$row['Profile_img']; ?> alt="...">
                    <h5 class="title"><?php echo $row['Name'];?></h5>
                  </a>
                  <p class="description">
                  <?php echo $row['Mail'];?>
                  </p>
                </div>
                <p class="description text-center">
                <?php echo $row['Mobile_no'];?><br>
                <?php echo $row['City'];?><br>
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php 
        }
      }
    }
    else
    {
      echo "data not fetch";
    }
  }
  
  include_once("include/footer.php");
}
}
else
{
  echo "<script type = 'text/javascript'>window.location.href='AdminLogin.php?emptybox=session expire'</script>'";
}  


?>
<?php
if(isset($_POST['updatesubmit'])==true)
{ 
  require_once("db/connection.php");
  $empid = $_GET['idname'];
  $eName = $_POST['ename'];
  $eMail = $_POST['eemail'];
  $eMobile = $_POST['emobile'];
  $eCity= $_POST['ecity'];
  $efileName = $_FILES['eupload']['name'];
  $fileTemp = $_FILES['eupload']['tmp_name'];
  $fileSize = $_FILES['eupload']['size'];
  $file_dest = "upload/".$efileName;
  move_uploaded_file($fileTemp,$file_dest);
  
  $eUpdate = "UPDATE `employee` SET `Name` = '$eName', `Mail` = '$eMail', `Mobile_no` = '$eMobile', `City` = '$eCity', `Profile_img` = '$efileName ' WHERE `employee`.`Id` = '$empid'";

  if($connect)
  {     
      if(mysqli_query($connect,$eUpdate))
      {
       
          echo "<script>alert('data updated successfully');</script>";
          echo "<script type ='text/javascript'>window.location='dashboard.php'</script>";
      }
      else
      {
           die(mysqli_error($connect).'data not updated succesfully');
      }
  }
}
else
{
  echo "choose an employee form employee table <a href='dashboard.php'>Dashboard</a>";
  include('include/footer.php'); 
}


?>