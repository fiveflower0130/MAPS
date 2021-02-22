<?php
	$db_host = maps_database;
	//$db_host = "172.19.225.22";
	$db_username = "root";
	$db_password = "Foxconn";
	$db_name = "Notification Pusher";
	
	if (!@mysql_connect($db_host, $db_username, $db_password))
	{ 
		die("資料連結失敗！");
	}
	mysql_select_db($db_name);
	if (!@mysql_select_db($db_name))
	{
		die("資料庫選擇失敗！");
	}
	mysql_query("SET NAMES 'utf8'");
?>