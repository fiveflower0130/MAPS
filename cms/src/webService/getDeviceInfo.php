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
		$msgCode= $json->{"msgCode"};
		$count = count($json->deviceList);
	    
	  	if($msgCode!=0){
	  		$message = "資料無法顯示 請確認網路是否穩定";
	  		echo "<script>";
				echo "alert('".$message."')";
			echo "</script>"; 
	  	}
	  	else{
	  		foreach($json->deviceList as $mydata)
    		{
        		echo "<tr class=''>";
					echo "<td>".$mydata->deviceNo."</td>";
					echo "<td>".$mydata->deviceOS."</td>";
					echo "<td>".$mydata->uuid."</td>";
					echo "<td><input type='checkbox' name='addPush[]' id='addPush' value ='".$mydata->uuid."' ></td>";
				echo "</tr>";
       		}	
	  	}
    	//return $json;
	}
	getDeviceInfo($appToken, $user, $encodePassword);	
?>
