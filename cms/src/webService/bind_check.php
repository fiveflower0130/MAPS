<?php
	header("Content-Type: text/html; charset=utf-8");
	ini_set("session.cookie_httponly", 1);
	include("decodeEncode.php");
	session_start();
	//sleep(1);
	
	function checkAppUser($email, $password, $phone)
	{
		$serviceUrl = "http://maps_internal_portal:81/axis2/services/MAPsService/checkAppUser";
		
		$ch = curl_init();
 
		//set curl options 設定你要傳送參數的目的地檔案
		curl_setopt($ch, CURLOPT_URL, $serviceUrl);
		curl_setopt($ch, CURLOPT_HEADER, false);   
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 		
		$post_data = array(
			'email' => $email,
			'password' => $password,
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
		$result= $json->{"result"};
		
		return $result;
	}
	
	function bindApp($appId, $email, $password)
	{
		$serviceUrl = "http://maps_internal_portal:81/axis2/services/MAPsService/bindApp";
		$ch = curl_init();
 
		//set curl options 設定你要傳送參數的目的地檔案
		curl_setopt($ch, CURLOPT_URL, $serviceUrl);
		curl_setopt($ch, CURLOPT_HEADER, false);   
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 		
		$post_data = array(
			'appId' => $appId,
			'email' => $email,
			'password' => $password
		);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
 
		//execute curl
		$returnData = curl_exec($ch);
		//close curl
		curl_close($ch);
	
		// catch json string
		$output = explode("</ns:return>",$returnData);
		$result = explode("<ns:return>",$output[0]); 
    	
		//json decode
		$json = json_decode($result[1]);
		$msgCode= $json->{"msgCode"};
		
		return $msgCode;
	}
	
	function checkEmail($mail){
    	if($mail != ''){
        	if(preg_match("/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$/",$mail))
        	{
            	return true;
        	}
        	else{
            	return false;
        	}
    	}
    	else{
        	return false;
    	}
	}
	function checkPassword($password){
		if($password != ''){
			return true;
		}
		else{
			return false;			
		}
	}
	
	if(isset($_POST['App_ID'])&&isset($_POST['App_Email'])&&isset($_POST['App_Password']))
	{
		$appId  = $_POST['App_ID'];
		$email = $_POST['App_Email'];
		$password = $_POST['App_Password'];
		$phone = "";
		
		$mail = checkEmail($email);
		$passwords = checkPassword($password);
		
		$encodeData = dataEncode($password);
		if($mail&&$passwords){
			$checkAppUser = checkAppUser($email, $encodeData, $phone);
			
			if($checkAppUser == "true")
			{
				if(!empty($appId))
				{
					$bindApp = bindApp($appId, $email, $encodeData);
					switch($bindApp){
						case 0:
							$_SESSION['login_user']=$email;
							$_SESSION['login_password']=$encodeData;
							$data = array(
								'message'=>'bindSuccess'
							);
							echo json_encode($data);
						break;
						case 404:
							$data = array(
								'message'=>'failBindApp404'
							);
							echo json_encode($data);
						break;
						case 412:
							$data = array(
							'message'=>'failBindApp412'
							);
							echo json_encode($data);
						break;
						case 500:
							$data = array(
								'message'=>'failBindApp500'
							);
							echo json_encode($data);
						break;
						case 502:
							$data = array(
								'message'=>'failBindApp502'
							);
							echo json_encode($data);
						break;
					}
				}
				else{
					$data = array(
						'message'=>'noApp'
					);
					echo json_encode($data);
				}	
			}
			else{
				$data = array(
					'message'=>'noAccount'
				);
				echo json_encode($data);
			}
		}
		else{
			if(!$passwords&&$mail){
				$data = array(
					'message'=>'password'
				);
				echo json_encode($data);	
			}
			if($passwords&&!$mail){
				$data = array(
					'message'=>'mail'
				);
				echo json_encode($data);
			}
			if(!$passwords&&!$mail){
				$data = array(
					'message'=>'allError'
				);
				echo json_encode($data);
			}
		}
	}
?> 