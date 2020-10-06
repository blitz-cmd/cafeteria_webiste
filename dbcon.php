<?php 

$server="localhost";
$user="root";
$password="mysql";
$db="cafeteria";

$con=mysqli_connect($server,$user,$password,$db);

if($con){
	
}else{
	echo "<span>connection failed</span>";}

 ?>