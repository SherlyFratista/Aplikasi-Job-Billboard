<!DOCTYPE html>
<html>
  <head>

    <title>Welcome to JobBillboard</title>
    
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

        <link rel="stylesheet" href="css/post-style.css">
    <!-- tambahan -->
  </head>


  <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="">

          <div class="col-xs-4 col-md-4 col-sm-4" style="margin-left: 1080px;">
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
             <!-- Notifications-->
             <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
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
              <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
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
             
              <li class="nav-item" style="margin-right: 15px">&ensp;</li>
              <li class="nav-item dropdown" style="margin-right: 15px">
              <a class="btn btn-success dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">SYF</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Logout</a>
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
            <li><a href="admin.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="user.php"> <i class="icon-grid"></i>Account Manager</a></li>
            <li><a href="todo.php"> <i class="icon-padnote"></i>To do List </a></li>
            <li class="active"><a href="posting.php"> <i class="icon-check"></i>Create a Post</a></li>
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
          <br> <br>
          <div class="container" style="margin-left: 50px; width:1000px;">
              <div class="row">
                  <div class="col-md-3">
                      <div class="contact-info">
                          <img src="images/ann.png" alt="image"/>
                          <h3>Let's Post your new Job Vacancies Here!</h3>
                      </div>
                  </div>
      <div class="col-md-9">
      <div class="contact-form">
  
      <div class="form-group">
      <form action = create.php method="POST">
          <br>
          <label class="control-label col-sm-2" >Title</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="judul" placeholder="Enter Title Here" name="title">
          </div>
      </div>
                         
      <div class="form-group">
          <label class="control-label col-sm-2" for="lname">Deadline</label>
          <div class="col-sm-10">          
          <input type="date" class="form-control" name="deadline">
          </div>
      </div>
                          
      <div class="form-group">
          <label class="control-label col-sm-2">Description</label>
          <div class="col-sm-10">
          <textarea class="form-control" id="desc" rows="7" placeholder="Enter Description here" name="description"></textarea>
          </div>
      </div>
                          
      <div class="form-group">
          <label class="control-label col-sm-2">Category</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="judul" placeholder="Enter Category Here" name="category">
          </div>
      </div>
                          
      <div class="form-group">
          <label class="control-label col-sm-2">Poster</label>
          <div class="col-sm-10">
          <input type="file" id="BSbtninfo">
          </div>
      </div>
                          
      <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="submit">Submit</button>
      </div>
      </div>
      
          </form>
      </div>
      </div>
      </div>
      </div>
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