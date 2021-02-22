<?php
	header("Content-Type: text/html; charset=utf-8"); 
	session_start();
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

    <title>MAPs CMS Help</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/backend/signin.css" rel="stylesheet">
	
	<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="/js/vendor/ie-emulation-modes-warning.js"></script>
	<script type="text/javascript" src="/js/backend/help.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript" src="/js/ie10-viewport-bug-workaround.js"></script>
</head>
<body>
	<div class="container" id = "container" >
		<fieldset id="help-fieldset">
		<form class="form-signin col-lg" id="helpForm" action=" " method = "post">
			<h2 class="form-signin-heading">Help Site</h2>
			<!--<div id="error_msg" class="error_msg"></div>-->
			<label>請輸入您的Email</label>
			<label for="inputEmail" class="sr-only">請輸入您的Email</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="email address" required autofocus>
			<label>請輸入您的手機號碼</label>
			<label for="inputTel" class="sr-only">請輸入您的手機號碼</label>
			<input type="tel" id="inputTel" name="inputTel" class="form-control" placeholder="telephone" required>
			<!--<button class="btn btn-lg btn-primary btn-block" type="submit" id = "btn">Sign in</button>-->
			<div class = "underLine"></div>
			<h5>系統會將密碼送到您的信箱</h5>
			<div class="help-button">
				<input type="submit" class="btn btn-lg btn-primary btn-block" value="確認" id="sendPassword"/>
				<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" id="btn2" onclick="location.href='signin.php'"/>
			</div>
		</form>
		</fieldset>
    </div> 
</body>
</html>
