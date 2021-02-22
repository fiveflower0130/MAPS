 var tz = jstz.determine();


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
			timeout:10000,
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
$(document).on('pageshow', '#Maps-App-Push-All', function () {
	
	$('#Push_All').submit(function (e){
		
		var name = $('#deveiceName').val();
		var token = $('#appToken').val();
		var message = $('#PushAllMessage').val();
		var link = $('#PushAllLink').val();
		var pushOS = $("input[name='radio-choice']:checked").val();  
		var userEmail = $('#user').val();
		var userPassword = $('#password').val();
		var time = $('#PushEndTime').val();
		var timezone = tz.name();
		
		if(link.length != 0)
		{
			var flag=link.startsWith("http");
			if(flag==false)
			{
				link = "http://"+link;
			}
		}
		
		if(message.length == 0){
			$("#CheckMessage").html("請輸入推播訊息");
       		$("#CheckMessage").css('color','#FF0000');
		}
		else if(time.length == 0){
			$("#CheckTime").html("請確認訊息結束時間");
       		$("#CheckTime").css('color','#FF0000');
		}
		else{
			$.ajax({
				url: 'src/webService/Push_All_send.php',
				dataType: 'json',
				type:'POST',
				cache: false,
				//data: { email: inputEmail, password: inputPassword},
				data: "pushMessage="+message+"&pushLink="+link+"&appToken="+token+"&pushOS="+pushOS+"&email="+userEmail+"&password="+userPassword+"&endTime="+time+"&timeZone="+timezone,
				beforeSend:function() {
					//loading('show');
					$("#submit").prop("disabled",true);
				},
				timeout:15000,
				error: function(xhr, ajaxOptions, thrownError) {
					if((ajaxOptions =="error")&&(xhr.status==0)){
						alert("無網路訊號 請確認是否有連線");	
					}
					else{
						alert("訊息未送出，請重新發送");
					} 
				},
				success: function(data) {
					//alert(data);
					switch(data.message){
						case "pushSuccess":
							alert("訊息已送出");
							//window.location.href  = "Maps_App_Push_Single.php?id="+name+"&token="+token;
							//window.location.reload();
						break;
						case "pushFail404":
							alert("推播失敗，找不到相對應的資料");
						break;
						case "pushFail412":
							alert("推播失敗，請確認資料填寫是否正確");
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
		}
	return false;
	});		
});

//push fans推播
$(document).on('pageshow', '#Maps-App-Push-Fans', function () {
	$('#Push_Fans').submit(function (e){
		
		var name = $('#deveiceName').val();
		var token = $('#appToken').val();
		var message = $('#PushFansMessage').val();
		var link = $('#PushFansLink').val();
		var pushbar = $('#push-points').val();
		var userEmail = $('#user').val();
		var userPassword = $('#password').val();
		var time = $('#PushEndTime').val();
		var timezone = tz.name();
        
		if(link.length != 0)
		{
			var flag=link.startsWith("http");
			if(flag==false)
			{
				link = "http://"+link;
			}
		}
		
		if(message.length == 0){
			$("#CheckMessage").html("請輸入推播訊息");
       		$("#CheckMessage").css('color','#FF0000');
		}
		else if(time.length == 0){
			$("#CheckTime").html("請確認訊息結束時間");
       		$("#CheckTime").css('color','#FF0000');
		}
		else{
			$.ajax({
				url: 'src/webService/Push_Fans_send.php',
				dataType: 'json',
				type:'POST',
				cache: false,
				//data: { email: inputEmail, password: inputPassword},
				data: "pushMessage="+message+"&pushLink="+link+"&appToken="+token+"&pushBar="+pushbar+"&email="+userEmail+"&password="+userPassword+"&endTime="+time+"&timeZone="+timezone,
				beforeSend:function() {
					//loading('show');
					$("#submit").prop("disabled",true);
				},
				timeout:15000,
				error: function(xhr, ajaxOptions, thrownError) {
					if((ajaxOptions =="error")&&(xhr.status==0)){
						alert("無網路訊號 請確認是否有連線");	
					}
					else{
						alert("訊息未送出，請重新發送");
					} 
				},
				success: function(data) {
					switch(data.message){
						case "pushSuccess":
							alert("訊息已送出");
							//window.location.href  = "Maps_App_Push_Single.php?id="+name+"&token="+token;
							//window.location.reload();
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
		}
	return false;
	});		
});

//push single推播
$(document).on('pageshow', '#Maps-App-Push-Single', function () {
	
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
		var message = $('#PushSingleMessage').val();
		var link = $('#PushSingleLink').val();
		var checked = []
        $("input[name='addPush[]']:checked").each(function ()
        {
        	//alert($(this).val());
            checked.push($(this).val());
        });
		var userEmail = $('#user').val();
		var userPassword = $('#password').val();
		var time = $('#PushEndTime').val();
		var timezone = tz.name();
		
		if(link.length != 0)
		{
			var flag=link.startsWith("http");
			if(flag==false)
			{
				link = "http://"+link;
			}
		}
		
		if(message.length == 0){
			$("#CheckMessage").html("請輸入推播訊息");
       		$("#CheckMessage").css('color','#FF0000');
		}
		else if(time.length == 0){
			$("#CheckTime").html("請確認訊息結束時間");
       		$("#CheckTime").css('color','#FF0000');
		}
		else{
			$.ajax({
				url: 'src/webService/Push_Single_send.php',
				dataType: 'json',
				type:'POST',
				cache: false,
				//data: { email: inputEmail, password: inputPassword},
				data: "pushMessage="+message+"&pushLink="+link+"&appToken="+token+"&pushChecked="+checked+"&email="+userEmail+"&password="+userPassword+"&endTime="+time+"&timeZone="+timezone,
				beforeSend:function() {
					//loading('show');
					$("#submit").prop("disabled",true);
				},
				timeout:15000,
				//error: function(XMLHttpRequest, textStatus, errorThrown) {
				error: function(xhr, ajaxOptions,errorThrown) {
					if((ajaxOptions =="error")&&(xhr.status==0)){
						alert("無網路訊號 請確認是否有連線");	
					}
					else{
						alert("訊息未送出，請重新發送");
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
		}
	return false;
	});		
});