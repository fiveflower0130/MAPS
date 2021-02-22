	<div class="container" id = "container" >
		<fieldset id="help-fieldset">
		<form class="form-signin col-lg" id="helpForm" action="./" method = "post">
			<h2 class="form-signin-heading">Help Site</h2>
			<!--<div id="error_msg" class="error_msg"></div>-->
			<label>請輸入您的Email</label>
			<label for="inputEmail" class="sr-only">請輸入您的Email</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="email address" required autofocus>
			<label>請輸入您的手機號碼</label>
			<label for="inputTel" class="sr-only">請輸入您的手機號碼</label>
			<input type="tel" id="inputTel" name="inputTel" class="form-control" placeholder="telephone" required>
			<!--<button class="btn btn-lg btn-primary btn-block" type="submit" id = "btn">Sign in</button>-->
			<div class = "underLine"></div>
			<h5>系統會將密碼送到您的信箱</h5>
			<div class="help-button">
				<input type="submit" class="btn btn-lg btn-primary btn-block" value="確認" id="sendPassword"/>
				<input type="button" class="btn btn-lg btn-primary btn-block" value="返回" id="btn2" onclick="location.href='signin.php'"/>
			</div>
		</form>
		</fieldset>
    </div> 
