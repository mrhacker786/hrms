<?php 
	if (isset($_POST["user"]) && isset($_POST["pass"])) {
		include "userlogin.php";
		$objlogin = new Login();
		$objlogin->user_login("SELECT * FROM tbl_user WHERE username='".$_POST["user"]."' AND password='".$_POST["pass"]."'");
		
	}
?>