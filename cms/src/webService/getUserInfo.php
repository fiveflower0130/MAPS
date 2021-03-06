<?php
	header("Content-Type: text/html; charset=utf-8");
	
	function getAppUserInfo($email, $password){
		$serviceUrl = "http://maps_internal_portal:81/axis2/services/MAPsService/getAppUserInfo";
		$phone = '';
		$ch = curl_init();
 
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
    	
    	//print_r($result);
		//json decode
		$json = json_decode($result[1]);
		$msgCode= $json->{"msgCode"};
		$Email = $json->{"email"};
		$Phone = $json->{"phone"};
		//$count = count($json->appList);
		return array($Email, $Phone);
	}
	
	$data = getAppUserInfo($user, $password);
	$getUserEmail = $data[0];
	$getUserPhone = $data[1];			
?>
