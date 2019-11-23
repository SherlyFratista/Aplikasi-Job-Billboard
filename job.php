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
				<h1 class="text-white">Hello! Welcome to JobBillboard</h1>
			</marquee>
		</div>
	</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="">
		<div class="col-xs-8 col-md-8 col-sm-8" >
			<a class="navbar-brand" href="homepage.php">
                <img class="rounded" src="images/logo.jpg" alt="Logo" style="width:50px;">
            </a>
		</div>
		<div class="col-xs-4 col-md-4 col-sm-4">
			<ul class="navbar-nav">
				<li class="nav-item active" style="margin-right: 5px"><a class="nav-link" href="homepage.html">HOME</a></li>
				<li class="nav-item" style="margin-right: 5px"><a class="nav-link" href="#">NOTIFICATION</a></li>
				<li class="nav-item" style="margin-right: 15px"><a class="nav-link" href="post.php">POST</a></li>
				<li class="nav-item dropdown" style="margin-right: 15px">
				<a class="btn btn-success dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">HELLO</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Profile</a>
						<a class="dropdown-item" href="#">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>



    <div class="content-inner">
        <!-- Page Header-->
       <!-- Breadcrumb-->
       <div class="breadcrumb-holder container-fluid">
         <br>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Categories</li>
            <li class="breadcrumb-item active">Projek Web Dashboard Menggunakan Framework Laravel</li>
          </ul>
        </div>
        <section class="tables">   
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="card" style="width:1200px">
                  
                  <div class="card-header d-flex align-items-center">
                    <h3 class="h4">Projek Web Dashboard Menggunakan Framework Laravel</h3>
                  </div>
                  <div class="card-body">
                     <center>  <img class="rounded" src="images/project2.png" alt="Logo" style="width:500px;"> </center>
                     <br>
                   <p> Perusahaan Enterprise Application Development adalah sebuah perusahan yang bergerak dalam
                        bidang pengembangan aplikasi. Saat ini, perusahaan Enterprise Application Development sedang
                        mengalami penurunan profit perusahaan selama 2 tahun terakhir, penurunan profit perusahaan
                        disebabkan karena kurangnya strategi marketing dalam melakukan promosi, sehingga customer tidak
                        mengenal lebih dalam tentang perusahaan Enterprise Application Development, maka dari itu
                        perusahaan Enterprise Application Development ingin membuat sebuah aplikasi sosial media yang
                        bertujuan untuk memberikan informasi mengenai perusahaan Enterprise Application Development.
                        Terdapat 4 halaman : <br>
                        1. Welcome <br>
                        2. Home <br>
                        3. Login <br>
                        4. Register </p>   
                    
                    <br>
                    

                    </div>
                  </div>
                </div>
             
</div>
</div>
        </section>
<br>

<form action = create.php method="POST">
        <br>
   
                        
    <div class="form-group" style="width:1470px">
        <label class="control-label col-sm-2">Comment</label>
        <div class="col-sm-10">
        <textarea class="form-control" id="desc" rows="7" placeholder="Enter Comment here" name="description"></textarea>
        </div>
    </div>
                        
   
    <div class="form-group">        
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </div>
    </div>
    
        </form>

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