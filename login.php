<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>

    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="news.php">News</a>
        <a href="#contact">Contact</a>  
        <a href="#about">About</a>
        <?php 
            session_start();
            if(isset($_SESSION['username'])){
                    header('location:index.php');                    
            }else{
                    echo "<a href='signup.php' style='float: right;'>Signup</a>";
                    echo "<a href='login.php' style='float: right;'>Login</a>";
            }
      ?>
      </div>


  <div class="container">
    <div class="row1">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
              

              <div class="form-label-group">
                <input type="email" id="inputEmail" autocomplete="off" name="email" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Enter email</label>
              </div>
              
              

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="g-recaptcha" data-sitekey="6Leq09MZAAAAADd2v7irPraoAfFRCtecRmdir4pi" style="padding-left: 34px; padding-bottom: 15px;"></div>


              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Login</button>
              <a class="d-block text-center mt-2 small" href="signup.php">Create a account?</a>
              <hr class="my-4">
              <div style="text-align: center;">

                <?php 

                include "dbcon.php";

                if(isset($_POST['submit'])){
                  $email=mysqli_real_escape_string($con,$_POST['email']);
                  $password=mysqli_real_escape_string($con,$_POST['password']);
                  $emailsearch="select * from signup where email='$email'";
                  $query=mysqli_query($con,$emailsearch);
                  $emailcount=mysqli_num_rows($query);
                  date_default_timezone_set('Asia/Kolkata');
                  $date = date('d-m-Y H:i:s');  

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
                      $lhis="insert into loginhistory (email,timestamp,ip) values ('$email','$date','$userip')";
                      mysqli_query($con,$lhis);
                      $_SESSION['username']=$emailpass['username'];
                      $_SESSION['email']=$emailpass['email'];
                      $_SESSION['pdetails']="login";
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

<?php  include "footer.php";?>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</html>