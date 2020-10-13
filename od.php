<?php 
// session_start();

$name=mysqli_real_escape_string($con,$_POST['name']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$cname=mysqli_real_escape_string($con,$_POST['cname']);
$cno=mysqli_real_escape_string($con,$_POST['cno']);
$exp=mysqli_real_escape_string($con,$_POST['exp']);
$cvv=mysqli_real_escape_string($con,$_POST['cvv']);
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y H:i:s');

// echo $name.':'.$address.':'.$cname.':'.$cno.':'.$exp.':'.$cvv;

if(isset($_POST['continue'])){
// echo "<script>alert(gg)</script>";
	$guy="update orderhistory set name='$name',address='$address',cname='$cname',cno='$cno',exp='$exp',odate='$date',cvv='$cvv' where id='$iid'";
	mysqli_query($con,$guy);
	header('location:checkout.php');
}

if(isset($_POST['delete'])){
	$naru="delete from `orderhistory` WHERE id='$iid'";
	mysqli_query($con,$naru);
	// unset($_SESSION["oquantity"]);
	// unset($_SESSION["oid"]);
	// unset($_SESSION["sum"]);
	header('location:order1.php');
}	


ob_end_flush();
 ?>