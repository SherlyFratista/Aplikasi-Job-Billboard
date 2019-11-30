<?php
  include ('config/connect.php');
  session_start();
  if (!isset($_SESSION['user'])) {
		# code...
		echo '
                <script type="text/javascript">
                    alert("Info!, You must login first!");
                    window.location.assign("index.php");
                </script>';
	}
  $user = $_SESSION['user'];
  $status = $_SESSION['status'];


?>

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
  <nav class="navbar navbar-expand-sm bg-light sticky-top" style="">
		<div class="col-xs-8 col-md-8 col-sm-8">
			<a class="navbar-brand" href="homepage.php">
                <img src ="images/JB.png" class="navbar-brand" href="homepage.php" width ="200px" height="80px">
            </a>
		</div>
		<div class="col-xs-3 col-md-3 col-sm-3">
			<ul class="navbar-nav">
				<li class="nav-item" style="margin-right: 15px; color : #007BFF"><a class="nav-link" href="post_page.php">Write a post</a></li>
				<li class="nav-item dropdown">
				<a class="btn btn-primary dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown"><?= $user?></a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="controller/redirect_profile.php">Profile</a>
						<a class="dropdown-item" href="controller/logout.php">Logout</a>
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
              <h1 class="h4"><?= $user?></h1>
              <p>User Dashboard</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="user_dashboard.php"> <i class="icon-home"></i>My Profile</a></li>
            <li class="active"><a href="edit_profile.php"> <i class="icon-grid"></i>Edit Profile</a></li>
            <li><a href="user_post.php"> <i class="icon-padnote"></i>My Post</a></li>
        </nav>

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Edit Profile</h2>
            </div>
          </header>
          
          <section>
          	<div class="container-fluid">
          		<div class="container" style="padding: 20px 20px; border-radius: 20px; box-shadow: 0px 0px 10px -6px">
          			<form method="POST" action="" enctype="" style="margin: 40px 20px">
						<div class="form-group row">
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="Username">Username</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10" class="col-xs-10 col-md-10 col-sm-10">
								<input type="text" class="form-control" placeholder="Username"></input>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="First Name">First Name</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10">
								<input type="text" class="form-control" placeholder="First Name"></input>
							</div>
								
						</div>
						<div class="form-group row">
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="Last Name">Last Name</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10">
								<input type="text" class="form-control" placeholder="Last Name"></input>
							</div>
								
						</div>
						<div class="form-group row">
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="Email">Email</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10">
								<input type="email" class="form-control" placeholder="Email"></input>
							</div>
								
						</div>
						<div class="form-group row">
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="About">About</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10">
								<textarea class="form-control"></textarea>
							</div>
								
						</div>
						<div class="form-group row">
							<div class="col-xs-2 col-md-2 col-sm-2 col-form-label">
								<label class="control-label" for="Avatar">Avatar</label>
							</div>
							<div class="col-xs-10 col-md-10 col-sm-10">
								<input type="file" class="form-control" placeholder="Avatar"></input>
							</div>
								
						</div>
						<div class="row">
							<div class="col">
								<button type="submit" class="btn btn-success">Save Change</button>
							</div>	
							<div class="col">
								<a href="user_profile.php" class="btn btn-secondary" style="float: right;">Cancel</a>
							</div>
						</div>
					</form>
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