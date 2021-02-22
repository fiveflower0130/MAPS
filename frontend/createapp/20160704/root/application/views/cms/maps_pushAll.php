   <div data-role="page" id="Maps-App-Push-All">
	<div data-role="header" data-position="fixed" data-theme="b">
		<h2>發送訊息</h2>
		<a href="<?php echo $this->config->item('maps_data') ?>" class="ui-btn-left" data-transition="slide" data-icon="back" data-direction="reverse" data-corners="true">回上一頁</a>
		<?php
			#echo"<a href='Maps_App_Data.php?data=".$encodeData."' class='ui-btn-left' data-transition='slide' data-icon='back' data-direction='reverse' data-corners='true'>回上一頁</a>";
			//echo"<a href='Maps_App_Data.php?id=".$devicename."&token=".$apptoken."&uuidtype=".$uuidtype."' class='ui-btn-left' data-transition='slide' data-icon='back' data-direction='reverse' data-corners='true'>回上一頁</a>";
		?>
		<div data-role="navbar" >
			<ul>
				<li><a href="" class="ui-btn-active ui-state-persist" data-transition="none" data-theme="a">全體推播</a></li>
				<li><a href="<?php echo $this->config->item('maps_pushFans') ?>" data-transition="none" data-theme="a">關注度推播</a></li>
				<li><a href="<?php echo $this->config->item('maps_pushSingle') ?>" data-transition="none" data-theme="a">個別推播</a></li>
			<?php
				#echo"<li><a href='' class='ui-btn-active ui-state-persist' data-transition='none' data-theme='a'>全體推播</a></li>";
				#echo"<li><a href='Maps_App_Push_Fans.php?data=".$encodeData."' data-transition='none' data-theme='a'>關注度推播</a></li>";
				#if($uuidType != "NONE"){
					#echo"<li><a href='Maps_App_Push_Single.php?data=".$encodeData."' data-transition='none' data-theme='a'>個別推播</a></li>";
				#}
			?>
			</ul>
		</div>
	</div>
	<div data-role="main" class="ui-content">
		<form method="post" action="" id="Push_All" name="formPush" data-ajax="true">
			<fieldset id="chooseBar" data-role="controlgroup" data-type="horizontal">
				<input type="radio" name="radio-choice" id="push-both" value="All" checked="checked">
				<label for="push-both">All</label>
				<input type="radio" name="radio-choice" id="push-ios" value="iOS">
				<label for="push-ios">iOS</label>
				<input type="radio" name="radio-choice" id="push-android" value="Android">
				<label for="push-android">Android</label>
			</fieldset>
			
			<div class="push-contain">
				<label for="PushAllMessage">推播內容</label>
				<input type="text" name="PushAllMessage" id="PushAllMessage" data-clear-btn="true" placeholder="請輸入內容.." required>
				<div id="CheckMessage"></div>
				<label for="PushAllLink">推播連結</label>
				<input type="text" name="PushAllLink" id="PushAllLink" data-clear-btn="true" placeholder="http://..">
				<label for="PushEndTime">設定訊息結束時間</label>
				<!--<input type="date" name="PushEndTime" id="PushEndTime" data-clear-btn="true" required>-->
				<input type="text" class="date-input-inline" name="PushEndTime" id="PushEndTime" data-inline="true" data-role="date" data-clear-btn="true" required>
				<div id="CheckTime"></div>
				<!--<label for="PushStartTime">設定訊息開始時間</label>
				<input type="date" name="PushStartTime" id="PushStartTime" data-clear-btn="true">
				<label for="PushEndTime">設定訊息結束時間</label>
				<input type="date" name="PushEndTime" id="PushEndTime" data-clear-btn="true">
				-->
				
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
