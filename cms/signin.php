<?php
	header("Content-Type: text/html; charset=utf-8");
	// Prevents javascript XSS attacks aimed to steal the session ID
	ini_set("session.cookie_httponly", 1);
	// Session ID cannot be passed through URLs
	ini_set('session.use_only_cookies', 1);
	// Uses a secure connection (HTTPS) if possible
	ini_set('session.cookie_secure', 1);
	
	include("src/webService/decodeEncode.php");
	session_start();
	//loginin判斷
	if(!empty($_SESSION['login_user']))
	{
		header('Location:Maps_App.php');
	}	
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>MAPs CMS Signin </title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/backend/signin.css" rel="stylesheet">
	
	<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="/js/ie-emulation-modes-warning.js"></script>
	<script type="text/javascript" src="/js/backend/login.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript" src="/js/ie10-viewport-bug-workaround.js"></script>
</head>
<body>
	<div class="container" id = "container" >
		<fieldset>
		<form class="form-signin col-lg" id="loginForm" action="./" method = "post">
			<h2 class="form-signin-heading">MAPs後台管理系統</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="email address" value="<?php if(isset($_COOKIE["remUser"])){echo $_COOKIE["remUser"];} ?>" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="password" value="<?php if(isset($_COOKIE["remPass"])){$decodePassword = dataDecode($_COOKIE["remPass"]);
				echo $decodePassword;} ?>" required>
			<div class="checkbox">
				<label>
					<input type="checkbox" id="rememberMe" value="true" checked> 記住我
				</label>
				<h5>
					<a href="../index.php">
						<span class="" aria-hidden="true"></span>
						還沒有自己的App嗎 快來創一個吧!
					</a>
				</h5>
			</div>
			<input type="submit" class="btn btn-lg btn-primary btn-block" value="登入" id="btn1"/>
			<input type="button" class="btn btn-lg btn-primary btn-block" value="無法登入嗎?" id="btn2"  onclick="location.href='help.php'"/>
			<div class = "underLine"></div>
			<h5><span class=""></span>首次使用MAPs後台?</h5>
			<input type="button" class="btn btn-lg btn-primary btn-block" value="創建免費帳號" id="btn3" onclick="location.href='create.php'">
		</form>
		</fieldset>
    </div>   
</body>
</html>
