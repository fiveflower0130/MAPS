<?php
	header("Content-Type: text/html; charset=utf-8");
	include("decodeEncode.php");
	//sleep(1);
	
	function checkAppUser($email, $phone)
	{
		$serviceUrl = "http://maps_internal_portal:81/axis2/services/MAPsService/checkAppUser";
		$password ="";
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
	
	function getUserPassword($email, $phone){
		
		$serviceUrl = "http://maps_internal_portal:81/axis2/services/MAPsService/getAppUserInfo";
		$ch = curl_init();
		$password = '';
 
		//set curl options 設定你要傳送參數的目的地檔案
		curl_setopt($ch, CURLOPT_URL, $serviceUrl);
		curl_setopt($ch, CURLOPT_HEADER, false);   
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 		
		$post_data = array(
			'email' => $email,
			'phone' => $phone,
			'password' => $password
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
    	
		//json decode
		//$count = count($json->appList);
		$json = json_decode($result[1]);
		$msgCode= $json->{"msgCode"};
		$password = $json->{"password"};
		
		return $password;
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
	function checkMobile($str)
	{
		//$pattern = "/^09[0-9]d{8}$/";
		$pattern1 = "/09[0-9]{8}/";
		$pattern2 = "/09[0-9]{2}-[0-9]{6}/";
		$pattern3 = "/09[0-9]{2}-[0-9]{3}-[0-9]{3}/";
		
		if($str != ''){
			if (preg_match($pattern1,$str)){
				return true;
			}
			else if(preg_match($pattern2,$str)){
				return true;
			}
			else if(preg_match($pattern3,$str)){
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
	
	if(isset($_POST['App_Email'])&&isset($_POST['App_Phone']))
	{
		$sendEmail = $_POST['App_Email'];
		$Phone = $_POST['App_Phone'];
		
		$mail = checkEmail($sendEmail);
		$tel = checkMobile($Phone);
		
		if($tel&&$mail)
		{
			$checkAppUser = checkAppUser($sendEmail, $Phone); 
			
			if($checkAppUser == "true")
			{
				$password = getUserPassword($sendEmail, $Phone);
				$passwordDecode = dataDecode($password);
				
				require_once('../phpmailer/class.phpmailer.php');
				mb_internal_encoding("UTF-8");
				
				$mail = new PHPMailer(); // create a new object
				$mail->IsSMTP(); // enable SMTP
				$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
				$mail->SMTPAuth = true; // authentication enabled
				$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
				$mail->Host = "smtp.gmail.com";
				$mail->Port = 465; // or 587
				$mail->IsHTML(true);
				$mail->Username = "foxconn021472@gmail.com";//google帳戶
				$mail->Password = "foxconn88";// google密碼
				$mail->SetFrom =("foxconn021472@gmail.com");
				$mail->Subject = "MAPSs客服服務-密碼提醒";//信件內容主題
				$mail->Body = "您好這裏是MAPs客服，您的密碼是 : ".$passwordDecode;//信件內容;
				$mail->AddAddress($sendEmail);//收件人信箱
				if(!$mail->Send())
				{
					//echo "寄件失敗";
					$data = array(
						'message'=>'sendFail'
					);
					echo json_encode($data);
				}
				else
				{
					//echo "密碼已寄出";
					$data = array(
						'message'=>'sendSuccess'
					);
					echo json_encode($data);
				}
			}
			else{
				//echo " 請確認資料是否正確";
				$data = array(
					'message'=>'noAccount'
				);
				echo json_encode($data);
			}
		}
		else{
			if(!$tel&&$mail){
				//$_SESSION["create_result"]=-1;
				//echo "請確認手機號碼資料是否正確";
				$data = array(
					'message'=>'errorPhone'
				);
				echo json_encode($data);
			}
			if($tel&&!$mail){
				//$_SESSION["create_result"]=-1;
				//echo "請確認信箱資料是否正確";
				$data = array(
					'message'=>'errorMail'
				);
				echo json_encode($data);
			}
			if(!$tel&&!$mail){
				//$_SESSION["create_result"]=-1;
				//echo "請輸入正確的信箱和手機號碼資料";
				$data = array(
					'message'=>'errorAll'
				);
				echo json_encode($data);
			}
		}
	}
?>