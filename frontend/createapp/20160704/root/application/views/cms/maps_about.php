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
    					<p>帳號： <?php #echo $getUserEmail; ?></p>
    					<p>登記手機：<?php #echo $getUserPhone; ?></p>
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
    	<!--<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
    		<form method="POST" action="" id="AboutPush" name="AboutPush" data-ajax="true" >
        		<div style="padding:10px 5px;">
            		<label for="textarea-enhanced" class="ui-hidden-accessible">Message:</label>
            		<textarea  cols="30" rows="10" name="textarea-enhanced" id="textarea-enhanced" data-enhanced="true" class="ui-input-text ui-shadow-inset ui-body-inherit ui-corner-all" placeholder="請輸入您的意見.." required></textarea>
            		<input type="hidden"  id="user" value="<?php echo $user; ?>"/>
            		<button type="submit" id="sendAbout" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-mail">確認送出</button>
        		</div>
    		</form>
		</div>
		-->
		<!--LineQRCode popup-->
		<div data-role="popup" id="popupLine" class="photopopup" data-overlay-theme="b" data-corners="false" data-tolerance="30,15">
			<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><div data-role="header" data-theme="b"><h2>Line QRCode</h2></div>
			<img src="../static/images/backend/mapsQRCode.jpg" alt="LineQRCode">
		</div>
    </div>
	<!--footer-->
    <div data-role="footer" data-position="fixed"  data-theme="b">
		<div data-role="navbar">
			<ul>
				<li><a href="<?php echo $this->config->item('maps_app') ?>" data-icon="grid">App</a></li>
				<li><a href="#" data-icon="info">ABOUT</a></li>
			</ul>
	  </div>
    </div>
  </div>