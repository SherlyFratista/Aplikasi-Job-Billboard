<?php
     session_start();
     require_once("Connection.php");
     require_once("index.php");
     $username = $_POST['username'];
     $password = $_POST['password'];
     $fname = $_POST['fname'];
     $sql = "SELECT * FROM user WHERE username = '$username'";
     $query = $db->query($sql);
     if($query->num_rows != 0) {
     echo "<div align='center'>Username $username Sudah Terdaftar! </div>
     ";
     ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=Login.php"> <?php
   } else {
     if(!$username || !$pasword) {
       echo "<div align='center'>Masih ada data yang kosong! ";
       ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=Register.php"> <?php
     } else {
       $data =  "INSERT INTO user(id,username,password,fname,lname,email,status) VALUES (NULL, '$username', '$password', '$fname','$lname', '$status','$email')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=Login.php"> <?php
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=Registrasi.php"> <?php
       }
     }
   }

   
?>