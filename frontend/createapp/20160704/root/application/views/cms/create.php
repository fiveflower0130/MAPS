	<div class="container" id = "container" >
		<fieldset id="create-fieldset">
		<form class="form-signin col-lg" id="createForm" action="" method = "post">
			<h2 class="form-signin-heading">Create Site</h2>
			<!--<div id="error_msg" class="error_msg"></div>-->
			<label>請輸入Email</label>
			<label for="inputEmail" class="sr-only">請輸入Email</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="email address" required autofocus>
			<label>請輸入電話號碼</label>
			<label for="inputTel" class="sr-only">請輸入電話號碼</label>
			<input type="tel" id="inputTel" name="inputTel" class="form-control" placeholder="telephone" required autofocus>
			<label>請輸入密碼</label>
			<label for="inputPassword" class="sr-only">請輸入密碼</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="password" required autofocus>
			<label>請確認您輸入的密碼</label>
			<label for="checkPassword" class="sr-only">請輸入密碼</label>
			<input type="password" id="checkPassword" name="checkPassword" class="form-control" placeholder="password" required autofocus>
			<div id="divCheckPasswordMatch"></div>
			<div class = "underLine"></div>
			<div class="create-button">
				<!--<input type="hidden"  id="appID" name="appID" value="<?php echo $appID ; ?>"/>
				<input type="hidden"  id="appOS" name="appOS" value="<?php echo $appOS ; ?>"/>-->
				<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="確認" id="create"/>
				<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" id="btn2" onclick="history.back()"/>
				<?php
					#if(empty($appID)&&empty($appOS)){
						#echo '<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" id="btn2" onclick="location.href='."'"."signin.php"."'".'"/>';
					#}
					#else{
						#echo '<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" id="btn2" onclick="location.href='."'../custom_apps/app_result_page/".$appID.".php?data=".$encodeData."'".'"/>';
					#}	
				?>
			</div>
		</form>
		</fieldset>
    </div>
