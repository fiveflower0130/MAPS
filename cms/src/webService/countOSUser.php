<?php
header("Content-Type: text/html; charset=utf-8");

	
	function getDeviceInfo($token, $email, $password){
		$appOS = "both";
		$serviceUrl = "http://maps_internal_portal:81/axis2/services/MAPsService/getDeviceInfoByDeviceOS";
	
		$ch = curl_init();
 
		//set curl options 設定你要傳送參數的目的地檔案
		curl_setopt($ch, CURLOPT_URL, $serviceUrl);
		curl_setopt($ch, CURLOPT_HEADER, false);   
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 
		$post_data = array(
			'appToken' => $token,
			'deviceOS' => $appOS,
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
		$output =explode("</ns:return>",$returnData);
		$result = explode("<ns:return>",$output[0]); 
    
		//json decode
		$json = json_decode($result[1]);
		$count = count($json->deviceList);
		$countIOS = 0;
		$countAndroid = 0;
	
		//echo $json->deviceList[0]->deviceOS;
		foreach($json->deviceList as $mydata)
    	{
        	switch($mydata->deviceOS)
        	{
        		case "iOS":
        			$countIOS = $countIOS+1; 
        		break;
        		case "Android":
        			$countAndroid = $countAndroid+1;
        		break;
        	}
    	}
    	
    	return array($count, $countIOS, $countAndroid);
	}
	
	$countData =  getDeviceInfo($appToken, $user, $encodePassword);
	$countAll = $countData[0];
	$countIOS = $countData[1];
	$countAndroid = $countData[2];
			
?>
