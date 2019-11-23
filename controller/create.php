<?php
$host="localhost";
$user="root";
$password="";
$database="jobbillboard";

$conn=mysqli_connect($host,$user,$password,$database) or die("Failed connect to database");

if (isset($_POST['submit'])) {
	$title = $_POST['title'];
    $dedlen = $_POST['deadline'];
    $desc = $_POST['description'];
    $category = $_POST['category'];

	$query = "INSERT into post (title, deadline, description, category) values ('$title', '$dedlen', '$desc', '$category') ";
        $insert = mysqli_query($conn, $query);
        if($insert){
            echo "<script>alert('Posting Success !');window.location.href='Homepage.php'</script>";
         }else {
            echo "<script>alert('Posting Failed !');window.location.href='Homepage.php'</script>";
        }
}

?>