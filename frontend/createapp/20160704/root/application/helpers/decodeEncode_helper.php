<?php
	function dataEncode($data)
	{	
		//$encodePassword = base64_encode($data);
		$possible = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$str = "";
		while(strlen($str)<8){
			$str .=substr($possible, rand(0, strlen($possible)), 1);
		}
		
		$encodeAllData = base64_encode($data.$str);
		return $encodeAllData;
	}
	
	function dataDecode($data)
	{
		//$decodeData = base64_decode($data);
		$getReallyCode = substr($data, 0, -8);
		$decodePassword = base64_decode($getReallyCode);
		
		return $decodePassword;
	}	
?>