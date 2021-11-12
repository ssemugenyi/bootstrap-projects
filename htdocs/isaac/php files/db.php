<?php 
$servername='localhost';
$dbuser='root';
$password='';
$dbname = "users";
$conn=mysqli_connect($servername,$dbuser,$password,$dbname);
  if(!$conn){
      echo "Database connection failed";
    }
?>