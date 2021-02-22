<?php
	
    header("Content-Type: text/html; charset=utf-8");
	//include("src/dbconnect/connCMS.php");
	
	$name = $_POST["name"];
	//find device total count
	$sql_query = "SELECT * FROM `".$name."`";
	$result = mysql_query($sql_query);
	$total_records = mysql_num_rows($result);
	
	//find device ios count
	$sql_ios = "SELECT * FROM `".$name."` WHERE `Device_OS` = 'iOS'";
	$iosresult = mysql_query($sql_ios);
	$total_ios = mysql_num_rows($iosresult);
	$iOS = (int)$total_ios;
	
	//find device Android count
	$sql_Android = "SELECT * FROM `".$name."` WHERE `Device_OS` = 'Android'";
	$Androidresult = mysql_query($sql_Android);
	$total_Android = mysql_num_rows($Androidresult);
	$Android = (int)$total_Android;
		
		if($total_records>0)
		{
			//make json array
			/*
			$resp = array(
      		array('label' => 'iOS', 'value' => $iOS),
      		array('label' => 'Android', 'value' => $Android)
			);*/
			$resp = array(
      			array('iOS', $iOS),
      			array('Android',$Android)
			);
	
			//output to json style
			echo json_encode( $resp );
		}
		else
		{
			$resp = array(
      			array('無會員資料', 0)
			);
	
			//output to json style
			echo json_encode( $resp );
		}
?>