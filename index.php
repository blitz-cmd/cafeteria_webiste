<!DOCTYPE html>
  <html>
  <head>
    <title>Cafeteria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">



  </head>
  <body>
    <div class="main-loader"></div>
  <div>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="news.php">News</a>
        <a href="#contact">Contact</a>  
        <a href="#about">About</a>
        <?php 
            session_start();
            $_SESSION['pdetails']="index";
            if(isset($_SESSION['username'])){
                    echo "<a href='logout.php' style='float: right;'>Logout</a>";
                    echo "<a href='#' style='float: right;'>Welcome {$_SESSION['username']}</a>";                    
            }else{
                    echo "<a href='signup.php' style='float: right;'>Signup</a>";
                    echo "<a href='login.php' style='float: right;'>Login</a>";
            }
        ?>
      </div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner"><div class="carousel-caption d-none d-md-block" style="text-align: justify;padding-bottom: 177px;">
      <h1 style="color: #9cd8ef;font-family: 'Ranchers', cursive;font-size: xxx-large;letter-spacing: 4px;">Welcome to Cup o' Joe</h1>
      <p style="color:white;font-family: 'Lobster', cursive;font-size: large;">'The Night Cafe' and 'The Starry Night' still emit such pathos, density, and intensity that they send shivers down the spine. Whether Van Gogh thought in color or felt with his intellect, the radical color, dynamic distortion, heart, soul, and part-by-part structure in these paintings make him a bridge to a new vision and the vision itself.</p>
        <p style="color:white;float: right;font-family: 'Lobster', cursive;font-size: large;">-Jerry Saltz</p>
    </div>
      <div class="carousel-item active">
        <img class="ghj" src="images/tony-lee-8IKf54pc3qk-unsplash.jpg" alt="First slide">
        <!-- <div class="carousel-caption d-none d-md-block">
      <h5>Welcome to Cup o' Joe</h5>
      <p>'The Night Cafe' and 'The Starry Night' still emit such pathos, density, and intensity that they send shivers down the spine. Whether Van Gogh thought in color or felt with his intellect, the radical color, dynamic distortion, heart, soul, and part-by-part structure in these paintings make him a bridge to a new vision and the vision itself.</p>
    </div> -->
      </div>
      <div class="carousel-item">
        <img class="ghj" src="images/nathan-dumlao-I_394sxx0ec-unsplash  (2).jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="ghj" src="images/nathan-dumlao-6VhPY27jdps-unsplash  (2).jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div id="drf" style="padding-bottom: 235px;">
    <h1 style="padding-top: 200px;padding-bottom: 31px;font-size: 6em;color: white;font-family: 'Oswald', sans-serif;letter-spacing: 5px;">GAME DAY PARTY PACKAGES</h1>
    <hr style="padding-bottom: 5px;width: 14%;color: white;background-color: white;">
    <p style="padding-top: 31px;color: white;font-size: 30px;margin-bottom: 0;font-family: 'Oswald', sans-serif;letter-spacing: 1px;">FEED YOUR SQUAD OF 6 FOR ₹1000 OR 12 FOR ₹1500 ON GAME DAY.</p>
    <p style="font-size: 30px;color: white;padding-bottom: 27px;font-family: 'Oswald', sans-serif;letter-spacing: 1px;">ORDER ONLINE OR BY DRIVE-THRU FOR SAME-DAY PICKUP.</p>
    <a href="order.php" class="btn aza">ORDER ONLINE</a>
  </div>


    <div class="container row1" id="ord">
      <div class="col-xl-5">
        <h1 style="font-family: 'Ranchers', cursive;font-size: revert;">3 WAYS TO <br><span style="font-family: 'Sansita Swashed', cursive;font-size: 90px;">JOE<span> <img src="images/oderr.jpg" alt=""> </h1>
        <p style="font-family: 'Pacifico', cursive;letter-spacing: 3px;">Select your pickup preference when <br>you Order from our site</p>
        <a href="news.php" class="btn btn-info" style="border-radius: 20px;font-weight: 900;">SEE HOW WE'RE SERVING SAFELY</a>
      </div>
      
      <div class="col-xl-7">
        <img src="images/curbside.jpg" alt="" class="img">
        <img src="images/drive thru.jpg" alt="" class="img">
        <img src="images/in store.jpg" alt="" class="img">
      </div>
    </div>

<?php  include "footer.php";?>

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </body><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <script>
    var $preLoader = $(".main-loader");
$(window).load(function() {
    $preLoader.fadeOut(""); // Animate loader off screen
});
  </script>
  </html>