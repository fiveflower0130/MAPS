<?php
	session_start();
	header("Content-Type: text/html; charset=utf-8");
	include("src/dbconnect/connCMS.php");
		
	if(isset($_POST["action"])&&($_POST["action"]=="push"))
	{
		$addPush = $_POST ["addPush"];//push的uuid
		$myallsport = implode (',', $addPush);//uuid超過單比以上的儲存處理
		$pushmessage = $_POST["PushMessage"];//push的訊息
		$pushlink = $_POST["PushLink"];//push的連結
		$portalUrl = 'http://10.63.3.159:8080/axis2/services/ManagerPortal?wsdl';
		
		/*
		echo "<script>";
		echo "alert('".$myallsport."')";
		echo "</script>";
		*/
		//call protol web service
		$client = new SoapClient($portalUrl);						
		$result = $client ->getMapsManager(array("return"));
		
		print_r($result);
				
		$json = json_decode($result->return); //抓取result的json物件內容
		$serviceUrl = $json->{"serviceUrl"};
		$getMapsManager = $json->{"msgCode"};
		
			
					
		if($getMapsManager == 0)
		{
		
			try{
				$opts = array('http'=>array('user_agent' => 'PHPSoapClient'));
				$context = stream_context_create($opts);
				//抓取web service的wsdl
				$client = new SoapClient($serviceUrl,
                             array('stream_context' => $context,
                                   'cache_wsdl' => WSDL_CACHE_NONE));
								   
				//執行push notification並將參數輸入
				$result = $client ->pushNotificationByUuid(array(
					"appToken" => $apptoken,
					"uuidList" => $myallsport, 
					"message" => $pushmessage, 
					"link" => $pushlink
				));
			
				//echo $result;
		    	//print_r($result);
				//print_r($result->return);
				$json = json_decode($result->return); //抓取result的json物件內容
				$data = $json->{"Data"};//抓取抓取物件內訊息名稱Data
				$msgcode = $json->{"msgCode"};//抓取抓取物件內訊息名稱msgcode
				
				echo "<script>";
				echo "alert('".$msgcode."')";
				echo "</script>";
				
				switch($msgcode){
					case 0:
						echo "<script>";
						echo "alert('推播成功')";
						echo "</script>";
					break;
					case 404:
						echo "<script>";
						echo "alert('推播失敗，請確認填入資料是否正確')";
						echo "</script>";
					break;
					case 412:
						echo "<script>";
						echo "alert('推播失敗，系統處理錯誤')";
						echo "</script>";
					break;
					case 500:
						echo "<script>";
						echo "alert('推播失敗，請確認填入資料是否正確')";
						echo "</script>";
					break;
					case 503:
						echo "<script>";
						echo "alert('推播失敗，請確認網路連線是否穩定')";
						echo "</script>";
					break;
				}
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
		}
		else{
			switch($getMapsManager){
				case 500:
					echo "<script>";
					echo "alert('系統錯誤 請重新輸入')";
					echo "</script>";
				break;
				case 503:
					echo "<script>";
					echo "alert('資料庫處理錯誤 請重新輸入')";
					echo "</script>";
				break;
				case 404:
					echo "<script>";
					echo "alert('系統錯誤 請重新輸入')";
					echo "</script>";
				break;
				case 412:
					echo "<script>";
					echo "alert('系統錯誤 請重新輸入')";
					echo "</script>";
				break;
			}
		}
	}
	$sql_query = "SELECT * FROM `".$devicename."`";
	$result = mysql_query($sql_query);
	$total_records = mysql_num_rows($result);
	
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
<title>Maps CMS App</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/><!-- 讓瀏覽器的網址和選單隱藏 -->
	
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
			//echo'<a href="#" data-role="button" data-icon="back" class="ui-btn-left" data-corners="true"  data-transition="slide" data-direction="reverse"  data-rel="back">回上一頁</a>';
			echo"<a href='Maps_App_Data.php?id=".$devicename."&token=".$apptoken."' class='ui-btn-left' data-transition='slide' data-icon='back' data-direction='reverse' data-corners='true'>回上一頁</a>";
		?>
		<div data-role="navbar" >
			<ul>
			<?php
				echo"<li><a href='Maps_App_Push_All.php?id=".$devicename."&token=".$apptoken."' data-transition='none' data-theme='a'>全體推波</a></li>";
				echo"<li><a href='Maps_App_Push_Fans.php?id=".$devicename."&token=".$apptoken."' data-transition='none' data-theme='a'>關注度推波</a></li>";
				echo"<li><a href='#' class='ui-btn-active ui-state-persist' data-theme='a'>個別推波</a></li>";
			?>
			</ul>
		</div>
	</div>
	<div data-role="main" class="ui-content">
		<!--jQuery Mobile要注意在form submit這部分如果不使用ajax傳遞的話的話要記得關掉不然會無法傳送值 -->
		<form method="post" action="" id="formPush" name="formPush" data-ajax="false">
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
							while($row_result=mysql_fetch_assoc($result))
							{
								echo "<tr class=''>";
								echo "<td>".$row_result["Device_No"]."</td>";
								echo "<td>".$row_result["Device_OS"]."</td>";
								echo "<td>".$row_result["Uuid"]."</td>";
								echo "<td><input type='checkbox' name='addPush[]' id='addPush' value ='".$row_result["Uuid"]."' ></td>";
								echo "</tr>";
							}
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
			    <input name="action" type="hidden" value="push">
				<input type="submit" name="submit" id="submit"  value="發送">
			</div>
		</form>
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
      <!--
      <div data-role="navbar">
		<ul>
			<li><a href="Maps_App.php" data-icon="grid">App</a></li>
			<li><a href="Maps_About.php" data-icon="info">ABOUT</a></li>
		</ul>
	  </div>
	-->
    </div>
  </div>
</body>
</html>
