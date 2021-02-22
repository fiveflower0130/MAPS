<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	/*$service_url = "";
	function __constructor() {
		$this->service_url = $this->config[''];
	}*/
	//檢視signin 的動作
	public function checkAppUser($email, $password, $phone)
	{
		//$serviceUrl = "https://maps_internal_portal/axis2/services/MAPsService/checkAppUser";
		$serviceUrl = "https://10.63.3.150/axis2/services/MAPsService/checkAppUser";
		//$this->load->helper('decodeEncode');
		//$encodeData = dataEncode($password);
		$ch = curl_init();
 
		//set curl options 設定你要傳送參數的目的地檔案
		curl_setopt($ch, CURLOPT_URL, $serviceUrl);
		curl_setopt($ch, CURLOPT_HEADER, false);   
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		
		//避開憑證檢驗
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
 		
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
		return $result;
		
	}
	
}

?>