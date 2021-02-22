<?php
	//session_start();
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
  <div data-role="page" id="Maps-App-Push-Single">
	<div data-role="header" data-position="fixed" data-theme="b">
		<h2>發送訊息</h2>
		<?php
			//echo"<a href='Maps_App_Data.php?id=".$devicename."&token=".$apptoken."&uuidtype=".$uuidtype."' class='ui-btn-left' data-transition='slide' data-icon='back' data-direction='reverse' data-corners='true'>回上一頁</a>";
			echo"<a href='Maps_App_Data.php?data=".$encodeData."' class='ui-btn-left' data-transition='slide' data-icon='back' data-direction='reverse' data-corners='true'>回上一頁</a>";
		?>
		<div data-role="navbar" >
			<ul>
			<?php
				//echo"<li><a href='Maps_App_Push_All.php?id=".$devicename."&token=".$apptoken."&uuidtype=".$uuidtype."' data-transition='none' data-theme='a'>全體推波</a></li>";
				//echo"<li><a href='Maps_App_Push_Fans.php?id=".$devicename."&token=".$apptoken."&uuidtype=".$uuidtype."' data-transition='none' data-theme='a'>關注度推波</a></li>";
				echo"<li><a href='Maps_App_Push_All.php?data=".$encodeData."' data-transition='none' data-theme='a'>全體推波</a></li>";
				echo"<li><a href='Maps_App_Push_Fans.php?data=".$encodeData."' data-transition='none' data-theme='a'>關注度推波</a></li>";
				echo"<li><a href='#' class='ui-btn-active ui-state-persist' data-transition='none' data-theme='a'>個別推波</a></li>";
			?>
			</ul>
		</div>
	</div>
	<div data-role="main" class="ui-content">
		<!--jQuery Mobile要注意在form submit這部分如果不使用ajax傳遞的話的話要記得關掉不然會無法傳送值 -->
		<form method="POST" action="" id="Push_Single" name="Push_Single" data-ajax="true" >
			<input id="Data-Search" data-type="search" class="search-bar" placeholder="請輸入搜尋內容..">
			<div class="single-data">
				<table data-role="table" data-mode="columntoggle" data-column-btn-text="顯示設定" class="ui-responsive ui-shadow" id="Data-Table" data-filter="true" data-input="#Data-Search">
				<!--data-mode="columntoggle"  data-column-btn-text="顯示設定"-->
					<thead>
						<tr>
							<th data-priority="1"><div class="topic">No</div></th>
							<th data-priority="1"><div class="topic">OS</div></th>
							<th data-priority="1"><div class="topic">Uuid</div></th>
							<th>
								<select name="PushAll" id="PushAll" data-role="slider">
									<option value="off" selected="selected" >Single</option>
									<option value="on">All</option>
								</select>
							</th>
						</tr>
					</thead>
					<tbody>
					<?php
						include("src/webService/getDeviceInfo.php");
					?>
					</tbody>
				</table>
			</div>
			<!--<div class="ui-field-contain">-->
			<div class="push-contain">
				<label for="PushMessage">推播內容</label>
				<input type="text" name="PushMessage" id="PushMessage" data-clear-btn="true" placeholder="請輸入內容.." required>       
				<label for="PushLink">推播連結</label>
				<input type="url" name="PushLink" id="PushLink" data-clear-btn="true" placeholder="http://.." required>
			</div>
			<div class="push-submit">
			    <input type="hidden"  id="deveiceName" value="<?php echo $appId; ?>">
			    <input type="hidden"  id="appToken" value="<?php echo $appToken; ?>">
				<input type="hidden"  id="user" value="<?php echo $user; ?>">
				<input type="hidden"  id="password" value="<?php echo $encodePassword; ?>">
				<!--<input type="submit" name="submit" id="submit" value="發送">-->
				<button type="submit" name="submit" id="submit" class="ui-btn ui-corner-all ui-shadow">發送</button>
				
			</div>
		</form>
	</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
    </div>
  </div>
</body>
</html>