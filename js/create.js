/*
function checkPasswordMatch() {
    var inputPassword = $('#inputPassword').val();
    var confirmPassword = $('#checkPassword').val();
	if (confirmPassword == ""){
		$("#divCheckPasswordMatch").html("");
	}
    else{
    	if (inputPassword != confirmPassword){
       		$("#divCheckPasswordMatch").html("請確認密碼是否相同");
       		$("#divCheckPasswordMatch").css('color','#FF0000');
    	}
    	else{
    		$("#divCheckPasswordMatch").css('color','#00FF00');
    		$("#divCheckPasswordMatch").html("確認成功");
    	}
    }
    
}
*/
$(document).ready(function () {
	//$("#checkPassword").keyup(checkPasswordMatch);
	$('#createForm').submit(function (e){
		var appID = $('#appID').val();
		var appOS = $('#appOS').val();
		//var encodeData = $('#data').val();
		var inputEmail = $('#inputEmail').val();
		var inputPhone = $('#inputTel').val();
		var inputPassword = $('#inputPassword').val();
		var checkPassword = $('#checkPassword').val();
		
		//alert(appID+","+appOS+","+inputEmail+","+inputPhone+","+inputPassword);
		
		if(inputPassword!=checkPassword)
		{
			$("#divCheckPasswordMatch").html("請確認密碼是否相同");
       		$("#divCheckPasswordMatch").css('color','#FF0000');
		}
		else
		{
			$.ajax({
				url: 'src/webService/create_check.php',
				type:'POST',
				dataType: 'json',
				cache: false,
				//data: { email: inputEmail, password: inputPassword},
				data: "App_ID="+appID+"&App_Email="+inputEmail+"&App_Phone="+inputPhone+"&App_Password="+inputPassword,
				beforeSend:function() {
					$("#create").val('請稍候...');
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
						case "successwithID":
							alert("創建成功");
							window.location.href  = "signin.php";
						break;
						case "successNoID":
							alert("創建成功");
							window.location.href  = "signin.php";
						break;
						case "sameAccount":
							alert("此帳號已有人使用");
						break;
						case "phone" :
							alert("請確認手機號碼資料是否正確");
						break;
						case "mail":
							alert("請確認信箱資料是否正確");
						break;
						case "allError":
							alert("請輸入正確的信箱和手機號碼資料");
						break;
						case "failBindApp404":
							alert("資料傳遞錯誤 請重新操作");
						break;
						case "failBindApp412":
							alert("資料傳遞錯誤 請重新操作");
						break;
						case "failBindApp500":
							alert("網路不穩定 請重新操作");
						break;
						case "failBindApp502":
							alert("網路不穩定 請重新操作");
						break;
						case "failCreateApp404":
							alert("資料傳遞錯誤 請重新操作");
						break;
						case "failCreateApp412":
							alert("資料傳遞錯誤 請重新操作");
						break;
						case "failCreateApp500":
							alert("網路不穩定 請重新操作");
						break;
						case "failCreateApp502":
							alert("網路不穩定 請重新操作");
						break;
						default:
							alert("系統錯誤，請重新輸入");
					}	
				},
				complete:function(){
					$("#create").val('確認');
				}
			});
		}
	return false;
	});		
});