<?php
	header("Content-Type: text/html; charset=utf-8");
	
	$email = $_SESSION['login_user'];
	$password = $_SESSION['login_password'];
	//$encodeData = dataEncode($password);
	
	$serviceUrl = "http://maps_internal_portal:81/axis2/services/MAPsService/getBindingApp";
	
	$ch = curl_init();
 
	//set curl options 設定你要傳送參數的目的地檔案
	curl_setopt($ch, CURLOPT_URL, $serviceUrl);
	curl_setopt($ch, CURLOPT_HEADER, false);   
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 		
	$post_data = array(
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
    	
    //print_r($result);
	//json decode
	$json = json_decode($result[1]);
	$msgCode= $json->{"msgCode"};
	$count = count($json->appList);
		
	/*
	foreach($json->appList as $mydata)
    {
        $appId = $mydata->appId;
        $appName = $mydata->appName;
        $appToken = $mydata->appToken;
        $uuidType = $mydata->uuidType;
        $indexUrl = $mydata->indexUrl;
        	
        echo "<li>";
		echo "<a href='Maps_App_Data.php?id=".$appId."&name=".$appName."&token=".$appToken."&uuidtype=".$uuidType."' data-transition='slide' >";		
		echo "<img src='../images/AppIcon/".$appId.".jpg'>";
		echo "<h1>".$appName."</h1>";
		echo "<p>首頁：".$indexUrl."</p>";
		echo "</a>";
		echo "</li>";
    }
	*/	
			
?>
