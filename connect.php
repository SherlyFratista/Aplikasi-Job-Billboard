<?php
$conn = mysqli_connect("localhost", "root", "", "jobbillboard");

if(!$conn){
    echo "<script>alert('Failed Connect into Database');</script>";
}

?>