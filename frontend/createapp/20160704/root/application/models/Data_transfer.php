<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_transfer extends CI_Controller {
	
	public function dataEncode($data)
	{	
		$encodePassword = base64_encode($data);
		$possible = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$str = "";
		while(strlen($str)<8){
			$str .=substr($possible, rand(0, strlen($possible)), 1);
		}
		
		$encodeAllData = base64_encode($encodePassword.$str);
		return ($encodeAllData);
	}
	
	public function dataDecode($data)
	{
		$decodeData = base64_decode($data);
		$getReallyCode = substr($decodeData, 0, -8);
		$decodePassword = base64_decode($getReallyCode);
		
		return $decodePassword;
	}
}
?>