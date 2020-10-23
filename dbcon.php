<?php 

$server="remotemysql.com";
// $server="localhost";
$user="4zppiuD7Fh";
// $user="root";
$password="q11LhopQQx";
// $password="mysql"
$db="4zppiuD7Fh";
// $db="cafeteria"

$con=mysqli_connect($server,$user,$password,$db);

if($con){
	
}else{
	echo "<span>connection failed to server</span>";}

?>