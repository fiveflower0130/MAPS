  <div data-role="page" id="Maps-App-Data">
	<div data-role="header" data-position="fixed" data-theme="b">
		<h2>
			<?php #echo $appName;?>
		</h2>
		<a href="<?php echo $this->config->item('maps_app') ?>" data-role="button" data-icon="back" class="ui-btn-left" data-corners="true"  data-transition="slide" data-direction="reverse">回上一頁</a>
		<a href="<?php echo $this->config->item('maps_pushAll') ?>" class="ui-btn-right"  data-transition="slide" data-icon="mail" data-iconpos="right">發送訊息</a>
		<?php
			#echo"<a href='Maps_App_Push_All.php?data=".$encodeData."' class='ui-btn-right'  data-transition='slide' data-icon='mail' data-iconpos='right'>發送訊息</a>";
			//echo"<a href='Maps_App_Push_All.php?id=".$devicename."&token=".$apptoken."&uuidtype=".$uuidtype."' class='ui-btn-right'  data-transition='slide' data-icon='mail' data-iconpos='right'>發送訊息</a>";
		?>
	</div>
	<div data-role="main" class="ui-content" >
		<h3 class="ui-bar ui-bar-a ui-corner-all">會員人數:<?php #echo $countAll;?></h3>
      	<div class="ui-body ui-body-a ui-corner-all" id="App_Data_Content">
      		<!--<div id="OS_people">-->
				<h4>會員裝置所使用的OS人數比</h4>
				<input type="hidden"  id="iosCount" value="1<?php #echo $countIOS; ?>"/>
				<input type="hidden"  id="androidCount" value="3<?php #echo $countAndroid; ?>"/>
				<div id="chart2" ></div>
			<!--</div>-->
      	</div>
		
		<h3 class="ui-bar ui-bar-a ui-corner-all"><?php #echo $appName ;?> QR Code</h3>
      	<div class="ui-body ui-body-a ui-corner-all" id="App_Data_QRCode">
        	<div class="ui-grid-a">
				<div class="ui-block">
					<a href="#popupQRCode" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow " data-transition="fade" id="BothBtn">QR Code</a>
					<span></span>
					
				</div>
			</div>
      	</div>
		<div data-role="popup" id="popupQRCode" class="photopopup" data-overlay-theme="b" data-corners="false" data-tolerance="30,15">
			<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
			<div data-role="header" data-theme="b"><h2>QR Code</h2></div>
			<input type="text" name="user" id="un" value="<?php #echo $text; ?>" data-theme="a">
			<img src="../static/images/backend/mapsQRCode.jpg" alt="BothQRCode">
			<?php #echo '<img src="../custom_apps/qrcode/'.$appId.'.png" alt="BothQRCode">' ?>
		</div>
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
	
    </div>
  </div>