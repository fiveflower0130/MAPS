	<div class="container" id = "container" >
		<fieldset>
		<form class="form-signin col-lg" id="loginForm" action="./" method = "post">
			<h2 class="form-signin-heading">MAPs後台管理系統</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="email address" value="<?php if(isset($_COOKIE["remUser"])&&!empty($_COOKIE["remUser"])){echo $_COOKIE["remUser"];} ?>" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="password" value="<?php if(isset($_COOKIE["remPass"])&&!empty($_COOKIE["remPass"])){$decodePassword = dataDecode($_COOKIE["remPass"]);
				echo $decodePassword;} ?>" required>
			<div class="checkbox">
				<label>
					<input type="checkbox" id="rememberMe" value="true" checked> 記住我
				</label>
				<h5>
					<a href="<?php echo $this->config->item('index') ?>">
						<span class="" aria-hidden="true"></span>
						還沒有自己的App嗎 快來創一個吧!
					</a>
				</h5>
			</div>
			<input type="submit" class="btn btn-lg btn-primary btn-block" value="登入" id="btn1"/>
			<input type="button" class="btn btn-lg btn-primary btn-block" value="無法登入嗎?" id="btn2"  onclick="location.href='<?php echo $this->config->item('help') ?>'"/>
			<div class = "underLine"></div>
			<h5><span class=""></span>首次使用MAPs後台?</h5>
			<!--<input type="button" class="btn btn-lg btn-primary btn-block" value="創建免費帳號" id="btn3" onclick="location.href='create.php'">-->
			<input type="button" class="btn btn-lg btn-primary btn-block" value="創建免費帳號" id="btn3" onclick="location.href='<?php echo $this->config->item('create') ?>'">
		</form>
		</fieldset>
    </div>   

