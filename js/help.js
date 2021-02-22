$(document).ready(function () {
	//$("#loadingImg").hide();
	//$("#error_msg").css('display', 'none', 'important');
	$('#helpForm').submit(function (e){
		var inputEmail = $('#inputEmail').val();
		var inputPhone = $('#inputTel').val();
		$.ajax({
			url: 'src/webService/help_send.php',
			dataType: 'json',
			type:'POST',
			cache: false,
			//data: { email: inputEmail, password: inputPassword},
			data: "App_Email="+inputEmail+"&App_Phone="+inputPhone,
			beforeSend:function() {
				//$("#loadingImg").show();
				//$("#error_msg").css('display', 'inline', 'important');
				//$("#error_msg").html(" Loading...");
				$("#sendPassword").val('請稍候...');
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
				/*
				alert(data);
				if(data){
					//("body").load("push_AppTable_CMS.php").hide().fadeIn(1500).delay(6000);
					window.location.href  = "signin.php";
				}
				*/
				switch(data.message){
					case "sendSuccess":
						alert("密碼已寄出");
						//window.location.href  = "signin.php?id="+appID+"&os="+appOS;
						//window.location.href  = "signin.php";
					break;
					case "sendFail":
						alert("寄件失敗");
					break;
					case "noAccount":
						alert("無此帳號 請確認信箱或手機是否正確");
					break;
					case "errorPhone" :
						alert("請確認手機號碼資料是否正確");
					break;
					case "errorMail":
						alert("請確認信箱資料是否正確");
					break;
					case "errorAll":
						alert("請輸入正確的信箱和手機號碼資料");
					break;
					default:
						alert("系統錯誤，請重新輸入");
				}
			},
			complete:function(){
				//$("#error_msg").css('display', 'none', 'important');
				$("#sendPassword").val('確認');
			}
		});
	return false;
	});		
});