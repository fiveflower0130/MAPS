<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
     <meta name="apple-mobile-web-app-capable" content="yes"/>
     <meta http-equiv="cache-control" content="no-store"/>
     <meta http-equiv="expires" content="0"/>
     <meta http-equiv="pragma" content="no-cache"/>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MAPS</title>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../css/bootstrap-switch.css" rel="stylesheet">
    <link href="../../../css/frontend/agency.css" rel="stylesheet">
    <link href="../../../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<script src="../../../js/frontend/heartcode-canvasloader-min-0.9.1.js"></script>
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				 <a class="navbar-brand page-scroll" href="#page-top">MAPS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Example</a>
                    </li>
					<!--
					<li>
                        <a class="page-scroll" href="#freeonstore">On-shelf</a>
                    </li>
					-->
                    <li>
                        <a class="page-scroll" href="#contact">Create MAPs</a>
                    </li>
					<li>
                        <a class="portfolio-link" data-toggle="modal" href="#faq">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $this->config->item('backendurl')?>">CMS</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text " id="intro">
                <div class="intro-lead-in">Mobile Apps as Services</div>
				<div class="intro-heading">讓你與顧客及粉絲更靠近</div>
				<!--
                <div class="intro-heading">
					<a href ="#freeonstore" class="page-scroll" id="freeapplink">免費上架 iOS 和 Android App</a>
				</div>
				-->
				<a href="#contact" class="page-scroll btn btn-xl " id="createapp">Free Create an App</a>
                <!--<div class="intro-heading">Nice To Meet You</div>-->
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MAPS創造你與客戶溝通的最佳體驗</h2>
                    <h3 class="section-subheading text-muted">沒有網站?&nbsp;&nbsp;&nbsp;&nbsp;不會寫程式?&nbsp;&nbsp;&nbsp;&nbsp;想經營自己的粉絲群?&nbsp;&nbsp;&nbsp;&nbsp;這些MAPs能幫你做到</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
				    <p>&nbsp;</p>
                    <img src="/images/portfolio/push.jpg" class="img-responsive img-centered img" alt="" width="300px" height="300px">
                    <h4 class="service-heading">店鋪打折想送訊息給粉絲怎麼辦?</h4>
                    <p class="text-muted">群發訊息，推廣宣傳輕鬆寫意<br><br></p>
                    <a href="<?php echo $this->config->item('backendurl')?>" target="_blank" class="page-scroll btn btn-info" id="Click">快速推播訊息</a>
                </div>
                <div class="col-md-4">
				    <p>&nbsp;</p>
                    <img src="/images/portfolio/websites.jpg" class="img-responsive img-centered img" alt="" width="300px" height="300px">
                    <h4 class="service-heading">當你有網站，沒有專屬App怎麼辦?</h4>
                    <p class="text-muted">給我1-2分鐘，我給你一個App<br><br></p>
                    <a href="#contact" class="page-scroll btn btn-info" id="Click">點我製作App</a>
                </div>
                <div class="col-md-4">
				    <p>&nbsp;</p>
                    <img src="/images/portfolio/nowebsite.jpg" class="img-responsive img-centered img" alt="" width="300px" height="300px">
                    <h4 class="service-heading">當你沒有網站時該怎麼辦?</h4>
                    <p class="text-muted">別擔心，我們告訴你一個快速製作網站的方法<br><br></p>
                    <a href="http://www.wix.com/" target="_blank" class="page-scroll btn btn-info" id="Click">Go to WIX</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MAPS三部曲</h2>
                    <h3 class="section-subheading text-muted">不論是企業、店家、甚至是個人，都能藉由您的專屬App與好友粉絲互動，串連您們之間的生活圈</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                               <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/board.png" class="img-responsive" alt="" style='border:1px solid #000000' >
                    </a>
                    <div class="portfolio-caption">
                        <h4>我有一個網站沒有App?<br><br></h4>
                        <p class="text-muted">MAPS教您快速製作</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/qrcode.png" class="img-responsive" alt="" style='border:1px solid #000000' >
                    </a>
                    <div class="portfolio-caption">
                        <h4>製作好網站App該如何使用?<br><br></h4>
                        <p class="text-muted">MAPS教您快速行銷</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/push.png" class="img-responsive" alt="" style='border:1px solid #000000' >
                    </a>
                    <div class="portfolio-caption">
                        <h4>粉絲安裝App後如何互動?<br><br></h4>
                        <p class="text-muted">MAPS教您快速推播</p>
                    </div>
                </div>
                <!--
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>App Icon</h4>
                        <p class="text-muted">您製作的App的圖案</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>App 推播識別格式</h4>
                        <p class="text-muted">您希望用來區別註冊會員的格式</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>App Music</h4>
                        <p class="text-muted">您製作的App的鈴聲</p>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>
	
	<!-- app free on store  -->
	<!--
	<section id="freeonstore" class="freeapponstore">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MAPS幫你免費上架</h2>
                    <h3 class="section-subheading text-muted">想將自己的App上架嗎? MAPS可以幫你免費上架到App store和Google play喔</h3>
                </div>
            </div>
            <div class="row">
				<div class="col-md-6">
					<img src="/images/frontend/free_img01.png" alt="" class="freeicon">
				</div>
				<div class="col-md-6">
					<table class="table table-bordered" id="freetable" >
						<tbody>
							<tr>
								<td id="freeonstoresystem">系統</td>
								<td id="freeiOS">iOS</td>
								<td id="freeAndroid">Android</td>
							</tr>
							<tr>
								<td id="freeonstoretime">上架時間</td>
								<td>7天</td>
								<td>1天</td>
							</tr>
							<tr>
								<td id="freeonstorecost">費用</td>
								<td id="free"><del style="color:black;">$113/每年</del>&nbsp免費</td>
								<td id="free"><del style="color:black;">$25/每年</del>&nbsp免費</td>
							</tr>
						</tbody>
					</table>
					<div id="note">
						<h3 class="section-subheading text-muted">註:上架時間以收到"上架所需資料"後開始算起</h3>
					</div>
				</div>
            </div>
			<div class="row">
				<div class="col-lg-12" id="linkme">
					<a href="mailto:appmaker.service@gmail.com?subject=申請免費上架&body=Hi，我想要申請免費上架，請問需要提供甚麼資料嗎?" class="btn btn-success " id="linkbutton">聯絡我們</a>
				</div>
			</div>
        </div>
    </section>
	-->
	
   <!-- Download -->
   <!--
	<div id="download">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">Download</h2>
					<h3 class="section-subheading text-muted">安裝您專屬的App之前，請先安裝憑證.</h3>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="col-lg-12">
				<img class="img-responsive img-centered img" src="/images/portfolio/qrcode.jpg" alt="" height="Auto">
				</div>
				<div class="col-lg-12 text-center">
				<a class="btn btn-lg btn-info"  href="../server.crt">Certification<br>下載</a>
				</div>
			</div>
		</div>
	</div>
    -->
    <!-- Contact Section -->
    <section id="contact" style="background-color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">現在就開始使用MAPS吧!</h2>
                    <h3 class="section-subheading text-muted">請輸入以下表格內容來製作您專屬的App</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" enctype="multipart/form-data" name="formJoin" id="formJoin" action="index.php/Createapp/create/">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
								<label class="inputTitle">App Name</label>
								<input type="text" name="App_Name" class="form-control" placeholder="請輸入您的App名稱且不得含特殊字元或超過50個字元 *" id="App_Name">
                                <p class="help-block text-danger" id="appnamemsg"></p>
                                </div>
                                <div class="form-group" style="display:none">
									<label  class="inputTitle" for="App_SyncURL">App SyncURL</label>
									<input type="text" class="form-control" value="http://123.123.com" placeholder="eg. xxx@example.com" id="App_SyncURL" name="App_SyncURL" >
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
									<label  class="inputTitle" for="index_URL">App 起始頁面</label>
									<input type="text" class="form-control" placeholder="開頭請以「http://」或「https://」填寫且不得超過255個字元 " id="index_URL" name="index_URL" onblur="checkurl()">
                                    <p class="help-block text-danger" id="indexurlmsg"></p>
                                </div>
								<div class="form-group">
									<label class="inputTitle" for="iconUpload">App Icon</label>
									<input type="file" class="form-control" id="iconUpload" name="iconUpload" size="30">
									<label class="form_small">(請上傳jpg or png圖檔，檔案請勿超過4M)</label>
                                    <p class="help-block text-danger" id="iconuploadmsg"></p>
                                </div>
								<div class="form-group">
									<input name="customPush" id="customPush" type="checkbox" data-label-text="自訂推撥功能" data-label-width="120px" data-size="large" data-off-color="danger" class = "form-control" >
                                </div>
								<div id="shipping">
									<div class="form-group">
										<label for="Uuid_Type" class="inputTitle">App 推播識別格式</label>
										<input type="text" class="form-control" placeholder="Uuid Type * EX:id, birthday，不得超過20個字元且不得含特殊字元" id="Uuid_Type" name="Uuid_Type">
										<p class="help-block text-danger" id="inputtitlemsg"></p>
									</div>
									<p class="help-block text-danger" id="voiceinputtitle"></p>
									<div class="form-group" id="voicediv">
									    <label for="voiceUpload" class="inputTitle" >App 推播自訂音樂</label>
										<input type="file" class="form-control" placeholder="App Voice *" id="voiceUpload" name="voiceUpload">
										<label class="form_small">(上傳檔案為mp3檔請勿大於4M,長度最長為30秒)</label>
										<p class="help-block text-danger" id="voiceuploadmsg"></p>
									</div>
								</div>
                            </div>
                            <div class="col-md-6">
								<div class="form-group">
									<label for="preview-area" class="inputTitle">Icon Preview</label>
									<fieldset class ="form-control">
										<div class="previewArea" id="preview-area">
											<img src="/images/frontend/ios_2.jpg" alt="qr" class="ios_img" id="ios_img">
											<img class = "ios_icon" id="image" src="/images/frontend/App-Icon-copy.jpg" >
											<label class="icon_name" id="icon_name" for="changename">Your App Name</label>
										</div>
									</fieldset>
								</div>
								<div class="form-group">
									<div id="shippingvoice">
										<label for="voice-area" class="inputTitle">Voice Preview</label>
										<fieldset class ="form-control">
											<div class="voiceArea" id="voice-area">
												<label class="voice_name" id="voice_name" for="changeaudioname">Your Voice Name</label>
												<div id ="audio">
                                                    <audio id="sound" controls></audio>
													<!--<div id="audio-preview"></div>-->
												</div>
											</div>
										</fieldset>
									</div>
								</div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
									<!--<img id="anigif" src="/images/frontend/loading3.GIF">-->
									 <div id="canvasloader-container" class="wrapper"></div>

								<input type="hidden" name="action" id="action" value="join">
								<input type="hidden" name="validateFlag" id="CheckUrlFlag" value="false">
								<input type="button" class="btn btn-success" id="formSubmit" name="formSubmit" value="Create App">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
	
	<div id="download" style="background-color:ghostwhite;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">CMS-MAPS後台管理系統</h2>
				</div>
			</div>
			<br>
			<br>
			<div class="row">
				<div class="col-lg-12">
				<img class="img-responsive img-centered img" src="/images/portfolio/qrcode.jpg" alt="" height="20">
				</div>
			</div>
		</div>
	</div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="mailto:appmaker.service@gmail.com" ><img src="/images/frontend/mail.jpg" alt="" height="50"></a>&nbsp; &nbsp; 
					<a href="https://www.facebook.com/appmaker.service/" target="_blank"><img src="/images/frontend/fb.jpg" alt="" height="50"></a>&nbsp; &nbsp; 
					<a href="javascript:openWin('/images/frontend/lineqrcode.jpg')"><img src="/images/frontend/line.jpg" alt="" height="50"></a>
					
                    <br>
                    <span class="copyright">Copyright 2015 - 2016 </span><a class="test" data-toggle="modal" href="#disclaimer">法律及免責相關聲明</a>
                </div>

				<!--
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
				
                <div class="col-lg-12">
                    <ul class="list-inline quicklinks">
                        <li><span class="copyright">Copyright 2016 </span>
                        </li>
                        <li><a href="#"><a class="test" data-toggle="modal" href="#disclaimer">免責聲明</a>
                        </li>
                    </ul>
                </div>
				-->
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <h2>我有一個網站沒有App?</h2>
            <img class="img-responsive img-centered" src="/images/frontend/work-2_1.jpg" alt="" >
            <div class="container">
                <div class="row">
                   <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                       </span>
                       <h4 class="service-heading">製作簡單 輕鬆上手</h4>
                       <p class="text-muted">在MAPS填入一些基本資料便可以開始製作<br><br></p>
                   </div>
                   <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                       </span>
                       <h4 class="service-heading">省時快速又方便</h4>
                       <p class="text-muted">1-2分鐘立刻產生App QRcode供您掃描安裝<br><br></p>
                   </div>
                   <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-dollar fa-stack-1x fa-inverse"></i>
                       </span>
                       <h4 class="service-heading">免費使用</h4>
                       <p class="text-muted">MAPS服務通通免費，讓您不用再花錢</p>
                   </div>
                </div>
                <!--<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal" href="#portfolioModal2" data-toggle="modal">想知道接下來如何行銷嗎??</button>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <h2>製作好網站App後，該如何行銷?</h2>
            <img class="img-responsive img-centered" src="/images/frontend/work-3_1.jpg" alt="" >
            <div class="container">
                <div class="row">
                   <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-file-image-o fa-stack-1x fa-inverse"></i>
                       </span>
                       <h4 class="service-heading">行動、即時、快速</h4>
                       <p class="text-muted">QR Code，方便手機即時安裝快速App<br><br></p>
                   </div>
                   <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-usd  fa-stack-1x fa-inverse"></i>
                       </span>
                       <h4 class="service-heading">提供折扣優惠</h4>
                       <p class="text-muted">宣傳DM上置放QR碼，掃描後就享有網站折扣優惠<br><br></p>
                   </div>
                   <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-life-ring fa-stack-1x fa-inverse"></i>
                       </span>
                       <h4 class="service-heading">行動應用豐富多元</h4>
                       <p class="text-muted">印製在海報上，衣服、網站或各類商品，應用豐富多元</p>
                   </div>
                </div>
                <!--<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal" href="#portfolioModal3" data-toggle="modal">想知道接下來如何和粉絲們互動嗎??</button>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <h2>粉絲安裝我的App後，該如何互動?</h2>
            <img class="img-responsive img-centered" src="/images/frontend/work-6_1.jpg" alt="" >
            <div class="container">
                <div class="row">
                   <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                       </span>
                       <h4 class="service-heading">群發訊息</h4>
                       <p class="text-muted">方便操作、極高閱讀率，讓您宣傳效益，更勝以往<br><br></p>
                   </div>
                   <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                       </span>
                       <h4 class="service-heading">舉辦促銷活動</h4>
                       <p class="text-muted">結合實體店鋪的各種活動，群發訊息吸引消費者<br><br></p>
                   </div>
                   <div class="col-md-4">
                       <span class="fa-stack fa-4x">
                           <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <i class="fa fa-gift fa-stack-1x fa-inverse"></i>
                       </span>
                       <h4 class="service-heading">創造動機 提供獎勵</h4>
                       <p class="text-muted">開發潛在客戶、提供優惠券、強化社群互動</p>
                   </div>
                </div>
                <!--<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>-->
                <button type="button" class="btn btn-primary" data-dismiss="modal" >立即來試用看看吧</button>
            </div>
        </div>
    </div>
	
    <!-- Portfolio Modal 4 -->
	
    <div class="portfolio-modal modal fade" id="faq" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
							<h2>FAQ<br><br></h2>
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
										<!--
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											Collapsible Group Item #1
											</a>
										-->
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<i class="fa fa-question-circle"></i>
												Android App下載信任問題
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
										<i class="fa fa-check-circle"></i>
											無論你下載 APK 檔案的來源網站為何，下載之前一定會出現「這種類型的檔案可能會損害你的裝置」這個提示訊息，MAPS網站所提供的檔案是安全可以信任的，請按一下 「確定」，否則無法下載。<br><br>
											<img class="img-responsive img-centered" src="/images/frontend/faq2_1.png" alt="">
											<br><br>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<i class="fa fa-question-circle"></i>
											    為何點擊打開已安裝完畢的APP會跳出"尚未信任企業級開發人員"的訊息
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
										<i class="fa fa-check-circle"></i>
											<strong>iOS 9：</strong>
											<br>
											當您第一次開啟MAPS產生的 app 時，會看到通知，說明該 app 的開發者不受裝置信任。您可以關閉此訊息，但無法開啟該 app。
											<br><br>
											<img class="img-responsive img-centered" src="/images/frontend/faq1_1.png" alt="">
											<br><br>
											關閉此訊息之後，您可以為這個 app 開發者建立信任。<font id="red">點一下「設定」>「一般」>「描述檔」或「描述檔與裝置管理」</font>。然後您會在「企業 App」標題底下看到該開發者的描述檔。
											<br><br>
											<img class="img-responsive img-centered" src="/images/frontend/faq1_2.png" alt="">
											<br><br>
											<img class="img-responsive img-centered" src="/images/frontend/faq1_3.png" alt="">
											<br><br>
											點一下該描述檔，為此開發者建立信任。
											<br><br>
											<img class="img-responsive img-centered" src="/images/frontend/faq1_4.png" alt="">
											<br><br>
											<img class="img-responsive img-centered" src="/images/frontend/faq1_5.png" alt="">
											<br><br>
											然後系統會提示您確認所做的選擇。信任此描述檔之後，即可手動安裝來自相同開發者的其他 app，並可立即開啟。在建立信任時，需要 Internet 連線來驗證 app 開發者的憑證。如果您在防火牆之後，請確認防火牆設為允許連線至 https://ppq.apple.com。如果在信任 app 時並未連線至 Internet，則裝置會顯示「尚未驗證」。若要使用該 app，您必須連線至 Internet，並點一下「驗證 App」按鈕。
											<br><br>
											<strong>iOS 8：</strong>
											<br>
											當您第一次開啟MAPS產生的 app 時，會看到通知，說明該 app 的開發者不受裝置信任。<font id="red">點選「信任」即可進入app</font>。
											<img class="img-responsive img-centered" src="/images/frontend/faq1_6.png" alt="">
											<br><br>
										</div>
									</div>
								</div>
								<!--
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Collapsible Group Item #3
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											<img class="img-responsive img-centered" src="/images/frontend/work-4_1.jpg" alt="">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								-->
							</div>
							
                            <button type="button" class="btn btn-primary" id="closeButton" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>法律與免責相關聲明</h2>
								<div class="disclaimer-group">
									<h3>1.	法律聲明</h3>
									<p>當閣下進入本網址及瀏覽各網頁時，即表示閣下同意遵守下述條款。在閣下使用本網站或/及APP前，請認真閱讀以下法律聲明。如不接受本聲明，請立即停止使用本網站或/及APP，否則將視為全部接受本聲明。
									</p><br>
									<h3>2.	著作權聲明</h3>
									<p> 	雲應資訊股份有限公司（以下簡稱「本公司」）相關網站或/及APP上刊載之所有內容，除著作權法規定不得為著作權之標的（請參考著作權法第9條規定）外，網站或/及APP的組成部分，包括但不限於內容、視覺介面、互動式特徵、資訊、圖片、設計、彙編、電腦代碼、產品、軟體、歌詞、旋律、錄音、服務及其他組成我們網站或/及APP的元素，均受著作權法保護。<br><br>本網站或/及APP資訊內容受著作權法保護者，除著作權法規範之"合理範圍內"，皆應取得該著作財產權人同意或授權後，方得利用。<br><br>報導、評論、教學、研究或其他正當目的，在合理範圍內，得重製、公開播送或公開傳輸，利用時，得引用本公司網站或/及APP上之資訊，引用時，請註明出處。其他"合理範圍內"使用情形，請參考著作權法第四十四條至第六十五條之規定。

									</p><br>
									<h3>3.	免責聲明</h3>
									<p>以本公司名義申請使用之Domain Name (網域名稱)，即 x1apps.com 所架設之網站或/及APP，均適用本免責聲明。<br><br>本網站或/及APP所載的所有資料、商標、標誌、圖像、短片、聲音檔案、連結及其他資料等（以下簡稱「資料」），只供參考之用，本公司將會隨時更改資料，並由本公司決定而不作另行通知。<br><br>本公司當盡力確保本網站或/及APP的資料準確性，但不以任何明示或默示的方式保證所有出現在網頁上、或相關訊息上的資料均為完整、正確、即時的資訊，如有錯漏或疏忽，本公司及所屬人員並不負任何法律責任。<br><br>本公司網站或/及APP基於服務與方便快速找到網路資訊，使用超連結連結至他方網站或/及APP；以此方式所獲得的資訊內容或廣告，均為被連結網站或/及APP所提供，本公司並未加以修改或彙編。因此；本公司不暗示、不聲明亦不保證其內容之正確性與可靠性，使用者應自行判斷與承擔風險。<br><br>任何瀏覽網站或/及APP的人士，須自行承擔一切風險，本公司不會負責任何因瀏覽或使用本公司網站或/及APP而引致之損失（包括但不限於電腦病毒、系統固障、資料損失）作出任何默示的擔保。<br><br>除註明本公司製作之內容外，本公司網站或/及APP可能會連結至其他機構所提供的網頁，但這些網頁並不是由本公司所控制，並不保證閣下本網站或/及APP將不受干擾或完全無錯誤。<br><br>其他任何內容，包括但不限於經由本公司網站或/及APP連結的網頁，本公司一概不承擔賠償因意外(包括感染電腦病毒)、誹謗、侵犯版權或知識產權所造成的損失，包括但不限於利潤、商譽、使用、資料損失或其他無形損失，本公司不承擔任何直接、間接、附帶、特別、衍生性或懲罰性賠償。<br><br>是否使用本網站或/及APP之服務下載或取得任何資料應由用戶自行考慮且自負風險，因前開任何資料之下載而導致用戶電腦系統之任何損壞或資料流失，本公司不承擔任何責任。本公司可隨時停止或變更網頁資料及有關條款而毋須事前通知用戶。

									</p><br>
									<h3>4.	版權</h3>
									<p>本網站或/及APP的所有資料屬本公司及附屬公司及聯營公司專屬財產，均受著作權法及權利（包括但不限於保護版權的法例）所保障。根據此法例及權利，任何未經授權使用的資料均屬侵權行為。在未經本公司明確同意下，本網站或/及APP資料之全部或部份均不可被使用、複印、銷售、傳送、修改、發表、儲存或以其他方式利用作任何用途，包含任何修改或客製化的版本。<br><br>閣下不可以再分配、販售、編譯、反向工程或拆解本網站或/及APP應用程式。本網站或/及APP應用程式，皆不可在未經本公司明確的書面同意下，為再販售、再分配或提供服務的行為。<br><br>每個APP的授權許可，將允許您可同時於多台裝置上使用本APP，閣下不能以任何的原始碼移除版權聲明。

									</p><br>
									<h3>5.	責任限制</h3>
									<p>本公司及附屬公司及聯營公司基於“現狀”和“可用”原則向閣下提供本網站或/及APP，在任何情況下，本公司及附屬公司及聯營公司並不須就閣下或任何人士由於直接或間接進入或使用本網站或/及APP，並就此內容上或任何產品、資訊或服務，而招致的任何損失或損害負上任何責任（不論基於合約、侵權行為（包括疏忽）或其在不限制以上條文的一般性之原則及任何情況下，本公司及附屬公司及聯營公司並不須就閣下進入或使用本網站或/及APP的任何附帶引起、特殊或相應而生之任何種類的損害作出賠償，包括但不限於利潤損失、營業受阻、營業資料損失或其他經濟損失、人身傷害或死亡。
									</p><br>
									<h3>6.	一般性賠償</h3>
									<p>閣下同意，若由於閣下違反本免責聲明及∕或使用本網站或/及APP或服務的關係或原因，令本公司及附屬公司及聯營公司招致或蒙受任何損失、索償、法律責任、損害、要求、費用及支出（包括所有的律師費用），閣下將為本公司及附屬公司及聯營公司抗辯、對本公司及附屬公司及聯營公司作出賠償，及保障本公司及附屬公司及聯營公司不受損害。
									</p><br>
									<h3>7.	管轄法律</h3>
									<p>本條款受台灣法律管轄，並據此解釋，無須援引其衝突法規則。有關本條款的有效性或解釋或履行的任何及所有的爭議應提交給本公司註冊地具有司法管轄權的法院裁決。如果本條款中的任何部分非法、無效或無法執行，則該部分將視為可分割，不會影響其餘條款的有效性和可執行性。
									</p><br>
									<h3>8.	免責聲明更新</h3>
									<p>在給予或不給予事先通知下，本公司保留隨時更新本免責聲明的權利，任何更改於本網站或/及APP發佈時，立即生效。若閣下在修訂的條款上傳網站後，仍繼續使用我們的網頁或/及APP，即視同閣下已同意更新後的條款聲明約束。請閣下在每次瀏覽本網站或/及APP時，務必查看此免責聲明。

									</p><br>
								</div>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>App Music</h2>
                            <p class="item-intro text-muted">訂定您自己的App鈴聲</p>
                            <img class="img-responsive img-centered" src="/images/portfolio/dreams-preview.png" alt="">
                            <p>您可以自行製作或使用您喜案的音樂，當作您專屬APP的提示音效，當APP接收到遠端推撥訊息時，就會以提示音提示使用者，您可以在預覽曲試聽您自己的App鈴聲</p>
                            <ul class="list-inline">
                            	<li>上傳音樂時請注意以下幾點</li>
                                <li>1.上傳的檔案為.mp3檔</li>
                                <li>2.上傳的檔案請勿超過5M，長度最長為30秒</li>
                            </ul>
                            <!--
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            -->
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<!--
document.write("html代码已经全部载入完成");

 //-->
<script src="../../../js/jquery-1.10.2.min.js"></script>
<script src="../../../js/jquery.easing.min.js"></script>
<script src="../../../js/bootstrap.min.js"></script>
<script src="../../../js/bootstrap-switch.js"></script>
<script src="../../../js/classie.js"></script>
<script src="../../../js/cbpAnimatedHeader.js"></script>
<script src="../../../js/jquery.uploadPreview.min.js"></script>
<script src="../../../js/jquery.validate.min.js"></script>
<script src="../../../js/agency.js"></script>
<script src="../../../js/frontend/index.js"></script>