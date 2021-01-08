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
<body class="">
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
          <li>
            <a href="employee.php">
              <i class="far fa-bell"></i>
              <p>Employees Form</p>
            </a>
          </li>
          <li>
          <?php echo '<a href="user.php?idname='.$rows['Id'].'">
              <i class="far fa-user"></i>
              <p>User Profile</p>
            </a>';?>
          </li>
          <li class="active">
          <?php echo '<a href="tables.php?idname='.$rows['Id'].'">
              <i class="far fa-list-ul"></i>
              <p>Tables</p>
            </a>';?>
          </li>
          <li>
          <?php echo '<a href="typography.php?idname='.$rows['Id'].'">
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
                  <a class="dropdown-item" href="#">Action</a>
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
      <?php 
        $empid = $_GET['idname'];
        if($connect)
        { 
            
            $Select1 = "select * from employee where Id = '".$empid."'";
            $result1 = mysqli_query($connect,$Select1);
            if($result1)
            {
              if(mysqli_num_rows($result1) > 0)
              {
                 
                 while($rows = mysqli_fetch_assoc($result1))
                 {
                  
      ?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-md-6">
                  <img src=<?php echo "upload/".$rows['Profile_img']; ?> class="img-thumbnail" alt="..." width="700px" height=" 500px">
                  
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h5 class="card-title display-3"><?php echo $rows['Name'];?></h5>
                    <p class="card-text h5">Email Id  : <?php echo $rows['Mail'];?></p>
                    <p class="card-text h5">Mobile_ No  : <?php echo $rows['Mobile_no'];?></p>
                    <p class="card-text h5">City : <?php echo $rows['City'];?></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Simple Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
                      <thead class=" text-primary">
                        <th>Employees Id</th>
                        <th>Name</th>
                        <th>Mail </th> 
                        <th>Mobile No</th>
                        <th>City</th>               
                      </thead>
                      <tbody>
                    <?php
                      
                                echo "<tr><td><a href='tables.php'>Emp0".$rows['Id']."</a></td>";
                                echo "<td>".$rows['Name']."</td>";
                                echo "<td>".$rows['Mail']."</td>";
                                echo "<td>".$rows['Mobile_no']."</td>";
                                echo "<td>".$rows['City']."</td>";
                              
                              }
                                echo "</tbody>";
                                echo "</table>";
                            }
                          }
                          else
                          {
                              echo "data not fetch";
                          }
                      }
                      else 
                      {
                        echo "<script>window.location='AdminLogin.html?emptybox=session expire';</script>";
                      }
                    ?>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    
      
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="js/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="css/demo.js"></script>
  <?php
}
  ?>
</body>

</html>
