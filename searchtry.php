
<?php 
 
 session_start();
 include "db/connection.php";
 include "include/header.php"
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
          </li>
          <li>
           </li>
          <li>
          <?php ?>
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
            <form action="" method="Post">
            <div class="input-group flex-nowrap no-border">
                <input type="text" class="form-control" placeholder="Search...." aria-label="Search" aria-describedby="addon-wrapping">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                </div>
            </div>
                <!-- <div class="input-group no-border">
                <input type="text" class="form-control" placeholder="Search..." name="try">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fa fa-search"></i> 
                            <input type="submit" class="invisible">
                        </div>
                    </div>
                </div> -->
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
                <?php //echo "<img src='upload/".$rows['Profile_img']."' alt='Image Description' class='rounded-circle' width = '22px' height = '22px'>";?>
                  <p>
                    <span class="d-md-block"><?php// echo $rows['Name'];}}?></span>
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
            <div class="col-md-11">
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
                      if($connect)
    {
    $searchlist = $_POST['try'];
    $Select1 = "select * from employee where Mobile_no like '%".$searchlist."%'";
    $result1 = mysqli_query($connect,$Select1);
    if($result1)
    {
        if(mysqli_num_rows($result1) > 0)
        {
            
            while($rows = mysqli_fetch_assoc($result1))
            {
    
            echo "<tr><td><a href='tables.php'>Emp0".$rows['Id']."</a></td>";
            echo "<td>".$rows['Name']."</td>";
            echo "<td>".$rows['Mail']."</td>";
            echo "<td>".$rows['Mobile_no']."</td>";
            echo "<td>".$rows['City']."</td>";
            echo "<td><img src='upload/".$rows['Profile_img']."' alt='Image Description' class='rounded-circle' width = '50px' height = '50px'></td>";
            
            }
            echo "</tbody>";
            echo "</table>";
        }
    }
    }
    ?>             
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
<?php
 
?>
      
<?php include "include/footer.php";?>