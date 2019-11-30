<?php
	include ('config/connect.php');
	session_start();
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
		<div class="col-xs-7 col-md-7 col-sm-7">
			<a class="navbar-brand" href="homepage.php">
                <img src ="images/JB.png" class="navbar-brand" href="homepage.php" width ="200px" height="80px">
            </a>
		</div>
		<div class="col-xs-5 col-md-5 col-sm-5">
			<ul class="navbar-nav">
				<li class="nav-item" style="margin-right: 15px"><a class="nav-link" href="post_page.php">Write a post</a></li>
				<li class="nav-item" style="margin-right: 15px">
					<form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
      					<input class="form-control mr-sm-2" type="text" name="name" required="" placeholder="Search" aria-label="Search">
      					<input type="submit" name="submit" value="Search">
      				</form>

				
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

<br>


<br>
<h4 class="latest-text w3_latest_text">Search Result</h4>
</div>

<div class = "container">
<?php
//search code
//error_reporting(0);
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM post WHERE title LIKE '%$name%'";
	$result = mysqli_query($conn, $sele);
	
	if($mak = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
      ?>
    
    <div class="col-md-2 w3l-movie-gride-agile">
    <a href="StreamingPage.php?id=<?=$row['id']?>"><img src="images/<?= $row['poster'] ?>" width="350px;" height="300px;" margin-left="380px;"/>
    </a>
	
            
    <div class="mid-1">
    <div class="w3l-movie-text">
    <h6><a href="StreamingPage.php"><?= $row['title'] ?></a></h6>							
    </div>
                                            
    <div class="w3l-movie-text">
    <p><?= $row['description'] ?></p>
    </div>   
    
    </div>
    </div>


    <?php
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>
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