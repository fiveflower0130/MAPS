	<div class="container" id = "container" >
		<fieldset id="help-fieldset">
		<form class="form-signin col-lg" id="bindingForm"  action="./" method="post">
			<h2 class="form-signin-heading">已有帳號</h2>
			
			<label>請輸入您註冊的Email</label>
			<label for="inputEmail" class="sr-only">請輸入您註冊的Email</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="email address" required autofocus>
			<label>請輸入您註冊的密碼</label>
			<label for="inputPassword" class="sr-only">請輸入您註冊的密碼</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="password" required autofocus>
			<div class = "underLine"></div>
			<div class="binding-button">
				<!--<input type="hidden"  id="appID" name="appID" value="<?php echo $appID ; ?>"/>
				<input type="hidden"  id="appOS" name="appOS" value="<?php echo $appOS ; ?>"/>
				<input type="hidden"  id="data" name="data" value="<?php echo $encodeData ; ?>"/>-->
				<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="確認" id="bind"/>
				<?php
					if(empty($appID)&&empty($appOS)){
						echo '<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" id="btn2" onclick="history.back()"/>';
					}
					else{
						echo '<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" id="btn2" onclick="location.href='."'../custom_apps/app_result_page/".$appID.".php?data=".$encodeData."'".'"/>';
					}
				?>	
			</div>
		</form>
		</fieldset>
    </div>    
