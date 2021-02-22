  <div data-role="page" id="Maps-App-Push-Single">
	<div data-role="header" data-position="fixed" data-theme="b">
		<h2>發送訊息</h2>
			<a href="<?php echo $this->config->item('maps_data') ?>" class="ui-btn-left" data-transition="slide" data-icon="back" data-direction="reverse" data-corners="true">回上一頁</a>
		<?php
			//echo"<a href='Maps_App_Data.php?id=".$devicename."&token=".$apptoken."&uuidtype=".$uuidtype."' class='ui-btn-left' data-transition='slide' data-icon='back' data-direction='reverse' data-corners='true'>回上一頁</a>";
			#echo"<a href='Maps_App_Data.php?data=".$encodeData."' class='ui-btn-left' data-transition='slide' data-icon='back' data-direction='reverse' data-corners='true'>回上一頁</a>";
		?>
		<div data-role="navbar" >
			<ul>
				<li><a href="<?php echo $this->config->item('maps_pushAll') ?>" data-transition="none" data-theme="a">全體推播</a></li>
				<li><a href="<?php echo $this->config->item('maps_pushFans') ?>" data-transition="none" data-theme="a">關注度推播</a></li>
				<li><a href="" class="ui-btn-active ui-state-persist" data-transition="none" data-theme="a">個別推播</a></li>
			<?php
				/*
				echo"<li><a href='Maps_App_Push_All.php?data=".$encodeData."' data-transition='none' data-theme='a'>全體推播</a></li>";
				echo"<li><a href='Maps_App_Push_Fans.php?data=".$encodeData."' data-transition='none' data-theme='a'>關注度推播</a></li>";
				echo"<li><a href='' class='ui-btn-active ui-state-persist' data-transition='none' data-theme='a'>個別推播</a></li>";
				*/
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
						#include("src/webService/getDeviceInfo.php");
					?>
					</tbody>
				</table>
			</div>
			<!--<div class="ui-field-contain">-->
			<div class="push-contain">
				<label for="PushSingleMessage">推播內容</label>
				<input type="text" name="PushSingleMessage" id="PushSingleMessage" data-clear-btn="true" placeholder="請輸入內容.." required>
				<div id="CheckMessage"></div>				
				<label for="PushSingleLink">推播連結</label>
				<input type="text" name="PushSingleLink" id="PushSingleLink" data-clear-btn="true" placeholder="http://..">
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
