<div class = "container">
	<div class="page-header">
        <h1>Create Your App</h1>
        <p class="lead">Step 4. Choose your app function!</p>
    </div>
	<div class="row" id="main">
		<div class="col-lg-6" id="function_area">
		<h3>請選擇您要的功能</h3>
			<form id="form_area">
				<fieldset class="form-group">
					<label for="inputIndex">首頁(必填)</label>
					<input type="text" class="form-control" id="inputIndex" placeholder="請輸入您首頁的網址">
				</fieldset>
				<fieldset class="form-group">
					<label for="aboutUs">關於我們(必填)</label>
					<div id="fileUpload">
						<p>請上傳"關於我們"的圖片</p>
						<label class="file">
							<input type="file" id="file">
							<span class="file-custom"></span>
						</label>
					</div>
					<textarea class="form-control" id="aboutUs" rows="3"></textarea>
				</fieldset>
				<fieldset class="form-group">
					<label for="contactUs">聯絡我們(必填 至少三選一)</label>
					<input type="email" class="form-control" id="contactUsEmail" placeholder="請輸入您的信箱">
					<input type="phone" class="form-control" id="contactUsPhone" placeholder="請輸入您的手機號碼">
					<input type="text" class="form-control" id="contactAddress" placeholder="請輸入您的聯絡地址">
				</fieldset>
				<fieldset class="form-group">
					<label for="inputFB">FB(可不填)</label>
					<input type="text" class="form-control" id="inputFB" placeholder="請輸入你的FB帳號">
				</fieldset>
				<fieldset class="form-group">
					<label for="InputLine">Line (可不填)</label>
					<input type="text" class="form-control" id="InputLine" placeholder="請輸入你的Line帳號">
				</fieldset>
			    <fieldset class="form-group">
					<label for="InputYoutube">Youtube (可不填)</label>
					<input type="text" class="form-control" id="InputYoutube" placeholder="請輸入你的Line帳號">
				</fieldset>
				<div id="submit_area">
					<button type="submit" class="btn btn-default">確認</button>
				</div>
			</form>
		</div>
		<div class="col-lg-6" id="i6_function_preview">
			<div id="i6_function_area">
				<img src="../static/images/createapp/i6s.png">
			</div>
			<div class="alert alert-info" id="alert" role="alert">			
				請點選上方的欄位或用拖曳的方式來上傳你的廣告圖
			</div>
			<div class="row" id="function_area1">
				<div class="function" id="function1"><img src="../static/images/createapp/icon1.jpg"></div>
				<div class="function" id="function2"><img src="../static/images/createapp/icon1.jpg"></div>
				<div class="function" id="function3"><img src="../static/images/createapp/icon1.jpg"></div>
				<div class="function" id="function4"><img src="../static/images/createapp/icon1.jpg"></div>
			</div>
			<div class="row" id="function_area2">
				<div class="function" id="function5"><img src="../static/images/createapp/icon1.jpg"></div>
				<div class="function" id="function6"><img src="../static/images/createapp/icon1.jpg"></div>
				<div class="function" id="function7"><img src="../static/images/createapp/icon1.jpg"></div>
				<div class="function" id="function8"><img src="../static/images/createapp/icon1.jpg"></div>
			</div>
		</div>
	</div>
	
	<!--
	<hr>
	<div class="page-footer">
        <p><a class="btn btn-lg btn-success" href="#" role="button">Next Page</a></p>
		<p><input type="button" class="btn btn-success" id="templatecheck" name="templatecheck" value="Next page"></p>
		<p><button type="submit" class = "btn btn-success" >Next page</button></p>
    </div>-->
</div>