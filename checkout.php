<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="co.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>

<div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="news.php">News</a>
        <a href="#contact">Contact</a>  
        <a href="#about">About</a>
        <?php 
        include "dbcon.php";
            session_start();
            ob_start();
            $oid=$_SESSION['oid'];
            if(isset($_SESSION['username'])){
                    echo "<a href='logout.php' style='float: right;'>Logout</a>";
                    echo "<a href='#' style='float: right;'>{$_SESSION['username']}</a>";                    
            }else{
                    echo "<a href='signup1.php' style='float: right;'>Signup</a>";
                    echo "<a href='login.php' style='float: right;'>Login</a>";
            }
        ?>
</div>

<div id="tan">
		
<h1 id="tan1">Thank you for the order!</h1>

</div>

<div class="container" style="text-align: center;padding-top: 50px;padding-top: 140px;
    padding-bottom: 140px;">
	<h1 style="color: brown;font-weight: 600;padding-bottom: 45px;font-size: 50px;">Your order is on its way</h1>
	<p style="font-size: 25px;padding-bottom: 26px;">Delivery of healthy food is the best solution for bussiness people. Who wants to eat right,look healthy and work productively all day</p>
	<a href="news.php" class="btn" style="background-color: brown;color: white;padding: 15px;
    font-weight: 600;border-radius: 20px;">View how we deliver the order</a>	
</div>

<div style="padding-bottom: 100px;">
<div class="container row1">
	<div class="col-xl-6 col-sm-12" style="background-color: #D7DBDB;margin-bottom: 10px;padding: 50px;">
		<h2 style="letter-spacing: -3px;">SUMMARY:</h2>
		<p style="padding-top: 25px;font-size: 21px;">Order Id: <span><?php echo $oid ?></span></p>
		<p style="font-size: 21px;">Order Date: <span><?php 
		$q="select odate,total,address from orderhistory where id='$oid'";
		$qq=mysqli_query($con,$q);
		$qq=mysqli_fetch_assoc($qq);
		$qq1=$qq['odate'];
		$qq2=$qq['total'];
		$qq3=$qq['address'];
		echo $qq1;
		?>			
		</span></p>
		<p style="font-size: 21px;">Order Total: <span><?php echo $qq2; ?></span></p>

	</div>
	<div class="col-xl-6 col-sm-12" style="background-color: #D7DBDB;margin-bottom: 10px;padding: 50px;">
		<h2 style="letter-spacing: -3px;">SHIPPING ADDRESS: </h2>
		<p style="padding-top: 25px;font-size: 21px;"><?php echo $qq3; ?></p>
		<p></p>
	</div>
	
</div>
</div>

<div class="container" style="padding-left: 90px;">
	<hr style="padding-bottom: 30px;">
	<table style="width: 70%;font-size:21px;padding-bottom: 30px;">
		<tr>
			<td><strong>Subtotal (<span><?php echo $_SESSION["oquantity"]; ?></span> items):</strong></td>
			<td><strong><?php echo $_SESSION["sum"]; ?></strong></td>
		</tr>
		<tr>
			<td><strong>Shipping Charges:</strong></td>
			<td><strong>0</strong></td>
		</tr>
		<tr>
			<td><strong>Discount:</strong></td>
			<td><strong>0</strong></td>
		</tr>
		<tr>
			<td style="padding-top: 40px;"><strong>Order Total</strong></td>
			<td><strong><?php echo $_SESSION["sum"]; ?></strong></td>
		</tr>
	</table>
	<hr style="padding-bottom: 100px;margin-top: 46px;">
</div>

<div class="container row1" style="margin-bottom: 100px;">
	<div class="col-xl-6 col-sm-12" style="margin-bottom: 80px;">
		<div class="container">
			<h1><strong style="letter-spacing: -1px;">Contact Us:</strong></h1>
			<p style="font-size: 20px;padding-top: 20px;">We prepare healthy,ready-to-eat coffee and delivers them to your door.</p>
			<br>
			<p class="fas fa-envelope" style="font-size: 20px;"><span style="padding-left: 20px;">coe-cafe@mail.com</span></p><br>
			<p class="fas fa-phone-alt"  style="font-size: 20px;"><span  style="padding-left: 20px;">+91-9465239120</span></p><br>
			<p class="fas fa-map-marked-alt"  style="font-size: 20px;"><span  style="padding-left: 20px;">Mumbai,India</span></p><br><br><br>
			<a href="news.php" class="btn" style="background-color: brown;color: white;padding: 15px;
    font-weight: 600;border-radius: 10px;">GET IT NOW</a>
		</div>
		
	</div>
	<div class="col-xl-6 col-sm-12" style="text-align: center;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d68251.21649837494!2d72.82472277574841!3d18.977068115484123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1c73a0d5cad%3A0xc70a25a7209c733c!2sGateway%20Of%20India%20Mumbai!5e0!3m2!1sen!2sin!4v1602568949267!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</div>

<<?php 
	unset($_SESSION["oquantity"]);
	unset($_SESSION["oid"]);
	unset($_SESSION["sum"]);
?>

<div class='b row1' style="color:#edc8a3;background-color: #3e2b2e">
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
      <a href="#" style="color:#FC67F5;text-decoration: none;" class="fab fa-instagram fa-2x"></a>
      <a href="#" style="color:blue;text-decoration: none;" class="fab fa-facebook fa-2x"></a>
      <a href="#" style="color:green;text-decoration: none;" class="fab fa-whatsapp fa-2x"></a>
      <a href="#" style="color:#6777FF;text-decoration: none;" class="fab fa-discord fa-2x"></a>
    </div>
    
  </div>


  <div class="footer" style="color:#edc8a3;background-color: #3e2b2e">
    <p>Trademark - Cup o' Joe 2020. All Rights Reserved<br>
  </p>
  </div>
  </div>

</body>
</html>