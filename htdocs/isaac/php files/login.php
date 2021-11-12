<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css files/cardheader.css">
    <link rel="stylesheet" href="../css files/cards.css">
    <link rel="stylesheet" href="../css files/carousel.css">
    <link rel="stylesheet" href="../css files/footer.css">
    <link rel="stylesheet" href="../css files/header.css">
    <link rel="stylesheet" href="../css files/media queries.css">
    <link rel="stylesheet" href="../css files/contactus.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f25b86bc46.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- header -->
<?php include "header.php"?>

<?php include "logincontroller.php";?>
                <style>
                .error{
                    font-weight:bold;
                    font-family: times new roman;
                    color: red;
                    }
                </style>
    <main>
    
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                              </div>
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" autocomplete="off">
                                <label class="form-check-label" for="exampleCheck1" >Remember me</label>
                              </div>
                              <button type="login" class="btn btn-primary">LOGIN</button>
                            </form>
    </main>
    <!-- footer -->
    <footer>
    <?php include "footer.php"?>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>