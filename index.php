<?php
include 'includes/sessionstatusindex.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Human Resource Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/simpleicons.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/main.js"></script>
</head>
<body>
    <div class="header">
        <div class="logo">
            <i class="icon-layers icon logo-icon"></i> Git Hub HRMS
        </div>
    </div>
    <div class="content">
        <div class="login-form">
            <div class="login-title" id="login-form">
                <i class="fa fa-circle"  aria-hidden="true"></i> Sign In
            </div>
            <div class="login-title" id="login-succ" style="display: none;">
                <i class="fa fa-circle" style="color: #32CD32;"  aria-hidden="true"></i> Login SuccessFull
            </div>
            <div class="login-content">
                <input type="text" id="txtusername" class="txtdesign" placeholder="Email Address" autocomplete="off">
                <input type="password" id="txtpassword" class="txtdesign" placeholder="Password">
                <input type="button" value="Sign In" id="btnsubmit" onclick="login()" class="btn-normal">
            </div>
        </div>
    </div>
</body>
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/main.js"></script>
</html>