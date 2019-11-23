<!-- <?php
$conn = mysqli_connect("localhost", "root", "", "jobbillboard");
$result = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Project%' ");
?> -->

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
    <div class="col-xs-10 col-md-10 col-sm-10" >
      <a class="navbar-brand" href="homepage.php">
                <img src="" alt="Logo">
            </a>
    </div>
    <div class="col-xs-2 col-md-2 col-sm-2">
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
              <p>Admin JobBillboard</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"><a href="admin.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="user.php"> <i class="icon-grid"></i>Account Manager</a></li>
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
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>New<br>User</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>5</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>New<br>Visitors </span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>20</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>New<br>Jobs</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>7</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Total<br>Post</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>30</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                    <div class="text"><strong>25</strong><br><small>Jobs</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                    <div class="text"><strong>100</strong><br><small>Applicant</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                    <div class="text"><strong>80</strong><br><small>Post Request</small></div>
                  </div>
                </div>
                <!-- Line Chart            -->
                <div class="chart col-lg-6 col-12">
                  <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <canvas id="lineCahrt"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- <?php
    while ($select = mysqli_fetch_assoc($result)){ ?> -->

          <!-- Projects Section-->
          <section class="projects no-padding-top">
            <div class="container-fluid">
              <!-- Project-->
              <?php
                 foreach($result as $data){
                ?>
              <div class="project">
          
                
                <div class="row bg-white has-shadow">
                  <div class="left-col col-lg-12 d-flex align-items-center justify-content-between">
                    <div class="project-title d-flex align-items-center">
                      <div class="image has-shadow"><img src="<?= $data["poster"] ?>" alt="..." class="img-fluid"></div>
                      <div class="text" style="width:500px">
                        <h6><?= $data["title"] ?></h6>
                      </div>
                      <div class="text" style="width:5px">
                        <h6 class="p"> &ensp;</h6>
                      </div>
                    </div>
                    
                  <div class="right-col col-lg-12 d-flex align-items-center">
                    <div class="time"><i class="fa fa-clock-o"></i><?= $data["deadline"] ?> </div>
                    <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                      
                    </div>
                  </div>
                  
                </div>
                
              </div>
              <?php }?>
            </div>
          </section>


    </div>
    </div>
    <?php } ?>
  <!-- Footer --><!-- 

	<footer style="background-color: #f9dc24">
      <div class="container-fluid text-center text-md-left">
        <div class="row bg-dark" style="height: 250px">
          <div class="col-md-4">
            <div class="container">
              <h5 class="my-4 text-white">JobBillboard</h5>
              <h5 class="text-warning">About Us</h5>
              <p class="text-white">JobBillboard adalah sebuah website dan aplikasi Job Listing yang memudahkan user dalam mencari lowongan pekerjaan atau projek sekitar Telkom Unversity</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container py-5 my-4">
              <h5 class="text-warning">Contact Us</h5>
              <p class="text-white"><i class="fa fa-phone mr-md-3"></i>+62 22-1234567</p>
              <p class="text-white"><i class="fa fa-envelope mr-md-3"></i>kelompok15@JobBillboard.com</a></p>
              <a href="#"><i class="fa fa-facebook fa-2x text-white mr-md-5"></i></a>
              <a href="#"><i class="fa fa-google-plus fa-2x text-white mr-md-5"></i></a>
              <a href="#"><i class="fa fa-twitter fa-2x text-white mr-md-5"></i></a>
              <a href="#"><i class="fa fa-youtube fa-2x text-white mr-md-5"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="container py-5 my-4">
              <h5 class="text-warning">Address</h5>
              <p class="text-white"> <i class="fa fa-map-marker mr-md-3"></i>Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura Bandung, Jawa Barat - 40257</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright text-center py-3">&copy;JobBillboard. All Rights Reserved</div>
    </footer> -->

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