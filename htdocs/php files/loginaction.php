<?php
include "db.php";
if (!isset($_GET['login'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_assoc($result);
    
    if ($rows['email']==$email && $rows['password']==$password) {
      echo "login successful, you are welcome.$email";
    //   header("location: ../html files/background.html")
    }
    else {
      echo "login failed";
    }
  }
?>