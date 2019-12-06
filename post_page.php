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

?>

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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/post-style.css">
    <script type="text/javascript">
        $('#BSbtninfo').filestyle({ 
        buttonName : 'btn-info',
        buttonText : ' Select a File'
        });

        $('form').on('submit',function(){
           alert('submitted');
        });
    </script>

</head>
<body class="text-dark" style="background-color: #f4f4f4">
    <nav class="navbar navbar-expand-sm bg-light sticky-top" style="padding: 8px">
        <div class="col-7">
            <a class="navbar-brand" href="homepage.php" style="padding: 0">
                <img src ="images/logojb (2).png" href="index.php" width ="160px" height="45px" style="padding: 0">
            </a>
        </div>
        <div class="col-5">
            <ul class="navbar-nav">
                <li class="nav-item" style="margin-right: 15px"><a class="nav-link" href="homepage.php">Home</a></li>
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
                    <form action = "controller/create.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <br>
                            <label class="control-label col-sm-2" >Title</label>
                            <div class="col-sm-10">          
                            <input type="text" class="form-control" id="judul" placeholder="Enter Title Here" name="title" required>
                            </div>
                        </div>
                                           
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="lname">Deadline</label>
                            <div class="col-sm-10">          
                            <input type="date" class="form-control" name="deadline" required>
                            </div>
                        </div>
                                            
                        <div class="form-group">
                            <label class="control-label col-sm-2">Description</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" id="desc" rows="5" placeholder="Enter Description here" name="description" required></textarea>
                            </div>
                        </div>
                                            
                        <div class="form-group">
                            <label class="control-label col-sm-2">Category</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" placeholder="Enter Category Here" name="category" required>
                            </div>
                        </div>
                                            
                        <div class="form-group">
                            <label class="control-label col-sm-2">Poster</label>
                            <div class="col-sm-10">
                            <input type="file" id="BSbtninfo" class="form-control" name="file" required></input>
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