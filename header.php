<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>QESPL || Dashboard</title>
  <link rel="icon" href="dist/img/quick_logo_small.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css" />

  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" />
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" />
  <script src="dist/js/jquery.min.js"></script>
  <script src="api/fetch.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <!-- chart js -->
  <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
  <!-- DataTables Buttons CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" />
  <!-- jQuery UI CSS -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
</head>
<?php session_start();
if (empty($_SESSION['loggedin']) || $_SESSION['loggedin'] == '') {
  header("Location: signin.php");
  die();
}
?>
<style>
  .dropdown:hover .dropdown-menu {
    display: block;
  }
</style>

<body class="hold-transition skin-blue sidebar-mini body_img">
  <div class="wrapper">
    <header class="main-header">
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top nav_top">
        <!-- Sidebar toggle button-->
        <div class="row row_top">
          <div class="col top_ele burg">
            <a href="#" class="sidebar-toggle burger_color" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
          </div>

          <div class="col top_ele">
            <img style="width: 280px; filter: drop-shadow(2px 4px 6px white)" src="dist/img/quick_logo_big.png" class="" />
          </div>
          <div class="col end">
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">1</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 1 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu">
                        <li>
                          <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Test Alert
                            Message
                          </a>
                        </li>

                      </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                  </ul>
                </li>

                <!-- Tasks: style can be found in dropdown.less -->

                <!-- Toll plaza -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle">
                    <span class="hidden-xs" style="font-size: 22px">Toll Plaza 1</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="dist/img/quick_logo_small.png" class="img-circle" alt="User Image" />
                      <p>
                        ABC Nagar, Update
                        <small><a class="gw-mob-num" href="tel:+91 9 000 111 222">9 000 111 222</a></small>
                      </p>
                    </li>
                    <!-- Menu Body -->
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="nav_btn">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="nav_btn">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- Toll plaza -->
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->

      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/quick_logo_small.png" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
            <p class="logo_text">QESPL</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- search form -->

        <!-- sidebar menu -->
        <ul class="sidebar-menu">
          <li class="active treeview">
            <ul class="treeview-menu">
              <li class="">
                <a class="menu_icon <?php if ($page == 'index') {
                                      echo "click_active";
                                    } else {
                                      "";
                                    } ?> " href="index.php">
                  <i class="fa fa-home fa_icon"></i> Dashboard</a>
              </li>

              <li class="">
                <a class="menu_icon <?php if ($page == 'parameter') {
                                      echo "click_active";
                                    } else {
                                      "";
                                    } ?>" href="parameters.php">
                  <i class="fa fa-dashboard fa_icon"></i> Set Parameters</a>
              </li>

              <li class="">
                <a class="menu_icon <?php if ($page == 'setprofile') {
                                      echo "click_active";
                                    } else {
                                      "";
                                    } ?>" href="setprofile.php">
                  <i class="fa fa-user fa_icon"></i> Set Profile</a>
              </li>

              <li class="parent">
                <a class="menu_icon <?php if ($page == 'download') {
                                      echo "click_active";
                                    } else {
                                      "";
                                    } ?>" href="#" style="color:white;">
                  <i class="fa fa-cloud-download fa_icon"></i> Download Data
                  <i class="fa fa-angle-down" style="font-size: 20px"></i>
                  <i class="fa fa-angle-up" style="font-size: 20px; display: none"></i>
                </a>
                <ul class="submenu">
                  <li style="margin-bottom: 10px">
                    <a class="<?php if ($page == 'download') {
                                echo "click_active";
                              } else {
                                "";
                              } ?>" href="download-data.php">
                      <i class="fa fa-dot-circle-o" aria-hidden="true"></i> All Data
                    </a>
                  </li>
                  <li style="margin-bottom: 10px">
                    <a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Temperature</a>
                  </li>
                  <li style="margin-bottom: 10px">
                    <a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Humidity</a>
                  </li>
                </ul>
              </li>



              <li class="">
                <a class="menu_icon <?php if ($page == 'systemsetting') {
                                      echo "click_active";
                                    } else {
                                      "";
                                    } ?>" href="systemsettings.php">
                  <i class="fa fa-cogs fa_icon"></i> System Settings</a>
              </li>
            </ul>
          </li>
        </ul>

        <!-- sidebar menu -->
      </section>
    </aside>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const parentMenu = document.querySelector(".parent");
        const submenu = parentMenu.querySelector(".submenu");

        parentMenu.addEventListener("click", function(e) {
          e.preventDefault();
          submenu.classList.toggle("show");
          toggleIcons();
        });

        // Add click event listener for the "All Data" link
        const allDataLink = submenu.querySelector("a[href='download-data.php']");
        allDataLink.addEventListener("click", function(e) {
          e.preventDefault(); // Prevent the default link behavior
          window.location.href = "download-data.php"; // Manually navigate to download-data.php
        });

        function toggleIcons() {
          const downIcon = parentMenu.querySelector(".fa-angle-down");
          const upIcon = parentMenu.querySelector(".fa-angle-up");
          downIcon.style.display = submenu.classList.contains("show") ? "none" : "inline-block";
          upIcon.style.display = submenu.classList.contains("show") ? "inline-block" : "none";
        }
      });
    </script>