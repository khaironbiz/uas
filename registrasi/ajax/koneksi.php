<?php 
 $host = mysqli_connect("localhost", "root", "", "ak");

 if($host){
  
 } else{
  echo "Koneksi gagal!" . mysqli_connect_error();
  die();
 }
 ?>