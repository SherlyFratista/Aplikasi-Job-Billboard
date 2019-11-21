<?php
$conn = mysqli_connect("localhost", "root", "", "jobbillboard");
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
<body style="background-color: #FFFACD">
	<div id="home" style="height: 150px; background-image: url('images/logo.jpg'); background-size: contain; filter: brightness(50%); padding: 50px 0px">
		<div class="container-fluid">	
			<marquee>
				<h1 class="text-white">JobBillboard | Built Your Job With Us</h1>
			</marquee>
		</div>
	</div>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="">
			<div class="col-xs-9 col-md-9 col-sm-9">
				
			</div>
			<div class="col-xs-3 col-md-3 col-sm-3">
				<ul class="navbar-nav">
					<li class="nav-item active" style="margin-right: 5px"><a class="nav-link" href="#home">HOME</a></li>
					<li class="nav-item dropdown" style="margin-right: 15px">
					<a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">CATEGORIES</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#project">Project</a>
							<a class="dropdown-item" href="#asisten">Asisten</a>
							<a class="dropdown-item" href="#tutor">Tutor</a>
						</div>
					</li>
					<li class="nav-item" style="margin-right: 15px"><a class="btn btn-success" href="loginJOB.php">LOGIN</a></li>
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
				<div class="carousel-item active">
					<img src="images/showcase1.jpg" class="img-fluid">
					<div class="carousel-caption">
	   					<h3>Internship Divisi Digital Service</h3>
	    				<p>Program Internship PT. Telekomunikasi Indonesia Tbk Divisi Digital Service (TELKOM DDS) 
							memberikan kesempatan bagi mahasiswa/i untuk melakukan penelitian atau mendukung program kerja di 
							lingkungan bisnis Telkom DDS...</p>
	  				</div>
				</div>

                <?php
                 foreach($result4 as $data){
                ?>
				<div class="carousel-item">
					<img src="<?= $data["poster"] ?>" class="img-fluid">
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
	<div class="container carousel-inner no-padding">

    <div class="carousel-item active" style="margin: 0px 4px">
    <?php
    foreach($result as $data){
    ?>
        <div class="col-xs-3 col-sm-3 col-md-3">
	    <a href="loginJOB.php">
	    <img src="<?= $data["poster"] ?>" class="rounded img-fluid"> 
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
		<a href="loginJOB.php">
		<img src="<?= $data["poster"] ?>" class="rounded img-fluid"> 
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
	<div class="container carousel-inner no-padding">

    <div class="carousel-item active" style="margin: 0px 4px">
    <?php
    foreach($a as $data){
    ?>
        <div class="col-xs-3 col-sm-3 col-md-3">
	    <a href="loginJOB.php">
	    <img src="<?= $data["poster"] ?>" class="rounded img-fluid"> 
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
		<a href="loginJOB.php">
		<img src="<?= $data["poster"] ?>" class="rounded img-fluid"> 
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
	<div class="container carousel-inner no-padding	">
    <div class="carousel-item active" style="margin: 0px 4px">
    <?php
    foreach($c as $data){
    ?>
        <div class="col-xs-3 col-sm-3 col-md-3">
	    <a href="loginJOB.php">
	    <img src="<?= $data["poster"] ?>" class="rounded img-fluid"> 
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
	<hr>
    <br>
    <br>    
    <!-- Footer -->

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
						<a href="#"><i class="fab fa-facebook fa-2x text-white mr-md-5"></i></a>
						<a href="#"><i class="fab fa-google-plus fa-2x text-white mr-md-5"></i></a>
						<a href="#"><i class="fab fa-twitter fa-2x text-white mr-md-5"></i></a>
						<a href="#"><i class="fab fa-youtube fa-2x text-white mr-md-5"></i></a>
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
	</footer>
</body>
</html>