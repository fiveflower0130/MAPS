  <div data-role="page" id="Maps-App">
	<div data-role="header" data-position="fixed" data-theme="b">
		<h2>App資料筆數：<?php #echo $count;?></h2>
		<a href="#popuplogout" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-power ui-btn-icon-left ">登出</a>
		<a href="<?php echo $this->config->item('index') ?>" data-position-to="window" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn-icon-right ">新增</a>
	</div>
	<div data-role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">
			<li>
				<a href="<?php echo $this->config->item('maps_data') ?>" data-transition='slide' >
					<img src="../static/images/backend/test1.png">
					<h1>test1</h1>
					<p>首頁:https://www.test1.com</p>
				</a>
			</li>
		<?php
			/*foreach($json->appList as $mydata)
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
			*/
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
			<li><a href="<?php echo $this->config->item('maps_about') ?>" data-icon="info">ABOUT</a></li>
		<?php
			#$userData = "user=".$user."&password=".$password;
			#$encodeUser = dataEncode($userData);
			#echo '<li><a href="Maps_About.php?data='.$encodeUser .'" data-icon="info">ABOUT</a></li>';
		?>
		</ul>
	  </div>
    </div>
