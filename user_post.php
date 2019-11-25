<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to JobBillboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">

  </head>

<body>
  <nav class="navbar navbar-expand-sm" style="padding: 8px">
    <div class="col-xs-9 col-md-9 col-sm-9" >
      <a class="navbar-brand" href="homepage.php">< Back to Homepage</a>
    </div>
    <div class="col-xs-3 col-md-3 col-sm-3">
      <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

      	<li class="nav-item text-white">
      		<a href="post_page.php">Write a Post</a>
      	</li>
        <!-- Notifications -->
        <li class="nav-item dropdown">
          <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              <li><a rel="nofollow" href="#" class="dropdown-item"> 
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item"> 
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item"> 
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                    <div class="notification-time"><small>4 minutes ago</small></div>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item"> 
                  <div class="notification">
                    <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                    <div class="notification-time"><small>10 minutes ago</small></div>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
            </ul>
        </li>

        <!-- Messages -->
        <li class="nav-item dropdown">
          <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                  <div class="msg-profile"> <img src="images/profil.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Budi</h3><span>Sent You Message</span>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                  <div class="msg-profile"> <img src="images/profil3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Abdul</h3><span>Sent You Message</span>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                  <div class="msg-profile"> <img src="images/profil2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h5">Lathifah</h3><span>Sent You Message</span>
                  </div></a></li>
              <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
            </ul>
        </li>

        <li class="nav-item"></li>
        <li class="nav-item dropdown">
        <a class="btn btn-primary dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">Hello</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="user_profile.php">Profile</a>
            <a class="dropdown-item" href="index.php">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>



      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="images/project8.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">SYF</h1>
              <p>User Dashboard</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="user_dashboard.php"> <i class="icon-home"></i>My Profile</a></li>
            <li><a href="edit_profile.php"> <i class="icon-grid"></i>Edit Profile</a></li>
            <li class="active"><a href="user_post.php"> <i class="icon-padnote"></i>My Post</a></li>
        </nav>

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">My Post</h2>
            </div>
          </header>
          
          <section>
          	<div class="container-fluid">
          		<div class="container" style="padding: 20px 20px; border-radius: 20px; box-shadow: 0px 0px 10px -6px">
          			
          		</div>
          	</div>
          </section>
    	</div>
    </div>
  
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>