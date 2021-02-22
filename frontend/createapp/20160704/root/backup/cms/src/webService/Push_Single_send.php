<?php
	header("Content-Type: text/html; charset=utf-8");
	//sleep(1);
	
	function pushNotificationByUuid($token, $list, $message, $link, $email, $password, $time){
		$serviceUrl = "http://maps_internal_portal:81/axis2/services/MAPsService/pushNotificationByUuid";
		
		//init curl
		$ch = curl_init();
 
		//set curl options 設定你要傳送參數的目的地檔案
		curl_setopt($ch, CURLOPT_URL, $serviceUrl);
		curl_setopt($ch, CURLOPT_HEADER, false);   
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 
		//post選項
		$post_data = array(
			'appToken' => $token,
			'uuidList' => $list,
			'message' => $message,
			'link' => $link,
			'endTime' => $time,
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
	
		switch($msgCode){
			case 0:
				$data = array(
					'message' => 'pushSuccess'
				);
				echo json_encode($data);
			break;
			case 404:
				$data = array(
					'message' => 'pushFail404'
				);
				echo json_encode($data);
			break;
			case 412:
				$data = array(
					'message' => 'pushFail412'
				);
				echo json_encode($data);
			break;
			case 500:
				$data = array(
					'message' => 'pushFail500'
				);
				echo json_encode($data);
			break;
			case 503:
				$data = array(
					'message' => 'pushFail503'
				);
				echo json_encode($data);
			break;
			default:
				$data = array(
					'message' => 'allFail'
				);
				echo json_encode($data);
		}
	}
	
	if(isset($_POST['pushMessage'])&&isset($_POST['pushLink'])&&isset($_POST['appToken'])&&isset($_POST['pushChecked'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['endTime'])&&isset($_POST['timeZone'])){
		$timeZone = $_POST["timeZone"];
		date_default_timezone_set($timeZone);
		$appToken = $_POST["appToken"];
		$addPush = $_POST ["pushChecked"];//push的uuid
		$pushMessage = $_POST["pushMessage"];//push的訊息
		$pushLink = $_POST["pushLink"];//push的連結
		$email = $_POST['email'];
		$password = $_POST['password'];
		$time = $_POST['endTime'];
		$endTimeStamp = strtotime($time."+1 day")* 1000;
		
		if(!empty($addPush))
		{
			pushNotificationByUuid($appToken, $addPush , $pushMessage, $pushLink, $email, $password, $endTimeStamp);
		}
		else{
			$data = array(
					'message' => 'uuidEmpty'
				);
				echo json_encode($data);
		}
	}
	else{
		$data = array(
					'message' => 'catchDataFail'
				);
				echo json_encode($data);
	}	
?>
