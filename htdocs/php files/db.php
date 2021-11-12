<?php 
$serverhost="localhost";
$dbuser="root";
$userpass="";
$dbname="user";
$conn=mysqli_connect($serverhost,$dbuser,$userpass,$dbname );
if (!$conn) {
  echo "failed";   
}
?>