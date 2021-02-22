<?php
	header("Content-Type: text/html; charset=utf-8");
	session_start();
	include("sessionCheck.php");
	include("src/webService/decodeEncode.php");
	$getData = $_GET['data'];
	$decodeData = dataDecode($getData);
	$returnData = explode("&", $decodeData);
	
	$user = substr($returnData[0],5);
	$password = substr($returnData[1],9);
	
	include("src/webService/getUserInfo.php");
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
<title>Maps CMS ABOUT</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/><!-- 讓瀏覽器的網址和選單隱藏 -->
	
	<link href="/css/jquery.mobile-1.4.5.min.css" rel="stylesheet">
	<!--datepicker-->
	<link href="/css/backend/jquery.mobile-git.css" rel="stylesheet">
	<link href="/css/backend/jquery.mobile.datepicker.css" rel="stylesheet">
	<link href="/css/backend/jquery.mobile.datepicker.theme.css" rel="stylesheet">
	<!-- Graphic -->
	<!-- <link href="/css/morris.css" rel="stylesheet"> -->
	
	<!-- jqplot graphic -->
	<link href="/css/jquery.jqplot.min.css" rel="stylesheet">
	 
    <!-- Custom styles for this template -->
	<link href="/css/backend/custom.css" rel="stylesheet">

	<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery.mobile-1.4.5.min.js"></script>
	
	<!--datepicker-->
	<script type="text/javascript" src="/js/backend/datepicker.js"></script>
	<script type="text/javascript" src="/js/backend/jquery.mobile-git.js"></script>
	<script type="text/javascript" src="/js/backend/jquery.mobile.datepicker.js"></script>
	
	<!-- jquery graphic -->
	<!--<script type="text/javascript" src="/js/raphael-min.js"></script>
	<script type="text/javascript" src="/js/morris.min.js"></script>-->
	
	<!-- jquery jqplot graphic>-->
	<script type="text/javascript" src="/js/jquery.jqplot.min.js"></script>
	<script type="text/javascript" src="/js/plugins/jqplot.pieRenderer.min.js"></script>
	<script type="text/javascript" src="/js/plugins/jqplot.donutRenderer.js"></script>
	
	<script type="text/javascript" src="/js/backend/jstz.min.js"></script>
	
	<!-- jquery other tool -->
	<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/js/messages_zh_TW.min.js"></script> 	
	<script type="text/javascript" src="/js/backend/config.js"></script>

</head>
<body>
  <div data-role="page" id="Maps-About">
    <div data-role="header" data-position="fixed" data-theme="b">    	
		<h2>About</h2>
	</div>
    <div data-role="main" class="ui-content">
		<div data-role="collapsibleset" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
    		<div data-role="collapsible">
        		<h2>顧客資料</h2>
    			<ul data-role="listview">
       				<li>
    					<p>帳號： <?php echo $getUserEmail; ?></p>
    					<p>登記手機：<?php echo $getUserPhone; ?></p>
    				</li>	
    			</ul>
    		</div>
			<div data-role="collapsible">
				<h2>聯絡我們</h2>
    				<a href="mailto:appmaker.service@gmail.com" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-icon-mail ui-btn-icon-left" data-transition="pop">email</a>
    				<a href="#popupLine" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-icon-comment ui-btn-icon-left" data-transition="pop">Line</a>
   	 				<a href="https://www.facebook.com/appmaker.service/" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left" data-transition="pop">facebook</a>
			</div>
		</div>
		<!--
    	<a href="#popupLogin" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-icon-mail ui-btn-icon-left ui-btn-a" data-transition="pop">聯絡我們</a>
		-->
		<!--send email popup-->
    	<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
    		<form method="POST" action="" id="AboutPush" name="AboutPush" data-ajax="true" >
        		<div style="padding:10px 5px;">
            		<label for="textarea-enhanced" class="ui-hidden-accessible">Message:</label>
            		<textarea  cols="30" rows="10" name="textarea-enhanced" id="textarea-enhanced" data-enhanced="true" class="ui-input-text ui-shadow-inset ui-body-inherit ui-corner-all" placeholder="請輸入您的意見.." required></textarea>
            		<input type="hidden"  id="user" value="<?php echo $user; ?>"/>
            		<button type="submit" id="sendAbout" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-mail">確認送出</button>
        		</div>
    		</form>
		</div>
		<!--LineQRCode popup-->
		<div data-role="popup" id="popupLine" class="photopopup" data-overlay-theme="b" data-corners="false" data-tolerance="30,15">
			<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><div data-role="header" data-theme="b"><h2>Line QRCode</h2></div>
			<img src="../images/backend/mapsQRCode.jpg" alt="LineQRCode">
		</div>
    </div>
	<!--footer-->
    <div data-role="footer" data-position="fixed"  data-theme="b">
		<div data-role="navbar">
			<ul>
				<li><a href="Maps_App.php" data-icon="grid">App</a></li>
				<li><a href="#" data-icon="info">ABOUT</a></li>
			</ul>
	  </div>
    </div>
  </div>
</body>
</html>
