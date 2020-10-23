<?php 

$name=mysqli_real_escape_string($con,$_POST['name']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$cname=mysqli_real_escape_string($con,$_POST['cname']);
$cno=mysqli_real_escape_string($con,$_POST['cno']);
$exp=mysqli_real_escape_string($con,$_POST['exp']);
$cvv=mysqli_real_escape_string($con,$_POST['cvv']);
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y H:i:s');
$email=$_SESSION['email'];

if(isset($_POST['continue'])){
	$guy="update orderhistory set name='$name',address='$address',cname='$cname',cno='$cno',exp='$exp',odate='$date',cvv='$cvv',email='$email' where id='$iid'";
	mysqli_query($con,$guy);
	$_SESSION['pdetails']="orderdetails";
	header('location:checkout.php');
}

if(isset($_POST['delete'])){
	$naru="delete from `orderhistory` WHERE id='$iid'";
	mysqli_query($con,$naru);
	unset($_SESSION["oquantity"]);
	unset($_SESSION["oid"]);
	unset($_SESSION["sum"]);
	header('location:order.php');
}	


ob_end_flush();
?>