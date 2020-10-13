<?php 

session_start();

unset($_SESSION["username"]);
unset($_SESSION["email"]);
unset($_SESSION["oquantity"]);
unset($_SESSION["oid"]);
unset($_SESSION["sum"]);

header('location:index.php');

?>