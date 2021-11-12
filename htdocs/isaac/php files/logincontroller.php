
<?php

// database connection
include "db.php";
    

if ($_SERVER["REQUEST_METHOD"] == "GET"  && !isset($_GET['login'])) {
    
     $email = $_POST['email'];
     $password = $_POST['password'];

    $sql = "SELECT * FROM user_details WHERE email_address = '$email' AND password = '$password'";
   

    $result = mysqli_query($conn, $sql);
    

    $rows = mysqli_fetch_assoc($result);
    

//     $sql = mysqli_query($conn,"select * from user_details where email_address = '$email' and password = '$password'");
//     $result= mysqli_result($sql);

// $row = mysqli_fetch_array($conn,$result);
if ($rows['email_address']==$email && $rows['password']==$password){
    
    echo "Login success !!!, welcome" .$email;
}
else{
    echo "login failed user doesn't exist";
}
}



?>