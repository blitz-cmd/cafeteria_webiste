<?php 
include "dbcon.php";

function rs($len){
	$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	return substr(str_shuffle($str_result),0, $len);
}

$i=0;

if(isset($_POST['order'])){
$q1=$_POST['n1'];$q2=$_POST['n2'];$q3=$_POST['n3'];$q4=$_POST['n4'];$q5=$_POST['n5'];$q6=$_POST['n6'];$q7=$_POST['n7'];
$q8=$_POST['n8'];$q9=$_POST['n9'];$sum=0;

 
$orderid="#id".rs(8);

$ordersearch="select * from orderhistory where id='$orderid'";
$query2=mysqli_query($con,$ordersearch);
$ordercount=mysqli_num_rows($query2);

if($ordercount==0){
$query="insert into orderhistory (id) values ('$orderid')";
mysqli_query($con,$query);

if($q1!=0){
$query1="update orderhistory set name1='$a1',price1='$o1',quantity1='$q1' where id='$orderid'";
mysqli_query($con,$query1);
$sum=$sum+($o1*$q1);$i++;
}
if($q2!=0){
$query1="update orderhistory set name2='$a2',price2='$o2',quantity2='$q2' where id='$orderid'";
mysqli_query($con,$query1);
$sum=$sum+($o2*$q2);$i++;
}
if($q3!=0){
$query1="update orderhistory set name3='$a3',price3='$o3',quantity3='$q3' where id='$orderid'";
mysqli_query($con,$query1);
$sum=$sum+($o3*$q3);$i++;
}
if($q4!=0){
$query1="update orderhistory set name4='$a4',price4='$o4',quantity4='$q4' where id='$orderid'";
mysqli_query($con,$query1);
$sum=$sum+($o4*$q4);$i++;
}
if($q5!=0){
$query1="update orderhistory set name5='$a5',price5='$o5',quantity5='$q5' where id='$orderid'";
mysqli_query($con,$query1);
$sum=$sum+($o5*$q5);$i++;
}
if($q6!=0){
$query1="update orderhistory set name6='$a6',price6='$o6',quantity6='$q6' where id='$orderid'";
mysqli_query($con,$query1);
$sum=$sum+($o6*$q6);$i++;
}
if($q7!=0){
$query1="update orderhistory set name7='$a7',price7='$o7',quantity7='$q7' where id='$orderid'";
mysqli_query($con,$query1);
$sum=$sum+($o7*$q7);$i++;
}
if($q8!=0){
$query1="update orderhistory set name8='$a8',price8='$o8',quantity8='$q8' where id='$orderid'";
mysqli_query($con,$query1);
$sum=$sum+($o8*$q8);$i++;
}
if($q9!=0){
$query1="update orderhistory set name9='$a9',price9='$o9',quantity9='$q9' where id='$orderid'";
mysqli_query($con,$query1);
$sum=$sum+($o9*$q9);$i++;
}
$query="update orderhistory set total='$sum' where id='$orderid'";
mysqli_query($con,$query);
$_SESSION['oquantity']=$i;
$_SESSION['oid']=$orderid;
$_SESSION['sum']=$sum;
$_SESSION['pdetails']="order";
header('location:odetails.php');
ob_end_clean();

}
}
?>;