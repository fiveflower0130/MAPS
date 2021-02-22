<?php
	include_once('./lib/QrReader.php');
	$file = 'com_foxconn_cnsbg_it_maps_app209.png';
	$qrcode = new QrReader($file);
	print $text = $qrcode->text();
?>