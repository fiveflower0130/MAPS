<?php
	header("Content-Type: text/html; charset=utf-8");
	ini_set("session.cookie_httponly", 1);
	// Session ID cannot be passed through URLs
	ini_set('session.use_only_cookies', 1);
	// Uses a secure connection (HTTPS) if possible
	ini_set('session.cookie_secure', 1);
	
	include("decodeEncode.php");
	session_start();
	//sleep(1);//為了製造 ajax loading效果，所以延遲5秒
	
	function checkAppUser($email, $password, $phone, $remember)
	{
		$serviceUrl = "http://maps_internal_portal:81/axis2/services/MAPsService/checkAppUser";
		$encodeData = dataEncode($password);
		$ch = curl_init();
 
		//set curl options 設定你要傳送參數的目的地檔案
		curl_setopt($ch, CURLOPT_URL, $serviceUrl);
		curl_setopt($ch, CURLOPT_HEADER, false);   
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 		
		$post_data = array(
			'email' => $email,
			'password' => $encodeData,
			'phone' => $phone
		);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
 
		//execute curl
		$returnData = curl_exec($ch);
		//close curl
		curl_close($ch);
	
		// catch json string
		$output =explode("</ns:return>",$returnData);
		$result = explode("<ns:return>",$output[0]); 
    	
    	//print_r($result);
		//json decode
		$json = json_decode($result[1]);
		$count = count($json->appList);
		$msgCode= $json->{"msgCode"};
		$checkResult= $json->{"result"};
		
		
		switch($msgCode){
			case 0:
				if($checkResult == "true")
				{
					$_SESSION['login_user']=$email; //Storing user session value.
					$_SESSION['login_password']=$encodeData;
					if(isset($remember)&&($remember == "true")){
						//setcookie("remUser", $email, time()+365*24*60, "/");
						//setcookie("remPass", $encodeData, time()+365*24*60, "/");
						setcookie("remUser", $email, time()+365*24*60, "/", null, true, true);
						setcookie("remPass", $encodeData, time()+365*24*60, "/", null, true, true);
					}
					else{
						if(isset($_COOKIE["remUser"])||isset($_COOKIE["remPass"])){
							//setcookie("remUser", $email, time()-100, "/");
							//setcookie("remPass", $encodeData, time()-100, "/");
							setcookie("remUser", $email, time()-100, "/", null, true, true);
							setcookie("remPass", $encodeData, time()-100, "/", null, true, true);
						}
					}
					$data = array(
						'message'=>'loginSuccess'
					);
					echo json_encode($data);
				}
				else
				{
					$data = array(
						'message'=>'loginFail'
					);
					echo json_encode($data);
				}
			break;
			case 404:
				$data = array(
						'message'=>'failSignIn404'
					);
					echo json_encode($data);
			break;
			case 412:
				$data = array(
						'message'=>'failSignIn412'
					);
					echo json_encode($data);
			break;
			case 500:
				$data = array(
						'message'=>'failSignIn500'
					);
					echo json_encode($data);
			break;
			case 502:
				$data = array(
						'message'=>'failSignIn502'
					);
					echo json_encode($data);
			break;
		}
		
	}
	
	if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['rememberme']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = "";
		$remember = $_POST['rememberme'];
		
		checkAppUser($email, $password, $phone, $remember);
			
	}
?> 