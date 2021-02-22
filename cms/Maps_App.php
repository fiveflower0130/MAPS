<?php
	header("Content-Type: text/html; charset=utf-8"); 
	ini_set("session.cookie_httponly", 1);
	// Session ID cannot be passed through URLs
	ini_set('session.use_only_cookies', 1);
	// Uses a secure connection (HTTPS) if possible
	ini_set('session.cookie_secure', 1);
	
	session_start();	
	include("src/webService/countBindingApp.php");
	include("src/webService/decodeEncode.php");
	
	if(empty($_SESSION['login_user']))
	{
		header('Location: signin.php');
	}
	
	$user= $_SESSION['login_user'];
	$user_password = $_SESSION['login_password'];
	$password = dataDecode($user_password);
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
	<script type="text/javascript" src="/js/plugins/jqplot.donutRenderer.js"></script>
	
	
	<!-- jquery other tool -->
	<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/js/messages_zh_TW.min.js"></script> 	
	<script type="text/javascript" src="/js/backend/config.js"></script>
	
	
	
</head>
<body>  
  <div data-role="page" id="Maps-App">
	<div data-role="header" data-position="fixed" data-theme="b">
		<h2>App資料筆數：<?php echo $count;?></h2>
		<a href="#popuplogout" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-power ui-btn-icon-left ">登出</a>
		<a href="home.php" data-position-to="window" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-right ">新增</a>
	</div>
	<div data-role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">	
		<?php
			foreach($json->appList as $mydata)
    		{
				$location = "../custom_apps/data_source/icon/";
        		$appId = $mydata->appId;
        		$appName = $mydata->appName;
        		$appToken = $mydata->appToken;
        		$uuidType = $mydata->uuidType;
        		$indexUrl = $mydata->indexUrl;
				$fileType = ".jpg";
				$file = $location.$appId."/".$appId.$fileType;
				
				$data = "id=".$appId."&name=".$appName."&token=".$appToken."&uuidtype=".$uuidType."&user=".$user."&password=".$password; 
        		$encodeData = dataEncode($data);
        	
        		echo "<li>";
				echo "<a href='Maps_App_Data.php?data=".$encodeData."' data-transition='slide' >";
				if (file_exists($file)) {
					echo "<img src='".$location.$appId."/".$appId.".jpg'>";
				}
				else{
					echo "<img src='".$location.$appId."/".$appId.".png'>";
				}
				echo "<h1>".$appName."</h1>";
				echo "<p>首頁：".$indexUrl."</p>";
				echo "</a>";
				echo "</li>";
    		}
		?>
		</ul>
		<div data-role="popup" id="popuplogout" data-dismissible="false" data-overlay-theme="b">
			<div data-role="header" data-theme="b">
             <h1>登出</h1>
			</div>
			<div data-role="content">
				<div class="ui-grid-a">
					<p>確定是否要登出?</p> 
					<div class="ui-block-a">
						<a href="#" data-rel="back" data-role="button" data-inline="true" id="DialogBtn1">否</a>
					</div>
					<div class="ui-block-b">
						<a href="logout.php" data-role="button" data-inline="true" id="DialogBtn2">是</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
      <div data-role="navbar">
		<ul>
			<li><a href="#" data-icon="grid">App</a></li>
		<?php
			$userData = "user=".$user."&password=".$password;
			$encodeUser = dataEncode($userData);
			echo '<li><a href="Maps_About.php?data='.$encodeUser .'" data-icon="info">ABOUT</a></li>';
		?>
		</ul>
	  </div>
    </div>
</body>
</html>
