<?php
require_once("Connection.php");
require_once("index.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$query = $db->query($sql);
$hasil = $query->fetch_assoc();
if ($query->num_rows == 0) {
    echo "<div align='center'>Username Belum Terdaftar! <a href='Login.php'>Back</a></div>";
} else {
    if ($pass <> $hasil['password']) {
        echo "<div align='center'>Password salah! <a href='Login.php'>Back</a></div>";
    } else {
        $_SESSION['id'] = $hasil['id'];
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['fname'] = $hasil['fname'];
        $_SESSION['lname'] = $hasil['lname'];
        $_SESSION['password'] = $hasil['password'];
        $_SESSION['email'] = $hasil['email'];
        $_SESSION['status'] = $hasil['status'];
        if ($hasil['status'] == 'admin') {
            header('location:admin_dashboard.php');
        } else if ($hasil['status'] == 'student') {
            header('location:user_dashboard.php');
        }
    }
}

?>