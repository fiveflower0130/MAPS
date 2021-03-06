$(document).ready(function () {
	$('#loginForm').submit(function (e){
		var inputEmail = $('#inputEmail').val();
		var inputPassword = $('#inputPassword').val();
		var rememberMe = $('#rememberMe').prop('checked');
		
		$.ajax({
			url: '/cms/signin',
			dataType: 'json',
			type:'POST',
			cache: false,
			//data: { email: inputEmail, password: inputPassword},
			data: "email="+inputEmail+"&password="+inputPassword+"&rememberme="+rememberMe,
			beforeSend:function() {
				$("#btn1").val('請稍候...');
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
					case "0":
						alert("登入成功");
						//window.location.href  = "/cms/maps_app";
					break;
					case "-1":
						alert("登入失敗，請確認帳號或密碼是否正確");
					break;
					case "404":
						alert("資料傳遞錯誤 請重新操作");
					break;
					case "412":
						alert("資料傳遞錯誤 請重新操作");
					break;
					case "500":
						alert("網路不穩定 請重新操作");
					break;
					case "502":
						alert("網路不穩定 請重新操作");
					break;
					default:
						alert("系統錯誤，請重新輸入");
				}
			},
			complete:function(){
				$("#btn1").val('確認');
			}
		});
	return false;
	});		
});