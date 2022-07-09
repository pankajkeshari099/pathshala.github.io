<?php
session_start();
include "connection.php";
$email=$_SESSION['email'];
$sqli="SELECT * FROM registration where email='$email'";
$querys=mysqli_query($con,$sqli);
$ress=mysqli_fetch_assoc($querys);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Pathshala Admin</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />    
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />    
    <!--<link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />-->
   <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
      #logo
 {
  width:50px;
   height:50px;
   border-radius: 50px;
 }
#head{
    color: #4599cd;
}

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="#"><img src="../image/logom.png" id="logo" /> <span>Pathshala</span></a>
         <br><br>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">

            <br><br>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span>Welcome to Pathshala</span><br>
                             <span class="font-weight-medium mb-2"><?php echo $ress['fname']?> <?php echo $ress['lname']?></span>
               
              </div>
         
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_detail.php">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Me</span>
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="Post_Books.php">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Post Books</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posted.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Posted</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_details.php">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">User Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_applied.php">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">User Applied Books</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="message.php">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Message Box</span>
            </a>
          </li>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <ul class="mt-4 pl-0">
                  <a href="logout.php"><li>Logout</li></a>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
        
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
                  <span class="profile-name"><?php echo $ress['fname']?> <?php echo $ress['lname']?></span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Me </a>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        
        <div class="main-panel">
        <div class="container py-3">                       
         <h1 class="text-center pb-3" id="head">User Details</h1>
         <table class="table table-bordered table-responsive table-hover">
            <thead class="thead-dark">
              <tr>
                <th>id</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody>
                              
<?php
include "connection.php";
$sql="SELECT * FROM message ";
$query=mysqli_query($con,$sql);
while($res=mysqli_fetch_assoc($query))
{
?>
              <tr>
                <td><?php echo $res['id'];?></td>
                <td><?php echo $res['name'];?></td>
                <td><?php echo $res['email'];?></td>
                <td><?php echo $res['msg'];?></td>
              </tr>

    <?php
    }
    ?>          
            </tbody>
          </table>
        </div>
        
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©2022 Pathshala</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">   Designed by <strong>Priya & Pankaj</strong ></span>
            </div>
          </footer>
        </div>
      </div>
    </div>
        <!-- main-panel ends -->
      
      <!-- page-body-wrapper ends -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
