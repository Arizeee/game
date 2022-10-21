<?php
      $host = "localhost";
      // host adalah nama host kita yaitu localhost 
  
      $user = "root";
      // user adalah nama user kita (root adalah nama default)
  
      $password = "";
      //password aalah untuk mempassword jika tidak ada berarti tidak memiliki password
  
      $database = "gameboss";
      //database yang di localhost
  
      $connect = mysqli_connect($host,$user,$password,$database) or die ("gagal menghubungkan");
      // connect ke database dengan variabel (mengecek apakah database sudah terkoneksi)
?>