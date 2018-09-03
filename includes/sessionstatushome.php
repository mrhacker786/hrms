<?php
session_start();
if(!isset($_SESSION["username"]) && !isset($_SESSION["password"])){
	header("location: index.php");
}
else{
	$id = $_SESSION["id"];
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
}
?>