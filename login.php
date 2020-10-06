<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="signup1.css">
  <link rel="stylesheet" type="text/css" href="hp.css">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>
  span{
    color:red;
  }
  #hgf{
    color:green;
  }
</style>

</head>

<body>

	<!-- <div class="main-loader"></div> -->
  <div id="w">
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="news.php">News</a>
        <a href="#contact">Contact</a>  
        <a href="#about">About</a>
        <a href="signup1.php" style="float: right;">Signup</a>
        <a href="login.php" style="float: right;">Login</a>
      </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
              
              <!-- <div class="form-label-group">
                <input type="text" autocomplete="off" id="inputUserame" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputUserame">Name</label>
              </div> -->

              <div class="form-label-group">
                <input type="email" id="inputEmail" autocomplete="off" name="email" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Enter email</label>
              </div>
              
              

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <!-- <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" name="cpassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div> -->
              
              <div class="g-recaptcha" data-sitekey="6Leq09MZAAAAADd2v7irPraoAfFRCtecRmdir4pi" style="padding-left: 34px; padding-bottom: 15px;"></div>


              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Register</button>
              <a class="d-block text-center mt-2 small" href="signup1.php">Create a account?</a>
              <hr class="my-4">
              <div style="text-align: center;">

                <?php 

                include "dbcon.php";

                if(isset($_POST['submit'])){
                  $email=$_POST['email'];
                  $password=$_POST['password'];
                  $emailsearch="select * from signup where email='$email'";
                  $query=mysqli_query($con,$emailsearch);
                  $emailcount=mysqli_num_rows($query);

                  $secretkey="6Leq09MZAAAAAKX3UjlJXP8Z7T1K92fA4XfKF2D1";
                  $responsekey=$_POST['g-recaptcha-response'];
                  $userip=$_SERVER['REMOTE_ADDR'];
                  $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$userip";
                  $response=file_get_contents($url);
                  $response=json_decode($response);

                  if($response->success){
                  if($emailcount){
                    $emailpass=mysqli_fetch_assoc($query);
                    $dbpass=$emailpass['password'];
                    $passdecode=password_verify($password, $dbpass);

                    if($passdecode){
                      echo "<span>Login successful</span>";
                      $_SESSION['username']=$emailpass['username'];
                      header('location:index.php');

                    }else{
                      echo "<span>Wrong password</span>";
                    }
                    }else{
                      echo "<span>No account found</span>";
                    }
                    }else{
                  echo "<span>Invalid recaptcha</span>";
                }
                  }

                 ?>


           </div>


              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class='b row' style="color:#edc8a3;background-color: #3e2b2e">
    <div>
      <h3 class="container" style="color: red;font-family: 'Bangers', cursive;font-size:xxx-large;">
      Cup o' Joe
    </h3>
    <p style="padding-left: 20px;margin-top: -21px;color: red;">COFFEE ROASTERS</p>
    </div>
    <div>
      <ul style="list-style-type:none;">
        <li>Products</li>
        <li>Our Company</li>
        <li>Join Our Team</li>
        <li>For Bussiness</li>
        <li>For Marketing</li>  
      </ul>
    </div>
    <div>
      <h3 style="font-weight:bold">
        Follow Us On :-
      </h3>
      <a href="javascript:void();" style="color:#FC67F5;text-decoration: none;" class="fab fa-instagram fa-2x"></a>
      <a href="javascript:void();" style="color:blue;text-decoration: none;" class="fab fa-facebook fa-2x"></a>
      <a href="javascript:void();" style="color:green;text-decoration: none;" class="fab fa-whatsapp fa-2x"></a>
      <a href="javascript:void();" style="color:#6777FF;text-decoration: none;" class="fab fa-discord fa-2x"></a>
    </div>
    
  </div>


  <div class="footer" style="color:#edc8a3;background-color: #3e2b2e">
    <p>Trademark - Cup o' Joe 2020. All Rights Reserved<br>
  </p>
  </div>
  <!-- </div> -->

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</html>