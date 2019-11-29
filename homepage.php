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

	$result = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Project1%' ");
	$result2 = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Project2%' ");
	$a = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Asisten1%' ");
	$b = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Asisten2%' ");
	$c = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Tutor%' ");
	$result4 = mysqli_query($conn, "SELECT*FROM post WHERE kategori LIKE '%Trending%' ");
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
	<nav class="navbar navbar-expand-sm bg-light sticky-top" style="">
		<div class="col-xs-6 col-md-6 col-sm-6">
			<a class="navbar-brand" href="homepage.php">
                <img src ="images/JB.png" class="navbar-brand" href="homepage.php" width ="200px" height="80px">
            </a>
		</div>
		<div class="col-xs-6 col-md-6 col-sm-6">
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

    <?php
    while ($select = mysqli_fetch_assoc($result)){ ?>
	<div class="container-fluid" style="margin-bottom: 60px">
	<h2 style="margin-top: 60px">Trending</h2>
		<div id="myShow" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#myShow" data-slide-to="0" class="active"></li>
                <li data-target="#myShow" data-slide-to="1"></li>
			</ul>

			<div class="carousel-inner">
                <?php
                 foreach($result4 as $data){
                ?>
				<div class="carousel-item active">
					<img src="images/<?= $data["poster"] ?>" class="img-fluid">
					<div class="carousel-caption">
	   					<h3><?= $data["title"] ?></h3>
	    				<p><?= $data["description"] ?></p>
	  				</div>
                </div>
                <?php }?>
			</div>

			<a class="carousel-control-prev" href="#myShow" data-slide="prev">
	    		<span class="carousel-control-prev-icon"></span>
	  		</a>
	  		<a class="carousel-control-next" href="#myShow" data-slide="next">
	    		<span class="carousel-control-next-icon"></span>
	  		</a>
		</div>
	</div>


    

    <!-- Kategori 1 -->

	<hr id="project">

	<div class="container-fluid" style="; padding: 30px 0px">
	<div class="container" style="padding: 0px 10px; margin-bottom: 20px">
		<div class="row">
			<div class="col-xs-11 col-sm-11 col-md-11" style="margin-left:20px;"><h4>Project</h4></div>
		</div>
    </div>
    
	<div id="demo" class="carousel slide" data-ride="carousel">
	<div class="container carousel-inner" style="padding: 0px">

    <div class="carousel-item active" style="margin: 0px 4px">
    <?php
    foreach($result as $data){
    ?>
        <div class="col-xs-3 col-sm-3 col-md-3">
	    <a href="post_detail.php">
	    <img src="images/<?= $data["poster"] ?>" class="rounded img-fluid"> 
	    <div class="carousel-caption">
	    <h6><?= $data["title"] ?></h6>
	    </div>
	    </a>
	</div>
    <?php }?>
</div>

    <div class="carousel-item" style="margin: 0px 4px">
    <?php
    foreach($result2 as $data){
    ?>
		<div class="col-xs-3 col-sm-3 col-md-3">
		<a href="post_detail.php">
		<img src="images/<?= $data["poster"] ?>" class="rounded img-fluid"> 
		<div class="carousel-caption">
		<h6><?= $data["title"] ?></h6>
		</div>
		</a>
		</div>
        <?php }?>
					
	</div>
</div>
		
    
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
	<span class="carousel-control-prev-icon"></span>
	</a>
              
    <a class="carousel-control-next" href="#demo" data-slide="next">
	<span class="carousel-control-next-icon"></span>
    </a>
                  
    </div> 
    </div>


    <!-- Kategori 2 -->

	<hr id="asisten">

	<div class="container-fluid" style="; padding: 30px 0px">
	<div class="container" style="padding: 0px 10px; margin-bottom: 20px">
		<div class="row">
			<div class="col-xs-11 col-sm-11 col-md-11" style="margin-left:20px;"><h4>Asisten Praktikum</h4></div>
			</div>
    </div>
    
	<div id="demo2" class="carousel slide" data-ride="carousel">
	<div class="container carousel-inner" style="padding: 0px">

    <div class="carousel-item active" style="margin: 0px 4px">
    <?php
    foreach($a as $data){
    ?>
        <div class="col-xs-3 col-sm-3 col-md-3">
	    <a href="post_detail.php">
	    <img src="images/<?= $data["poster"] ?>" class="rounded img-fluid"> 
	    <div class="carousel-caption">
	    <h6><?= $data["title"] ?></h6>
	    </div>
	    </a>
	</div>
    <?php }?>
</div>

    <div class="carousel-item" style="margin: 0px 4px">
    <?php
    foreach($b as $data){
    ?>
		<div class="col-xs-3 col-sm-3 col-md-3">
		<a href="post_detail.php">
		<img src="images/<?= $data["poster"] ?>" class="rounded img-fluid"> 
		<div class="carousel-caption">
		<h6><?= $data["title"] ?></h6>
		</div>
		</a>
		</div>
        <?php }?>
					
	</div>
</div>
		
    
	<a class="carousel-control-prev" href="#demo2" data-slide="prev">
	<span class="carousel-control-prev-icon"></span>
	</a>
              
    <a class="carousel-control-next" href="#demo2" data-slide="next">
	<span class="carousel-control-next-icon"></span>
    </a>
                  
    </div> 
    </div>


    <!-- Kategori 3 -->

	<hr id="tutor">

	<div class="container-fluid" style="; padding: 30px 0px">
	<div class="container" style="padding: 0px 10px; margin-bottom: 20px">
		<div class="row" id="">
			<div class="col-xs-11 col-sm-11 col-md-11" style="margin-left:20px;"><h4>Tutor Mata Kuliah</h4></div>
        </div>
	</div>
    
    <div id="demo3" class="carousel slide" data-ride="carousel">
	<div class="container carousel-inner	" style="padding: 0px">
    <div class="carousel-item active" style="margin: 0px 4px">
    <?php
    foreach($c as $data){
    ?>
        <div class="col-xs-3 col-sm-3 col-md-3">
	    <a href="post_detail.php">
	    <img src="images/<?= $data["poster"] ?>" class="rounded img-fluid"> 
	    <div class="carousel-caption">
	    <h6><?= $data["title"] ?></h6>
	    </div>
	    </a>
	</div>
    <?php }?>
</div>
    
    <?php } ?>
    </div>
    </div>
    <!-- Footer -->

	<hr style=" margin-top: 100px">
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
						<a href="#"><i class="fab fa-facebook fa-2x text-dark mr-md-5"></i></a>
						<a href="#"><i class="fab fa-google-plus fa-2x text-dark mr-md-5"></i></a>
						<a href="#"><i class="fab fa-twitter fa-2x text-dark mr-md-5"></i></a>
						<a href="#"><i class="fab fa-youtube fa-2x text-dark mr-md-5"></i></a>
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