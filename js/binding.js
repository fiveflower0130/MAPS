$(document).ready(function () {
	$('#bindingForm').submit(function (e){
		var appID = $('#appID').val();
		var appOS = $('#appOS').val();
		var encodeData = $('#data').val();
		var inputEmail = $('#inputEmail').val();
		var inputPassword = $('#inputPassword').val();
		$.ajax({
			url: 'src/webService/bind_check.php',
			dataType: 'json',
			type:'POST',
			cache: false,
			//data: { email: inputEmail, password: inputPassword},
			data: "App_ID="+appID+"&App_Email="+inputEmail+"&App_Password="+inputPassword,
			beforeSend:function() {
				$("#bind").val('請稍候...');
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
				//alert(data.message);
				switch(data.message){
					case "bindSuccess":
						alert("整併成功");
						//window.location.href  = "signin.php?data="+encodeData;
						window.location.href  = "signin.php";
					break;
					case "noAccount":
						alert("無此帳號！請確認輸入資料是否有誤");
					break;
					case "noApp":
						alert("無法綁定，請確認是否有生成App");
					break;
					case "failBindApp404":
						alert("資料傳遞錯誤 請重新輸入");
					break;
					case "failBindApp412":
						alert("重複的資料或App已被整併");
					break;
					case "failBindApp500":
						alert("網路不穩定 請從新操作");
					break;
					case "failBindApp502":
						alert("網路不穩定 請重新操作");
					break;
					case "password" :
						alert("請輸入密碼");
					break;
					case "mail":
						alert("請確認信箱資料是否正確");
					break;
					case "allError":
						alert("請輸入正確的信箱和密碼");
					break;
					default:
						alert("系統錯誤，請重新輸入");
				}
				
			},
			complete:function(){
				//$("#error_msg").css('display', 'none', 'important');
				$("#bind").val('確認');
			}
		});
	return false;
	});		
});