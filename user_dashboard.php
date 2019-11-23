<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="">
		<div class="col-xs-8 col-md-8 col-sm-8" >
			<a class="navbar-brand" href="homepage.php">
                <img class="rounded" src="images/logo.jpg" alt="Logo" style="width:50px;">
            </a>
		</div>
		<div class="col-xs-4 col-md-4 col-sm-4">
			<ul class="navbar-nav">
				<li class="nav-item" style="margin-right: 5px"><a class="nav-link" href="homepage.html">HOME</a></li>
				<li class="nav-item" style="margin-right: 5px"><a class="nav-link" href="#">NOTIFICATION</a></li>
				<li class="nav-item" style="margin-right: 15px"><a class="nav-link" href="post.html">POST</a></li>
				<li class="nav-item active dropdown" style="margin-right: 15px">
				<a class="btn btn-success dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">HELLO</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="user_profile.php">Profile</a>
						<a class="dropdown-item" href="#">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container" style="background-color: white; width: 70%; margin: 60px auto 220px auto; border-radius: 10px; border: 1px solid white">
		<div class="row" style="margin: 20px 0px">
			<div class="col-xs-3 col-md-3 col-sm-3">
				<div width="200" height="200">
					<img src="https://dummyimage.com/200x200/333333/fff.png" class="img-thumbnail" alt="Profile">
				</div>
			</div>
			<div class="col-xs-6 col-md-6 col-sm-6">
				<h2>Username</h2><br>
				<h6>Nama</h6>
				<h6>Jumlah Post</h6><hr>
				<h6>About</h6>
			</div>
			<div class="col-xs-3 col-md-3 col-sm-3">
				<div><a class="btn btn-primary" href="edit_profile.php">Edit Profile</a></div><br>
				<div><a class="btn btn-primary" href="">My Post</a></div>
			</div>
		</div>
	</div>

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