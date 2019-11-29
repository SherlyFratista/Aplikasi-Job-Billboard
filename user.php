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

  $a = mysqli_query($conn, "SELECT*FROM user WHERE status LIKE '%admin%' ");
  $b = mysqli_query($conn, "SELECT*FROM user WHERE status LIKE '%student%' ");
  $c = mysqli_query($conn, "SELECT*FROM user WHERE status LIKE '%lecturer%' ");
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
      <nav class="navbar navbar-expand-sm" style="padding: 8px">
    <div class="col-xs-9 col-md-9 col-sm-9" >
      <a class="navbar-brand" href="homepage.php">< Back to Homepage</a>
    </div>
    <div class="col-xs-3 col-md-3 col-sm-3">
      <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

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
              <p>Admin JobBillboard</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="admin_dashboard.php"> <i class="icon-home"></i>Home </a></li>
            <li class="active"><a href="user.php"> <i class="icon-grid"></i>Account Manager</a></li>
            <li><a href="todo.php"> <i class="icon-padnote"></i>To do List </a></li>
            <li><a href="posting.php"> <i class="icon-check"></i>Create a Post</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Post Monitoring </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">All Post</a></li>
                <li><a href="#">Deleted Post</a></li>
                <li><a href="#">Post Request</a></li>
                <li><a href="#">Draft</a></li>
              </ul>
            </li>
            
        </nav>

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Account Manager</h2>
            </div>
          </header>
          <br> <br>
        <?php
        while ($select = mysqli_fetch_assoc($a)){ ?>
         <!-- Breadcrumb-->
         <div class="breadcrumb-holder container-fluid">
           <br>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Account Manager</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="card" style="width:900px">
                      <div class="card-close">
                          <div class="dropdown">
                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                          </div>
                      </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Admin Account</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive" >
                        <table class="table">
                            <tr>
                              <th>ID</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                              <th>Email</th>
                            </tr>
                            <?php
                            foreach($a as $data){
                            ?>
                            <tr>
                              <th scope="row"><?= $data["id"] ?></th>
                              <td><?= $data["fname"] ?></td>
                              <td><?= $data["lname"] ?></td>
                              <td><?= $data["username"] ?></td>
                              <td><?= $data["email"] ?></td>
                            </tr>
                            <?php }?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
  

                <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="card" style="width:900px">
                            <div class="card-close">
                                <div class="dropdown">
                                  <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                  <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                </div>
                            </div>
                          <div class="card-header d-flex align-items-center">
                            <h3 class="h4">Student Account</h3>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                            <table class="table">
                            <tr>
                              <th>ID</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                              <th>Email</th>
                            </tr>
                            <?php
                            foreach($b as $data){
                            ?>
                            <tr>
                              <th scope="row"><?= $data["id"] ?></th>
                              <td><?= $data["fname"] ?></td>
                              <td><?= $data["lname"] ?></td>
                              <td><?= $data["username"] ?></td>
                              <td><?= $data["email"] ?></td>
                            </tr>
                            <?php }?>
                        </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      </div>
                     
         
                      
                      <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="card" style="width:900px">
                                  <div class="card-close">
                                      <div class="dropdown">
                                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                      </div>
                                  </div>
                                <div class="card-header d-flex align-items-center">
                                  <h3 class="h4">Lecturer Account</h3>
                                </div>
                                <div class="card-body">
                                  <div class="table-responsive">
                                  <table class="table">
                            <tr>
                              <th>ID</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                              <th>Email</th>
                            </tr>
                            <?php
                            foreach($c as $data){
                            ?>
                            <tr>
                              <th scope="row"><?= $data["id"] ?></th>
                              <td><?= $data["fname"] ?></td>
                              <td><?= $data["lname"] ?></td>
                              <td><?= $data["username"] ?></td>
                              <td><?= $data["email"] ?></td>
                            </tr>
                            <?php }?>
                        </table>
                                  </div>
                                </div>
                              </div>
                            </div>

              </div>
            </div>
          </section>
          </div>
          </div>
          <?php }?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor2/jquery/jquery.min.js"></script>
  <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
