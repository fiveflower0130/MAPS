<?php
	header("Content-Type: text/html; charset=utf-8");
	session_start();
	include("src/webService/decodeEncode.php");
	
	$getData = $_GET['data'];
	$decodeData = dataDecode($getData);
	$returnData = explode("&", $decodeData);
	
	$appID = substr($returnData[0],3);
	$appOS = substr($returnData[1],3);
	
	$data = "id=".$appID."&os=".$appOS; 
    $encodeData = dataEncode($data);
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>MAPs CMS Binding</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/backend/binding.css" rel="stylesheet">
	
	<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script type="text/javascript" src="/js/ie-emulation-modes-warning.js"></script>
	<script type="text/javascript" src="/js/backend/binding.js"></script>
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
		<form class="form-signin col-lg" id="bindingForm"  action="./" method="post">
			<h2 class="form-signin-heading">已有帳號</h2>
			
			<label>請輸入您註冊的Email</label>
			<label for="inputEmail" class="sr-only">請輸入您註冊的Email</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="email address" required autofocus>
			<label>請輸入您註冊的密碼</label>
			<label for="inputPassword" class="sr-only">請輸入您註冊的密碼</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="password" required autofocus>
			<div class = "underLine"></div>
			<div class="binding-button">
				<input type="hidden"  id="appID" name="appID" value="<?php echo $appID ; ?>"/>
				<input type="hidden"  id="appOS" name="appOS" value="<?php echo $appOS ; ?>"/>
				<input type="hidden"  id="data" name="data" value="<?php echo $encodeData ; ?>"/>
				<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="確認" id="bind"/>
				<?php
					if(empty($appID)&&empty($appOS)){
						echo '<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" id="btn2" onclick="history.back()"/>';
					}
					else{
						echo '<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" id="btn2" onclick="location.href='."'../custom_apps/app_result_page/".$appID.".php?data=".$encodeData."'".'"/>';
					}
				?>	
			</div>
		</form>
		</fieldset>
    </div>    
</body>
</html>
