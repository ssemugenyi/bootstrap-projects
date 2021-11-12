<!-- inserting user details into database -->
<?php

// database connection
$servername='localhost';
$username='root';
$password='';
$dbname = "users";
$conn=mysqli_connect($servername,$username,$password,$dbname);
  if($conn){
      echo "database ekola naye ";
    }
    





if (isset($_POST['submit'])) {
    
    $username = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $username= stripcslashes($username);
    $email= stripcslashes($email);
    $password= stripcslashes($password);
    $username = mysqli_real_escape_string($conn,$username);
    $email = mysqli_real_escape_string($conn,$email);
    $password = mysqli_real_escape_string($conn,$password);
    echo $username;

    $sql= "INSERT INTO user_details (surname, email_address, password) VALUES ('$username','$email','$password')"; 
     
    $result = mysqli_query($conn, $sql);
    
    
    
}
else {
    echo "bigaanye";
    
}


if (!isset($_GET['login'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    $result = mysqli_query($conn,"select * from users where email_address = '$email' and password = '$password'");


$row = $result->fetch_array(MYSQLI_BOTH);
if ($row['email']==$email && $row['password']==$password){
    echo "Login success !!!, welcome.$username";
}
else{
    echo "login failed";
}
}



?>