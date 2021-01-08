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
<?php include_once "include/header.php"; ?>
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
          <li class="active">
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
            <a href="user.php">
              <i class="far fa-user"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="tables.php">
              <i class="fas fa-list-ul"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="typography.php">
              <i class="fas fa-bold"></i>
              <p>Typography</p>
            </a>
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
      <?php include_once "include/navigation.php"; ?>

      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                Google Maps
              </div>
              <div class="card-body ">
                <div id="map" class="map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once "include/footer.php";?>