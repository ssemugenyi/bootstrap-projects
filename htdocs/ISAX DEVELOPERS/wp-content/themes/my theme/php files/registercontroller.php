<?php

// database connection
include "db.php";

//define variables
   
    $name_err = $email_err = $password_err = "";

    // <!-- inserting user details into database -->

if ($_SERVER["REQUEST_METHOD"] == "POST"  && !isset($_POST['submit'])) {
    
    // $username = $_POST['surname'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];

    
    // $username = mysqli_real_escape_string($conn,$username);
    // $email = mysqli_real_escape_string($conn,$email);
    // $password = mysqli_real_escape_string($conn,$password);

         //validating username
    
    if (empty($_POST['surname'])) {
        $name_err = "Name is required";
    } else {
        $username = test_input($_POST['surname']);
        if (!preg_match("/^[a-zA-Z]*$/", $username)) {
            $name_err = "Only letters and white space allowed";
        }
    }
    //validating email
    if (empty($_POST['email'])) {
        $email_err = "Email required";
    } else {
        $email = test_input($_POST['email']);
        //check if email is well formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
        }
    }

    if (empty($_POST['password'])) {
        $password_err = "Password is required";
    } else {
        $password = test_input($_POST['password']);
        if (!preg_match("/^[0-9a-zA-Z]*$/", $password)) {
            $password_err = "Password should contain letters and numbers";
        }
    }
    
    if (empty($name_err) && empty($email_err) && empty($password_err)) {
        $username = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql= "INSERT INTO user_details (surname, email_address, password) VALUES ('$username','$email','$password')"; 
         
        $result = mysqli_query($conn, $sql);
    }
        
    
        
    
        

   
    
  
    

   
    
    
    
    
    
}



function test_input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
?>