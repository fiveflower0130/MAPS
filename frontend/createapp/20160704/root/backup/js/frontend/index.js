$(document).ready(function()
{
    //初始化
});


function cleardata()
{
	$("#App_Name").val('');
	$('#index_URL').val('');
	$('#iconUpload').val('');
	$('#Uuid_Type').val('');
	$('#voiceUpload').val('');
	$('#customPush').bootstrapSwitch('state',false);
    $('#shipping').hide();
    $('#shippingvoice').hide();
	cLoader.hide();
	$('#formSubmit').prop("disabled", false);
	$('#formSubmit').val('Create App');
	byId('image').src="/images/frontend/App-Icon-copy.jpg";
	$("label[for='changename']").text('');
	$("label[for='changeaudioname']").text('');
}

$(window).bind("pageshow", function() {
   cleardata();
});

var cLoader;

$('#formSubmit').click(function (event) {
var valResult = validate();
var loaderObj = $('#canvasLoader');
     
if (valResult==true) {
		$('#formSubmit').prop("disabled", true);
		$('#formSubmit').val('資料處理中，請稍候...');
		if (loaderObj.length>0) {
	//	    alert("CanvasLoader exise ...");
			cLoader.hide();
			cLoader.show(); 
			loaderObj.show();
		} else {
		
			alert("CanvasLoader NOT exise ...");
		}
		
		setTimeout(function(){ 
		  $('#formJoin').submit(); 
		}, 1000);
	}
	
return valResult;
	
});

function validate()
{
    var returnMsg = true;
	
    var hasInnerText = (document.getElementsByTagName("body")[0].innerText !== undefined) ? true : false;
	
    if(!hasInnerText)
	{
		document.getElementById('appnamemsg').textContent = "";
		//document.getElementById('apposmsg').innerText = "";
		//document.getElementById('indexurlmsg').innerText = "";
		document.getElementById('iconuploadmsg').textContent = "";
		document.getElementById('voiceuploadmsg').textContent = "";
		document.getElementById('inputtitlemsg').textContent = "";
	}
	else
	{
		document.getElementById('appnamemsg').innerText = "";
		//document.getElementById('apposmsg').innerText = "";
		//document.getElementById('indexurlmsg').innerText = "";
		document.getElementById('iconuploadmsg').innerText = "";
		document.getElementById('voiceuploadmsg').innerText = "";
		document.getElementById('inputtitlemsg').innerText = "";
	}
	
	var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-="
    var check = function(string){
    for(i = 0; i < specialChars.length;i++){
     if(string.indexOf(specialChars[i]) > -1){
       return true
     }
     }
      return false;
    }
	
	
    if ($('#App_Name').val() == "")
    {
		if(!hasInnerText)
	    {
          document.getElementById('appnamemsg').textContent = "請輸入您的App Name";
	    }
		else
		{
		  document.getElementById('appnamemsg').innerText = "請輸入您的App Name";
		}
		
        returnMsg=false;
    }
	else
	{
        if(check($('#App_Name').val()) == false)
        {
          
        }
        else
        {
			
			if(!hasInnerText)
			{
			  document.getElementById('appnamemsg').textContent = "App Name不得含有特殊字元";
			}
			else
			{
			  document.getElementById('appnamemsg').innerText = "App Name不得含有特殊字元";
			}
				
			returnMsg=false;
        }
	}
	
	if ($('#App_Name').val() == "")
    {
		
	}
	else
	{
		 if(($('#App_Name').val()).length>50)
		   {
				if(!hasInnerText)
				{
					document.getElementById('appnamemsg').textContent = "App Name不得超過50個字元";
				}
				else
				{
					document.getElementById('appnamemsg').innerText = "App Name不得超過50個字元";
				}
                returnMsg=false;
		   }
	}
	

/*     if ($('#App_OS').val() == "")
    {
        document.getElementById('apposmsg').innerText = "請選擇您裝置所使用的OS";
        returnMsg=false;
    } */

    if ($('#iconUpload').val() == "") 
	{
		if(!hasInnerText)
		{
            document.getElementById('iconuploadmsg').textContent = "請上傳圖檔";
		}
		else
		{
			document.getElementById('iconuploadmsg').innerText = "請上傳圖檔";	
		}
        returnMsg = false;
    }
    else 
	{
        if (validateImage($('#iconUpload').val().split('.').pop()) == null) 
		{
			if(!hasInnerText)
			{
				document.getElementById('iconuploadmsg').textContent = "請輸入正確的圖片格式";
			}
			else
			{
				 document.getElementById('iconuploadmsg').innerText = "請輸入正確的圖片格式";
			}
            returnMsg = false;
        }
		else
		{
			if(document.getElementById('iconUpload').files[0].size>4000000)
			{
				if(!hasInnerText)
				{
					document.getElementById('iconuploadmsg').textContent = "檔案請勿超過4M";
				}
				else
				{
					document.getElementById('iconuploadmsg').innerText = "檔案請勿超過4M";
				}
                 returnMsg = false;
			}
		}
    }

    if ($('#index_URL').val() == "")
    {
		if(!hasInnerText)
		{
            document.getElementById('indexurlmsg').textContent = "請輸入您欲連結的起始頁面";
		}
		else
		{
			document.getElementById('indexurlmsg').innerText = "請輸入您欲連結的起始頁面";	
		}
        returnMsg = false;
    }
    else
    {
        if (validateURL($('#index_URL').val()) == null)
        {
			if(!hasInnerText)
			{
				document.getElementById('indexurlmsg').textContent = "請輸入正確的網址格式";
			}
			else
			{
				document.getElementById('indexurlmsg').innerText = "請輸入正確的網址格式";
			}
            returnMsg = false;
        }
		else
		{
			if(($('#index_URL').val()).length>255)
			{
				if(!hasInnerText)
				{
					document.getElementById('indexurlmsg').textContent = "網址不得超過255個字元";
				}
				else
				{
					document.getElementById('indexurlmsg').innerText = "網址不得超過255個字元";
				}
                returnMsg = false;
			}
			else
			{
				//checkurl2($('#index_URL').val());
				
				//alert(returnMsg);
			}
		}
    }
	
	var push=$("#customPush").is(":checked");
	
	if(push==true)
	{
		   if(($('#Uuid_Type').val()).length>20)
		   {
			   if(!hasInnerText)
			   {
			       document.getElementById('inputtitlemsg').textContent = "App推播識別格式不得超過20個字元";
			   }
			   else
			   {
				   document.getElementById('inputtitlemsg').innerText = "App推播識別格式不得超過20個字元";
			   }
                returnMsg=false;
		   }
		   else
		   {
			    if(check($('#Uuid_Type').val()) == true)
                {
					if(!hasInnerText)
					{
						 document.getElementById('inputtitlemsg').textContent = "App推播識別格式不得含有特殊字元";
					}
					else
					{
						 document.getElementById('inputtitlemsg').innerText = "App推播識別格式不得含有特殊字元";
					}
                     returnMsg=false;
				}
		   }
		   
		if(document.getElementById('voiceUpload').value!="")//且customenable是開著的時候
	    {
			if(document.getElementById('voiceUpload').value.split('.').pop()!="mp3")
			{
				if(!hasInnerText)
				{
				    document.getElementById('voiceuploadmsg').textContent = "請輸入正確的音樂格式";
				}
				else
				{
					document.getElementById('voiceuploadmsg').innerText = "請輸入正確的音樂格式";
				}
				returnMsg = false;
			}
			else
			{
				if(document.getElementById('voiceUpload').files[0].size>4000000)
				{
					if(!hasInnerText)
					{
						document.getElementById('voiceuploadmsg').textContent = "檔案請勿超過4M";
					}
					else
					{
						document.getElementById('voiceuploadmsg').innerText  = "檔案請勿超過4M";
					}
					returnMsg = false;
				}
				else
				{
					var duration = document.getElementById('sound').duration;
					
					if(duration>30)
					{
						if(!hasInnerText)
						{
							document.getElementById('voiceuploadmsg').textContent = "音樂長度請勿超過30秒";
						}
						else
						{
							document.getElementById('voiceuploadmsg').innerText = "音樂長度請勿超過30秒";
						}
						returnMsg = false;
					}
				
				}
			}
	    }
	}
	
	if($('#CheckUrlFlag').val()=="false")
	{
		returnMsg = false;
	}
	
    /* if(returnMsg==true)
    {
        $('#formJoin input:submit').prop('disabled', true);
        $('#formJoin input:submit').val('資料處理中，請稍候...');
        $('#loading').show();
    } */
	
    return returnMsg;
}

function checkurl()
{
	 var hasInnerText = (document.getElementsByTagName("body")[0].innerText !== undefined) ? true : false;
	document.getElementById('indexurlmsg').textContent="";
	$('#CheckUrlFlag').val("true");
	
    /* $.when(ajaxcheckurl($('#index_URL').val())).done(function (a2) 
	{
		if(a2!='')
		{
            if(!hasInnerText)
			{
				document.getElementById('indexurlmsg').textContent = "您輸入的URL已有人使用。";
			}
			else
			{
				document.getElementById('indexurlmsg').innerText  = "您輸入的URL已有人使用。";
			}
			$('#CheckUrlFlag').val("false");
            //return false;
		}   
		else
		{
			$('#CheckUrlFlag').val("true");
		}
    }); */
}

function ajaxcheckurl(inputurl)
{
	return $.ajax({
		        async: false,
                url: 'index.php/Createapp/checkindexurl/',
                type: 'POST',
				data: {index_url:inputurl},
                cache: false,
                beforeSend: function () 
				{
					
				},
                error: function (xhr, ajaxOptions, thrownError) 
				{
                    //alert(xhr.status);
                    //alert(thrownError);
                },
                success: function (data) 
				{
                    //alert(data);
                    //alert("success");
                },
                complete: function () 
				{
                    // alert("complete");
                }
            });
}

function init()
{
	var hasInnerText = (document.getElementsByTagName("body")[0].innerText !== undefined) ? true : false;
    //初始化
    $("[name='customPush']").bootstrapSwitch();
    $('#shipping').hide();
    $('#shippingvoice').hide();
    //$('#loading').hide();  
    cLoader = new CanvasLoader('canvasloader-container');
    cLoader.setDiameter(111); // default is 40
    cLoader.setDensity(14); // default is 40
    cLoader.setSpeed(1); // default is 2
    cLoader.setFPS(15); // default is 24
    cLoader.hide();
			
	if (/ipad/i.test(navigator.userAgent.toLowerCase())) 
	{
	  // 目前是用ipad瀏覽
		$('#customPush').on('switchChange.bootstrapSwitch', function (state) 
		{
			if ($('#customPush').bootstrapSwitch('state')) {
				$('#shipping').fadeIn(1000);
				$("#voicediv").hide();
			}
			else {
				$('#shipping').fadeOut(1000);
			}
		});
		
		if(!hasInnerText)
		{
			document.getElementById('voiceinputtitle').textContent = "App 推播自訂音樂(行動裝置不支援此功能，請使用PC自訂)。";
		}
		else
		{
			document.getElementById('voiceinputtitle').innerText  = "App 推播自訂音樂(行動裝置不支援此功能，請使用PC自訂)。";
		}
	  
	}
	else if (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase())) 
	{
		// 目前是用手機瀏覽
		//alert("mobile");
		
		$('#customPush').on('switchChange.bootstrapSwitch', function (state) 
		{
			if ($('#customPush').bootstrapSwitch('state')) {
				$('#shipping').fadeIn(1000);
				$("#voicediv").hide();
			}
			else {
				$('#shipping').fadeOut(1000);
			}
		});
		
		if(!hasInnerText)
		{
			document.getElementById('voiceinputtitle').textContent = "App 推播自訂音樂(行動裝置不支援此功能，請使用PC自訂)。";
		}
		else
		{
			document.getElementById('voiceinputtitle').innerText  = "App 推播自訂音樂(行動裝置不支援此功能，請使用PC自訂)。";
		}
	}
	else 
	{
	    // 目前是用電腦瀏覽
		//alert("pc");
		//啟動自訂推撥功能
		$('#customPush').on('switchChange.bootstrapSwitch', function (state) 
		{
			if ($('#customPush').bootstrapSwitch('state')) {
				$('#shipping').fadeIn(1000);
				$('#shippingvoice').fadeIn(1000);
			}
			else {
				$('#shipping').fadeOut(1000);
				$('#shippingvoice').fadeOut(1000);
			}
		});
	}

}

 
function byId(e) { return document.getElementById(e); }

window.addEventListener('load', onDocLoaded, false);

function onDocLoaded() {
	
	init();
    initdataPreview();
	
    byId('iconUpload').addEventListener('change', onChosenFileChange, false);
    byId('voiceUpload').addEventListener('change', onChosenFileChange, false);
}

function onChosenFileChange(evt) {
    var fileType = this.files[0].type;

    if (fileType.indexOf('audio') != -1)
        loadFileObject(this.files[0], onSoundLoaded);
    else if (fileType.indexOf('image') != -1)
        loadFileObject(this.files[0], onImageLoaded);
}

function loadFileObject(fileObj, loadedCallback) {
    var reader = new FileReader();
    reader.onload = loadedCallback;
    reader.readAsDataURL(fileObj);
}

function onImageLoaded(evt) {
    byId('image').src = evt.target.result;
}

function onSoundLoaded(evt) {
    byId('sound').src = evt.target.result;
    byId('sound').play();
}

function initdataPreview()
{
    //App_Name
    $('#App_Name').change(function () {
        var name = $('#App_Name').val();
        console.log(name)
        $("label[for='changename']").text(name);
    });

    //voice 
    $('#voiceUpload').change(function () {
        var audioname = $('#voiceUpload').val();
        console.log(audioname);
        $("label[for='changeaudioname']").text(audioname);
    });
}

function openWin(img){
	var x = screen.width/2 - 360/2;
    var y = screen.height/2 - 360/2;
    window.open(img,"Line","'directories=no,titlebar=no,location=no,menubar=no,toolbar=no,status=yes,scrollbars=yes,width=360,height=360,left="+x+",top="+y+"");
}


function validateURL(value) {

    var expression = /^(http|https|ftp):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#]*[\w\-\@?^=%&amp;/~\+#])?/;
    var regex = new RegExp(expression);
    return value.match(regex);
}

function validateImage(value) {
    var returnvalue = null;

    switch(value)
    {
        case "jpg":
            returnvalue = "jpg";
            break;
        case "jpeg":
            returnvalue = "jpeg";
            break;
        case "png":
            returnvalue = "png";
            break;
		case "JPG":
            returnvalue = "jpg";
            break;
        case "JPEG":
            returnvalue = "jpeg";
            break;
        case "PNG":
            returnvalue = "png";
            break;
    }

    return returnvalue;
}

