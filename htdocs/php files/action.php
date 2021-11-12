<?php 
include "db.php";

$name_error = $email_error = $phone_error = $password_error = "";
$name = $email = $phone_number = $password = "";
// inserting data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['name'])) {
    $name_error = "Name is required";
  }else {
    $name = test_input($_POST['name']);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "only letters and white space allowed";
    }
  }
    if (empty($_POST['email'])) {
      $email_error = "Email is required";
    }else {
    $email = test_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "invalid email format";
    }
    }
    if (empty($_POST['phone'])) {
      $phone_error = "phone is required";
    }else {
    $phone_number = test_input($_POST['phone']);
    if (!preg_match("?^(\d[\s-]?)?[\(\[\s-}{0,2}?\d{3}[\s-]?d{4}$/i", $phone_number)) {
      $email_error = "invalid phone number";
    }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

      // $password = password_hash($password, PASSWORD_DEFAULT);
      $sql="INSERT INTO user_info (name, phone_number, email, password) VALUES ('$name', '$phone_number', '$email', '$password')";
      $result = mysqli_query($conn, $sql);
      header("location: ../index.php");
    }
    
    // }
    // else {
    // // echo "byayanga";
    // }

    // if (isset($_GET['login'])) {
    //   $email = $_GET['email'];
    //   $password = $_GET['password'];

    //   $sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";

    //   $result = mysqli_query($conn, $sql);

    //   $rows = mysqli_fetch_all($result);
    //   echo $rows;
      
    //   if ($rows['email']==$email && $rows['password']==$password) {
    //     echo "login successful, you are welcome.$email";
    //   }
    //   else {
    //     echo "login failed";
    //   }
    // }
    ?>

