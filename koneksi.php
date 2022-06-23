<?php
   $koneksi = mysqli_connect("localhost","root","","monitoring_awlr");

   if (mysqli_connect_error()) {
       echo "koneksi database Gagal". mysqli_connect_error();
   }
?>