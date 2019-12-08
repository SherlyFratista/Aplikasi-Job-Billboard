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

	$sql = mysqli_query($conn, "SELECT * FROM post WHERE id = '1'");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to JobBillboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="title icon" type="image/png" href="images/title-img.png"/>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="text-dark" style="background-color: #f4f4f4">
	<nav class="navbar navbar-expand-sm bg-light sticky-top" style="padding: 8px; margin-bottom: 20px;">
		<div class="col-7">
			<a class="navbar-brand" href="homepage.php" style="padding: 0">
                <img src ="images/logojb (2).png" href="index.php" width ="160px" height="45px" style="padding: 0">
            </a>
		</div>
		<div class="col-5">
			<ul class="navbar-nav">
				<li class="nav-item" style="margin-right: 15px"><a class="nav-link" href="post_page.php">Write a post</a></li>
				<li class="nav-item" style="margin-right: 15px">
					<form class="form-inline my-2 my-lg-0">
      					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      					<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      				</form>
      			</li>
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



    <?php while ($value = mysqli_fetch_row($sql)) {?>
    <div class="container-fluid">
       <!-- Breadcrumb-->
       <header class="page-header">
            <div class="breadcrumb-holder">
			   <ul class="breadcrumb">
				   <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
				   <li class="breadcrumb-item active"><?= $value[1]?></li>
			   </ul>
	   		</div>
       </header>
       

        <section>
        	<div class="container">
        		<div class="card text-center">
				  <div class="card-header">
				    <?= $value[5]?>
				  </div>
				  <div class="card-body">
				    <h5 class="card-title"><?= $value[1]?></h5>
				    <img src="images/<?= $value[4]?>" width="300" height="300">
				    <p class="card-text"><?= $value[3]?></p>
				  </div>
				  <div class="card-footer text-muted">
				    <?= $value[2]?>
				  </div>
				</div>
        	</div>
        </section>
        <?php } ?>

        <hr>

        <section>
        	<div class="container" style="padding: 0">
				<form method="POST" action="PostComment.php">
				    <div class="form-group">
				        <label class="control-label col-sm-2">Comment</label>
				        <div class="col-sm-10">
				        <textarea class="form-control" id="desc" rows="5" placeholder="Enter Comment here" name="comment" type="comment"></textarea>
				        </div>
				    </div>
					<hr>
					<?php include "viewcomment.php"; ?>
				        
				    <div class="form-group">        
				    <div class="col-sm-offset-2 col-sm-10">
				        <button type="submit" class="btn btn-default" name="submit">Submit</button>
				    </div>
				    </div>
				</form>
        	</div>
        </section>
    </div>

    <!-- Footer -->

	<hr style=" margin-top: 20px">
	<footer class="text-dark" style="background-color: #c4dfe6;">
		<div class="container-fluid text-center text-md-left">
			<div class="row bg-light" style="height: 250px">
				<div class="col-sm-4 col-md-4 col-xs-4">
					<div class="container">
						<h5 class="my-4 text-dark">JobBillboard</h5>
						<h5 class="text-primary">About Us</h5>
						<p class="text-dark">JobBillboard is a Job Listing website and application that makes it easy for users to search for jobs or projects around Telkom University</p>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-4">
					<div class="container py-5 my-4">
						<h5 class="text-primary">Contact Us</h5>
						<p class="text-dark"><i class="fa fa-phone mr-md-3"></i>+62 22-1234567</p>
						<p class="text-dark"><i class="fa fa-envelope mr-md-3"></i>kelompok15@JobBillboard.com</a></p>
						<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook fa-2x text-dark mr-md-5"></i></a>
						<a href="https://aboutme.google.com/u/0/?referer=gplus" target="_blank"><i class="fab fa-google-plus fa-2x text-dark mr-md-5"></i></a>
						<a href="https://twitter.com/login" target="_blank"><i class="fab fa-twitter fa-2x text-dark mr-md-5"></i></a>
						<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube fa-2x text-dark mr-md-5"></i></a>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-4">
					<div class="container py-5 my-4">
						<h5 class="text-primary">Address</h5>
						<p class="text-dark"> <i class="fa fa-map-marker mr-md-3"></i>Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura Bandung, Jawa Barat - 40257</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright text-center py-3">&copy;JobBillboard. All Rights Reserved</div>
	</footer>
</body>
</html>