<?php
	header("Content-Type: text/html; charset=utf-8");
	include("src/webService/decodeEncode.php");
	
	$getData = $_GET['data'];
	$decodeData = dataDecode($getData);
	$returnData = explode("&", $decodeData);
	
	$appId = substr($returnData[0],3);
	$appName = substr($returnData[1],5);
	$appToken = substr($returnData[2],6);
	$uuidType = substr($returnData[3],9);
	$user = substr($returnData[4],5);
	$password = substr($returnData[5],9);
	$encodePassword = dataEncode($password);
	
	$data = "id=".$appId."&name=".$appName."&token=".$appToken."&uuidtype=".$uuidType."&user=".$user."&password=".$password; 
    $encodeData = dataEncode($data);
	
	include("src/webService/countOSUser.php");
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
<title>Maps CMS App</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    
	
	<link href="/css/jquery.mobile-1.4.5.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" /> -->
	<!-- Graphic -->
	<!-- <link href="/css/morris.css" rel="stylesheet"> -->
	
	<!-- jqplot graphic -->
	<link href="/css/jquery.jqplot.min.css" rel="stylesheet">
	 
    <!-- Custom styles for this template -->
	<link href="/css/backend/custom.css" rel="stylesheet">

	<script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/jquery.mobile-1.4.5.min.js"></script>
	
	<!-- jquery graphic -->
	<!--<script type="text/javascript" src="/js/raphael-min.js"></script>
	<script type="text/javascript" src="/js/morris.min.js"></script>-->
	
	<!-- jquery jqplot graphic>-->
	<script type="text/javascript" src="/js/jquery.jqplot.min.js"></script>
	<script type="text/javascript" src="/js/plugins/jqplot.pieRenderer.min.js"></script>
	<script type="text/javascript" src="/js/plugins/jqplot.donutRenderer.min.js"></script>
	
	
	<!-- jquery other tool -->
	<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/js/messages_zh_TW.min.js"></script> 	
	<script type="text/javascript" src="/js/backend/config.js"></script>

</head>
<body>  
  <div data-role="page" id="Maps-App-Data">
	<div data-role="header" data-position="fixed" data-theme="b">
		<h2>
			<?php echo $appName;?>
		</h2>
		<a href="Maps_App.php" data-role="button" data-icon="back" class="ui-btn-left" data-corners="true"  data-transition="slide" data-direction="reverse">回上一頁</a>
		<?php
			echo"<a href='Maps_App_Push_All.php?data=".$encodeData."' class='ui-btn-right'  data-transition='slide' data-icon='mail' data-iconpos='right'>發送訊息</a>";
			//echo"<a href='Maps_App_Push_All.php?id=".$devicename."&token=".$apptoken."&uuidtype=".$uuidtype."' class='ui-btn-right'  data-transition='slide' data-icon='mail' data-iconpos='right'>發送訊息</a>";
		?>
	</div>
	<div data-role="main" class="ui-content" >
		<h3 class="ui-bar ui-bar-a ui-corner-all">會員人數:<?php echo $countAll;?></h3>
      	<div class="ui-body ui-body-a ui-corner-all" id="App_Data_Content">
      		<!--<div id="OS_people">-->
				<h4>會員裝置所使用的OS人數比</h4>
				<input type="hidden"  id="iosCount" value="<?php echo $countIOS; ?>"/>
				<input type="hidden"  id="androidCount" value="<?php echo $countAndroid; ?>"/>
				<div id="chart2" ></div>
			<!--</div>-->
      	</div>
		
		<h3 class="ui-bar ui-bar-a ui-corner-all"><?php echo $appName ;?> QR Code</h3>
      	<div class="ui-body ui-body-a ui-corner-all" id="App_Data_QRCode">
        	<div class="ui-grid-a">
				<div class="ui-block-a" >
					<a href="#popupiOS" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow " id="iOSBtn">iOS</a>
					<span></span>
				</div>
				<div class="ui-block-b">
					<a href="#popupAndriod" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow " data-transition="fade" id="AndriodBtn">Andriod</a>
					<span></span>
				</div>
			</div>
      	</div>
		<div data-role="popup" id="popupiOS" class="photopopup" data-overlay-theme="b" data-corners="false" data-tolerance="30,15">
			<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete 		ui-btn-icon-notext ui-btn-right" >Close</a><div data-role="header" data-theme="b"><h2>iOS</h2></div>
			<?php echo '<img src="../custom_apps/qrcode/ios/'.$appId.'.png" alt="iOS">' ?>
		</div>
		<div data-role="popup" id="popupAndriod" class="photopopup" data-overlay-theme="b" data-corners="false" data-tolerance="30,15">
			<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><div data-role="header" data-theme="b"><h2>Andriod</h2></div>
			<?php echo '<img src="../custom_apps/qrcode/android/'.$appId.'.png" alt="Andriod">' ?>
		</div>
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
	
    </div>
  </div> 
</body>
</html>
