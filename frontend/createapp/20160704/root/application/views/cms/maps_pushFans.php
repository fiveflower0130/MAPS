  <div data-role="page" id="Maps-App-Push-Fans">
	<div data-role="header" data-position="fixed" data-theme="b">
		<h2>發送訊息</h2>
		<a href="<?php echo $this->config->item('maps_data') ?>" class="ui-btn-left" data-transition="slide" data-icon="back" data-direction="reverse" data-corners="true">回上一頁</a>
		<?php
			//echo"<a href='Maps_App_Data.php?id=".$devicename."&token=".$apptoken."&uuidtype=".$uuidtype."' class='ui-btn-left' data-transition='slide' data-icon='back' data-direction='reverse' data-corners='true'>回上一頁</a>";
			#echo"<a href='Maps_App_Data.php?data=".$encodeData."' class='ui-btn-left' data-transition='slide' data-icon='back' data-direction='reverse' data-corners='true'>回上一頁</a>";
		?>
		<div data-role="navbar">
			<ul>
				<li><a href="/cms/maps_pushAll" data-transition="none" data-theme="a">全體推播</a></li>
				<li><a href="" class="ui-btn-active ui-state-persist" data-transition="none" data-theme="a">關注度推播</a></li>
				<li><a href="<?php echo $this->config->item('maps_pushSingle') ?>" data-transition="none" data-theme="a">個別推播</a></li>
			<?php
				/*
				echo"<li><a href='Maps_App_Push_All.php?data=".$encodeData."' data-transition='none' data-theme='a'>全體推播</a></li>";
				echo"<li><a href='' class='ui-btn-active ui-state-persist' data-theme='a'>關注度推播</a></li>";
				if($uuidType != "NONE"){
					echo"<li><a href='Maps_App_Push_Single.php?data=".$encodeData."' data-transition='none' data-theme='a'>個別推播</a></li>";
				}
				*/
			?>
			</ul>
		</div>
	</div>
	<div data-role="main" class="ui-content">
		<form method="post" action="" id="Push_Fans" name="Push_Fans" data-ajax="true">
			<div class="push-slider">
				<label for="push-points">關注度選擇:</label>
				<input type="range" name="push-points" id="push-points" value="50" min="0" max="100" data-show-value="true" data-highlight="true">
			</div>
			<!--<div class="ui-field-contain">-->
			<div class="push-contain">
				<label for="PushFansMessage">推播內容</label>
				<input type="text" name="PushFansMessage" id="PushFansMessage" data-clear-btn="true" placeholder="請輸入內容.." required>
				<div id="CheckMessage"></div>
				<label for="PushFansLink">推播連結</label>
				<input type="text" name="PushFansLink" id="PushFansLink" data-clear-btn="true" placeholder="http://..">
				<label for="PushEndTime">設定訊息結束時間</label>
				<input type="text" class="date-input-inline" name="PushEndTime" id="PushEndTime" data-inline="true" data-role="date" data-clear-btn="true" required>
				<div id="CheckTime"></div>
			</div>
			<div class="push-submit">
				<input type="hidden"  id="deveiceName" value="<?php #echo $appId; ?>">
			    <input type="hidden"  id="appToken" value="<?php #echo $appToken; ?>">
				<input type="hidden"  id="user" value="<?php #echo $user; ?>">
				<input type="hidden"  id="password" value="<?php #echo $encodePassword; ?>">
				<!--<input type="submit" name="submit" id="submit" value="發送">-->
				<button type="submit" name="submit" id="submit" class="ui-btn ui-corner-all ui-shadow">發送</button>
			</div>
		</form>
	</div>
	<div data-role="footer" data-position="fixed" data-theme="b">
    </div>
  </div>
