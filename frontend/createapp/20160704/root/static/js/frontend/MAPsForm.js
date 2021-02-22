
$(document).ready(function()
{
	//啟動switch,file功能
	$("[name='customPush']").bootstrapSwitch();
	//$('input[type=file]').bootstrapFileInput();
	
	$('#shipping').hide();
	$('#shippingvoice').hide();
	$('#loading').hide();
	
	
	//啟動自訂推撥功能
	$('#customPush').on('switchChange.bootstrapSwitch', function (state) {
		if ($('#customPush').bootstrapSwitch('state')) {
			$('#shipping').fadeIn(1000);
			$('#shippingvoice').fadeIn(1000);
		} 
		else {
			$('#shipping').fadeOut(1000);
			$('#shippingvoice').fadeOut(1000);
		}
	});
	
    //icon & audio preview
	function byId(e){return document.getElementById(e);}

	window.addEventListener('load', onDocLoaded, false);

	function onDocLoaded()
	{
		byId('iconUpload').addEventListener('change', onChosenFileChange, false);
		byId('voiceUpload').addEventListener('change', onChosenFileChange, false);
	}

	function onChosenFileChange(evt)
	{
		var fileType = this.files[0].type;

		if (fileType.indexOf('audio') != -1)
			loadFileObject(this.files[0], onSoundLoaded);
		else if (fileType.indexOf('image') != -1)
        loadFileObject(this.files[0], onImageLoaded);
	}

	function loadFileObject(fileObj, loadedCallback)
	{
		var reader = new FileReader();
		reader.onload = loadedCallback;
		reader.readAsDataURL( fileObj );
	}
	
	function onImageLoaded(evt)
	{
		byId('image').src = evt.target.result;
	}
	
	function onSoundLoaded(evt)
	{
		byId('sound').src = evt.target.result;
		byId('sound').play();
	}
	
	//icon preview功能
	/*
	function readURL(input) { 
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#icon1').attr('src', e.target.result);
				//$('#icon2').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
		else{
			$('#icon1').attr('src', "./img/App-Icon-copy.jpg");
		}
    }
    $("#iconUpload").change(function(){
        readURL(this);
    });
	*/
	
	//audio preview功能
	/*
	$.uploadPreview({ 
		input_field: "#voiceUpload",
		preview_box: "#audio-preview",
		no_label: true
	});
	*/
	
	//iCon name = App name previewe功能
	$('#App_Name').change(function(){ 
		var name = $('#App_Name').val();
		console.log(name);
		 $("label[for='changename']").text(name);
	});
	
	//audio file name preview功能
	$('#voiceUpload').change(function(){ 
		var audioname = $('#voiceUpload').val();
		console.log(audioname);
		 $("label[for='changeaudioname']").text(audioname);
	});
	
	//檢視index_URL是否為http or https
	function validateURL(value){
  
      var expression = /^(http|https|ftp):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#]*[\w\-\@?^=%&amp;/~\+#])?/;
      var regex = new RegExp(expression);
      return value.match(regex);
    }

    $.validator.addMethod("index_URL", function(value, element) {
      return this.optional(element) || validateURL(value);
    }, "這並不是正確的網址格式");
	
	//檢視iconUpload是否為jpg或png
    function validateImage(value) {
        var expression = /\.(jpe?g|png)$/i;
        var regex = new RegExp(expression);
        return value.match(regex);
    }

    $.validator.addMethod("iconUpload", function (value, element) {
        return this.optional(element) || validateImage(value);
    }, "這並不是正確的圖片格式");
    
    //檢視voiceUpload是否為mp3
    function validateVoice(value) {
        var expression = /^(?:[A-Z]:\\fakepath\\)?([a-zA-Z0-9_-]+)(\.[Mm][Pp]3)$/;
        var regex = new RegExp(expression);
        return value.match(regex);
    }

    $.validator.addMethod("voiceUpload", function (value, element) {
        return this.optional(element) || validateVoice(value);
    }, "這並不是正確的音樂格式");
	
    //表單驗證

    $("#formJoin").validate({
		rules:{
			App_Name : {
				required : true,
				minlength : 2
				/*
				remote : {
					url: "checkAppName.php",
					type: "POST",
					data: {
						name:function() {
							return $("#App_Name").val();
						}
					}
				}
				*/
			},
			App_OS : {
				required: true
			},
			index_URL : {
				required : true,
				index_URL : true
				//required : true,
				//url : true	
			},
			iconUpload : {
			    required : true,
			    iconUpload : true
			    //accept : "jpg|jpeg"
			},
			voiceUpload : {
				voiceUpload : true
			}
		},
		
		messages:{
			App_Name : {
				required : '請輸入您的App Name',
				minlength: '至少輸入兩個字'
			},
			App_OS : {
				required : '請選擇您裝置所使用的OS'
			},
			index_URL : {
				required : '請輸入您欲連結的起始頁面'
				//url : '這並不是正確的網址格式'
			},
			iconUpload : {
				required : '請上傳圖檔',
				//accept : '檔案格式有誤'
			}
			
		},
		
		submitHandler: function (formJoin){
			$('#formJoin input:submit').prop('disabled', true);
			$('#formJoin input:submit').val('資料處理中，請稍候...');
			//$('#formJoin input:submit').hide();
			$('#loading').show();
			formJoin.submit();
		},
		invalidHandler:function(formJoin){//在Submit之前，且驗證失敗。
			$("#formJoin input.error, #formJoin select.error").fadeOut().fadeIn();
		},
		success:function(error){
			error.addClass('valid').text('OK'); 
		}

	}); 
});
