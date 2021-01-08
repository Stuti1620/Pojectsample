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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="css/demo.css" rel="stylesheet" />
</head>

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
          <li class="active-pro active">
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
      <?php include_once "include/navigation.php";?>

      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="card card-upgrade">
              <div class="card-header text-center">
                <h4 class="card-title">Now UI Dashboard PRO</h3>
                  <p class="card-category">Are you looking for more components? Please check our Premium Version of Now UI Dashboard PRO.</p>
              </div>
              <div class="card-body">
                <div class="table-responsive table-upgrade">
                  <table class="table">
                    <thead>
                      <th></th>
                      <th class="text-center">Free</th>
                      <th class="text-center">PRO</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Components</td>
                        <td class="text-center">16</td>
                        <td class="text-center">160</td>
                      </tr>
                      <tr>
                        <td>Plugins</td>
                        <td class="text-center">4</td>
                        <td class="text-center">13</td>
                      </tr>
                      <tr>
                        <td>Example Pages</td>
                        <td class="text-center">7</td>
                        <td class="text-center">27</td>
                      </tr>
                      <tr>
                        <td>Login, Register, Pricing, Lock Pages</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Mini Sidebar</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td>Premium Support</td>
                        <td class="text-center"><i class="now-ui-icons ui-1_simple-remove text-danger"></i></td>
                        <td class="text-center"><i class="now-ui-icons ui-1_check text-success"></i></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-center">Free</td>
                        <td class="text-center">Just $49</td>
                      </tr>
                      <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                          <a href="#" class="btn btn-round btn-default disabled">Current Version</a>
                        </td>
                        <td class="text-center">
                          <a target="_blank" href="https://www.creative-tim.com/product/now-ui-dashboard-pro?ref=nud-free-upgrade-live" class="btn btn-round btn-primary">Upgrade to PRO</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once "include/footer.php";?>