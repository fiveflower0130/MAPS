
//顯示Loading bar

$(document).on('pagebeforecreate', '[data-role="page"]', function() {
  loading('hide', 0.1);
});
$(document).on('pageshow', '[data-role="page"]', function() {
  loading('hide', 0.1);
});


function loading(showOrHide, delay) {
  setTimeout(function() {
    $.mobile.loading(showOrHide);
  }, delay);
};


//顯示QRcode出現的JS
$( document ).on( "pagecreate", function() {
    $( ".photopopup" ).on({
        popupbeforeposition: function() {
            var maxHeight = $( window ).height() - 60 + "px";
            $( ".photopopup img" ).css( "max-height", maxHeight );
        }
    });
});

      	
//使用jqplot繪圖資訊
$.jqplot.config.enablePlugins = true;
var plot1;
var opts = {	
		gridPadding: {top:0, bottom:38, left:0, right:0},
    	seriesDefaults:
    	{
    		renderer:jQuery.jqplot.PieRenderer, 
        		trendline:{ show:true }, 
            	rendererOptions: { 
            		padding: 10, 
            		showDataLabels: true,
            		dataLabels: 'value' 
            	}
    	},
    	legend:
    	{
    		show:true, 
        	placement: 'inside', 
        	rendererOptions: 
        	{
        		numberRows: 1
        	}, 
        	location:'n',
        	marginTop: '0px',
        	fontSize: 24
    	}
    
	};
//繪製jqplot圖
$(document).on("pageshow", "#Maps-App-Data", function(e) {
	
	var ios = parseInt($('#iosCount').val());
	var android = parseInt($('#androidCount').val());
	if(ios>0 || android>0){
		var data = [["iOS", ios],["Android", android]];
	}
	else{
		var data = [["無會員資料", 0],["無會員資料", 0]];
	}
	
	
	plot1 = $.jqplot('chart2', [data], opts);
});
$(window).on("orientationchange", function(e){
	plot1.replot();
});

$(document).on("pagehide", "#Maps-App-Data", function(e) {
	plot1.destroy();
});

//ABOUT的ajax
$(document).on("pageinit", "#Maps-About", function (){
		
	$('#AboutPush').submit(function (e){
		var usermail = $('#user').val();
		var inputAbout = $('#textarea-enhanced').val();
		
		$.ajax({
			url: 'src/webService/About_send.php',
			dataType: 'json',
			type:'POST',
			cache: false,
			//data: { email: usermail, About: inputAbout},
			data: "About="+inputAbout+"&email="+usermail,
			beforeSend:function() {
				  //loading('show');
				  $("#sendAbout").prop("disabled",true);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				if((ajaxOptions =="error")&&(xhr.status==0)){
					alert("無網路訊號 請確認是否有連線");	
				}
				else{
					alert("系統錯誤");
				} 
			},
			success: function(data) {
				aboutSuccess = true;
				switch(data.message){
				case "sendSuccess":
					alert("信件已寄出 感謝您的來信");
					//window.location.href  = "Maps_App_Push_Single.php?id="+name+"&token="+token;
				break;
				case "sendFail":
					alert("寄件失敗 請重新傳送");
				break;
				default:
					alert("系統錯誤，請重新輸入");
				}
			},
			complete:function(){
				//loading('hide');
				$("#sendAbout").prop("disabled",false);
			}
		});
	return false;
	});		
});

//push all推播
$(document).on('pageinit', '#Maps-App-Push-All', function () {
	$('#Push_All').submit(function (e){
		
		//var name = $('#deveiceName').val();
		var token = $('#appToken').val();
		var message = $('#PushMessage').val();
		var link = $('#PushLink').val();
		var pushOS = $("input[name='radio-choice']:checked").val();  
		var userEmail = $('#user').val();
		var userPassword = $('#password').val();
		
		$.ajax({
			url: 'src/webService/Push_All_send.php',
			dataType: 'json',
			type:'POST',
			cache: false,
			//data: { email: inputEmail, password: inputPassword},
			data: "pushMessage="+message+"&pushLink="+link+"&appToken="+token+"&pushOS="+pushOS+"&email="+userEmail+"&password="+userPassword,
			beforeSend:function() {
				//loading('show');
				$("#submit").prop("disabled",true);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				if((ajaxOptions =="error")&&(xhr.status==0)){
					alert("無網路訊號 請確認是否有連線");	
				}
				else{
					alert("系統錯誤");
				} 
			},
			success: function(data) {	
				switch(data.message){
					case "pushSuccess":
						alert("訊息已送出");
						//window.location.href  = "Maps_App_Push_Single.php?id="+name+"&token="+token;
					break;
					case "pushFail404":
						alert("推播失敗，找不到相對應的資料");
					break;
					case "pushFail412":
						alert("推播失敗，錯誤的資料傳遞");
					break;
					case "pushFail500":
						alert("推播失敗，系統錯誤");
					break;
					case "pushFail503":
						alert("推播失敗，資料庫錯誤");
					break;
					default:
						alert("系統錯誤，請重新輸入");		
				}
			},
			complete:function(){
				//loading('hide');
				$("#submit").prop("disabled",false);
			}
		});
	return false;
	});		
});

//push fans推播
$(document).on('pageinit', '#Maps-App-Push-Fans', function () {
	$('#Push_Fans').submit(function (e){
		
		var name = $('#deveiceName').val();
		var token = $('#appToken').val();
		var message = $('#PushMessage').val();
		var link = $('#PushLink').val();
		var pushbar = $('#push-points').val();
		var userEmail = $('#user').val();
		var userPassword = $('#password').val();
            
		$.ajax({
			url: 'src/webService/Push_Fans_send.php',
			dataType: 'json',
			type:'POST',
			cache: false,
			//data: { email: inputEmail, password: inputPassword},
			data: "pushMessage="+message+"&pushLink="+link+"&appToken="+token+"&pushBar="+pushbar+"&email="+userEmail+"&password="+userPassword,
			beforeSend:function() {
				//loading('show');
				$("#submit").prop("disabled",true);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				if((ajaxOptions =="error")&&(xhr.status==0)){
					alert("無網路訊號 請確認是否有連線");	
				}
				else{
					alert("系統錯誤");
				} 
			},
			success: function(data) {
				switch(data.message){
					case "pushSuccess":
						alert("訊息已送出");
						//window.location.href  = "Maps_App_Push_Single.php?id="+name+"&token="+token;
					break;
					case "pushFail404":
						alert("推播失敗，找不到相對應的資料");
					break;
					case "pushFail412":
						alert("推播失敗，錯誤的資料傳遞");
					break;
					case "pushFail500":
						alert("推播失敗，系統錯誤");
					break;
					case "pushFail503":
						alert("推播失敗，資料庫錯誤");
					break;
					default:
						alert("系統錯誤，請重新輸入");		
				}
			},
			complete:function(){
				//loading('hide');
				$("#submit").prop("disabled",false);
			}
		});
	return false;
	});		
});

//push single推播
$(document).on('pageinit', '#Maps-App-Push-Single', function () {
	
	
	$("#PushAll").change(function() {
		var slider_value = $(this).slider().val();
		switch(slider_value) {
			case "on":
				$("input[name='addPush[]']").each(function() {
					$(this).prop("checked", true);
				});
			break;
			case "off":
				$("input[name='addPush[]']").each(function() {
					$(this).prop("checked", false);
				});
			break;
			default:
				alert("Something was wrong!!");
		}
	});

	$('#Push_Single').submit(function (e){
		
		var name = $('#deveiceName').val();
		var token = $('#appToken').val();
		var message = $('#PushMessage').val();
		var link = $('#PushLink').val();
		var checked = []
        $("input[name='addPush[]']:checked").each(function ()
        {
        	//alert($(this).val());
            checked.push($(this).val());
        });
		var userEmail = $('#user').val();
		var userPassword = $('#password').val();
		//var singlePush = false;
		$.ajax({
			url: 'src/webService/Push_Single_send.php',
			dataType: 'json',
			type:'POST',
			cache: false,
			//data: { email: inputEmail, password: inputPassword},
			data: "pushMessage="+message+"&pushLink="+link+"&appToken="+token+"&pushChecked="+checked+"&email="+userEmail+"&password="+userPassword,
			beforeSend:function() {
				//loading('show');
				$("#submit").prop("disabled",true);
			},
			//error: function(XMLHttpRequest, textStatus, errorThrown) {
			error: function(xhr, ajaxOptions,errorThrown) {
				if((ajaxOptions =="error")&&(xhr.status==0)){
					alert("無網路訊號 請確認是否有連線");	
				}
				else{
					alert("系統錯誤");
				}
				//alert(xhr.status); 
				//alert(ajaxOptions);
				//alert(errorThrown);
				//alert(XMLHttpRequest);
				//alert(textStatus);
				//alert(errorThrown); 				
			},
			success: function(data) {
				singlePush = true;
				switch(data.message){
					case "pushSuccess":
						alert("訊息已送出");
						//window.location.href  = "Maps_App_Push_Single.php?id="+name+"&token="+token;
					break;
					case "pushFail404":
						alert("推播失敗，找不到相對應的資料");
					break;
					case "pushFail412":
						alert("推播失敗，錯誤的資料傳遞");
					break;
					case "pushFail500":
						alert("推播失敗，系統錯誤");
					break;
					case "pushFail503":
						alert("推播失敗，資料庫錯誤");
					break;
					case "uuidEmpty":
						alert("請勾選推播對象");
					break;
					case "catchDataFail":
						alert("網路不穩定 請重新推播");
					break;
					default:
						alert("系統錯誤，請重新輸入");
				}
			},
			complete:function(){
				//loading('hide');
				$("#submit").prop("disabled",false);
			}
		});
	return false;
	});		
});