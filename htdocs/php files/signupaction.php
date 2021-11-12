<?php 
include "db.php"
// inserting data

if (!isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($name)) {
      echo "username required";

    }
    elseif (empty($email)) {
      echo "email required";
    }
    elseif (empty($password)) {
      echo "password required";
    }
    else{
      // $password = password_hash($password, PASSWORD_DEFAULT);
      $sql="INSERT INTO user_info (name, phone_number, email, password) VALUES ('$name', '$phone_number', '$email', '$password')";
      $result = mysqli_query($conn, $sql);
      header("location: ../index.php");
    }
    
    }
    else {
    echo "byayanga";
    }

    
    ?>

