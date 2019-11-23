<!DOCTYPE html>
<html>
<head>
	<title>Welcome to JobBillboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" type="image/png" href="images/title-img.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript"></script>

  	<link rel="stylesheet" type="text/css" href="css/post-style.css">

    <script>
             
            $('#BSbtninfo').filestyle({ 
            buttonName : 'btn-info',
            buttonText : ' Select a File'
            });
             
            </script>

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
					<li class="nav-item active" style="margin-right: 15px"><a class="nav-link" href="post.html">POST</a></li>
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
    
    <div class="container" style="margin: 60px auto">
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

    <!-- Footer -->
        
<footer style="background-color: #f9dc24">
		<div class="container-fluid text-center text-md-left">
			<div class="row bg-dark" style="height: 250px">
				<div class="col-md-4">
					<div class="container">
						<h5 class="my-4 text-white">JobBillboard</h5>
						<h5 class="text-warning" id="about">About Us</h5>
						<p class="text-white">JobBillboard adalah sebuah website dan aplikasi Job Listing yang memudahkan user dalam mencari lowongan pekerjaan atau projek sekitar Telkom Unversity</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="container py-5 my-4">
						<h5 class="text-warning" id="contact">Contact Us</h5>
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