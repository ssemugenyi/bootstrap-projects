<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MED MUSIC</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css files/cardheader.css">
    <link rel="stylesheet" href="css files/cards.css">
    <link rel="stylesheet" href="css files/carousel.css">
    <link rel="stylesheet" href="css files/footer.css">
    <link rel="stylesheet" href="css files/header.css">
    <link rel="stylesheet" href="css files/media queries.css">
    <link rel="stylesheet" href="css files/contactus.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f25b86bc46.js" crossorigin="anonymous"></script>
</head>
<body> 

       <!-- header -->
       <?php include "php files/header.php"?>
    <main>
      <!-- slider -->
      <?php include "php files/carousel.php"?>
       
      <!-- card head -->
      <?php include "php files/cardheader.php"?>

      <!-- cards -->
      <div class="row">
        <?php include "php files/cards.php"?>
      </div>
      
    </main>
        <!-- footer -->
      <?php include "php files/footer.php"?>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>