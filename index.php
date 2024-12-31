<!DOCTYPE html>
<html lang="en">
<head>
  <style>

    #button{

  border-radius: 50px;
  border: 20px;
  background-color: hsla(36, 4%, 55%, 0.39);
  color: white;
  font-size: 3em;
  font-weight: bold;
  cursor: pointer;
  gap: 5px;
  padding: 10px 10px ;
}


.card {
  background-color: #343a40; /* Dark card background */
  border-radius: 8px; /* Rounded corners */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
  padding: 15px;
}

.card-button {
  margin: 15px 0; /* Space between cards */
}

.card-body {
  background-color: #2d3238; /* Slightly lighter than card */
  padding: 20px;
  border-radius: 6px;
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
}

h5 {
  font-size: 24px;
  font-weight: bold;
}

.progress-bar {
  transition: width 0.3s ease-in-out;
}

.text-white {
  color: #f8f9fa !important; /* Slightly off-white for better contrast */
}

.small-font {
  font-size: 14px;
}

.row-group {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap; /* Ensure responsiveness */
}
#police {
  background-image: url("assets/images/index/police_uniform_96px.png");
  background-repeat: no-repeat; /* Ensures the image doesn't repeat */
  background-size: contain; /* Scales the image to fit the container */
  background-position: center; /* Centers the image within the element */
  width: 10px; /* Sets a specific width */
  height: 10px; /* Sets a specific height */
}


  </style>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <script> function loadSidebar() { fetch('sidebar.html') .then(response => response.text()) .then(data => { document.getElementById('sidebar-wrapper').innerHTML = data; }); } window.onload = loadSidebar; </script>
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
<!-- Start wrapper-->
<div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">

 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
      <div class="row row-group m-0">
        <!-- Total Orders -->
        <a href="insert-report.php" class="col-12 col-lg-6 col-xl-3 border-light card-button" >
          <div class="card-body">
            <h5 class="text-white mb-0">
              new
              <span class="float-right">
                <span id="Police">
              <img width="30px" height="30px" src="assets/images/index/report.png"></span></h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-primary" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              Insert New Report
              <span class="float-right">
                ..<i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
  
        <!-- Total Revenue -->
        <a href="insert-driver.php" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              new
              <span class="float-right">
                <span id="Police">
                  <img width="40px" height="40px" src="assets/images/index/moto.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-success" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              Register New Driver
              <span class="float-right">
                .. <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
  
        <!-- Visitors -->
        <a href="insert-garage.php" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              new
              <span class="float-right">
                <span id="Police">
                  <img width="30px" height="30px" src="assets/images/index/maintenance.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-warning" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              Insert Garage Record
              <span class="float-right">
                .. <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
  
        <!-- Customer Feedback -->
        <a href="insert-expenses.php" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              new
              <span class="float-right">
      <span id="Police"><img width="30px" height="30px" src="assets/images/index/expense.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-danger" style="width: 70%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              insert new Expenses fees
              <span class="float-right">
                .. <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
  





  <div class="card mt-3">
    <div class="card-content">
      <div class="row row-group m-0">
        <!-- Total Orders -->
        <a href="insert-fine.php" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              new & check
              <span class="float-right">
                <span id="Police"><img width="30px" height="30px" src="assets/images/index/fine.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-primary" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              insert fine & pending
              <span class="float-right">
                .. <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
  
        <!-- Total Revenue -->
        <a href="view-report.php" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              View Report
              <span class="float-right">
                <span id="Police"><img width="30px" height="30px" src="assets/images/index/viewreport.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-success" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              This Month Report
              <span class="float-right">
                .. <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
         
       
        <!-- Visitors -->
        <a href="view-expenses.php" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              view
              <span class="float-right">
                <span id="Police"><img width="30px" height="30px" src="assets/images/index/expense.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-warning" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              Expenses & Garage
              <span class="float-right">
                .. <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
  
        <!-- Customer Feedback -->
        <a href="view-fines.php" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              view
              <span class="float-right">
                <span id="Police"><img width="30px" height="30px" src="assets/images/index/penging.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-danger" style="width: 70%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              Pending & paid fines
              <span class="float-right">
                 <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
  
  <div class="card mt-3">
    <div class="card-content">
      <div class="row row-group m-0">
        <!-- Total Orders -->
        <a href="https://fines.police.gov.rw/" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              Police 
              <span class="float-right">
                <span id="Police"><img width="30px" height="30px" src="assets/images/index/police2.jpg"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-primary" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              Trafic Fines
              <span class="float-right">
                .. <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
  
        <!-- Total Revenue -->
        <a href="https://irembo.gov.rw/user/citizen/service/rnp/traffic_fines" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              Irembo
              <span class="float-right">
                <span id="Police"><img width="30px" height="30px" src="assets/images/index/irembo.jpg"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-success" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              pay traffic fine
              <span class="float-right">
                <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
  
        <!-- Visitors -->
        <a href="https://www.spironet.com/" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
            SPIRO
              <span class="float-right">
                <span id="Police"><img width="30px" height="30px" src="assets/images/index/spirometer_96px.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-warning" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              details and updates
              <span class="float-right">
                 <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
  
        <!-- Customer Feedback -->
        <div class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
             admin
              <span class="float-right">
                <span id="Police"><img width="30px" height="30px" src="assets/images/index/admin.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-danger" style="width: 70%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              system center
              <span class="float-right">
                only for Admin <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  

 
  <div class="card mt-3">
    <div class="card-content">
      <div class="row row-group m-0">
        <!-- Total Orders -->
        <a href="calendar.php" class="col-12 col-lg-6 col-xl-3 border-light card-button">
          <div class="card-body">
            <h5 class="text-white mb-0">
              calendar 
              <span class="float-right">
                <span id="Police"><img width="30px" height="30px" src="assets/images/index/time.png"></span>
              </span>
            </h5>
            <div class="progress my-3" style="height: 3px;">
              <div class="progress-bar bg-primary" style="width: 55%;"></div>
            </div>
            <p class="mb-0 text-white small-font">
              month report
              <span class="float-right">
                .. <i class="zmdi zmdi-long-arrow-up"></i>
              </span>
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
	
	














	

      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright Â© 2024 swift wheels
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
        <li id="theme16"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>