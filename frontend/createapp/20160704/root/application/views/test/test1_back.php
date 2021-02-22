<div class = "container">
	<div class="page-header">
        <h1>Create Your App</h1>
        <p class="lead">Step 3. Update your Advert!</p>
    </div>
	<div class="row" id="main">
		<div class="col-md-6" id="update_area">
			<h3>請上傳您的廣告圖</h3>
			<p>可上傳多張照片，如果沒有可以直接進行下一頁</p>
			<div>
				<!--<input id="input-ficons-1" name="inputficons1[]" multiple type="file" class="file-loading">-->
				<input id="input-dim-1" name="inputdim1[]" type="file" multiple class="file-loading" accept="image/*">
			</div>
		</div>
		<div class="col-md-6" id="i6_ad_preview">
			<h3>Ad preview</h3>
			<div id="i6_ad_area">
				<img src="../static/images/createapp/i6_ad_area.png">
			</div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
					</div>
					<div class="item">
						<img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
					</div>
					<div class="item">
						<img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!-- /.carousel -->
		</div>
	</div>
	<hr>
	<div class="page-footer">
        <!--<p><a class="btn btn-lg btn-success" href="#" role="button">Next Page</a></p>
		<p><input type="button" class="btn btn-success" id="templatecheck" name="templatecheck" value="Next page"></p>-->
		<p><button type="submit" class = "btn btn-success" >Next page</button></p>
    </div>
</div>