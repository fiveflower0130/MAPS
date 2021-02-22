<?php
	header("Content-Type: text/html; charset=utf-8");
	//sleep(1);
	
	if(isset($_POST['email'])&&isset($_POST['About']))
	{
		$sendAbout = $_POST['About'];
		$sendfromUser = $_POST['email'];
		
		require_once('../phpmailer/class.phpmailer.php');
		mb_internal_encoding("UTF-8");
		
		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "foxconn021472@gmail.com";//google帳戶
		$mail->Password = "foxconn88";// google密碼
		$mail->From = $sendfromUser;
		$mail->FromName =  "顧客";
		$mail->Subject = "MAPs顧客".$sendfromUser."的意見";//信件內容主題
		$mail->Body = $sendAbout;//信件內容;
		$mail->AddAddress("appmaker.service@gmail.com");//收件人信箱
 		if(!$mail->Send())
    	{
			//echo "寄件失敗 請重新傳送";  
			$data = array(
					'message' => 'sendFail'
				);
				echo json_encode($data);
    	}
    	else
    	{
			//echo "信件已寄出 感謝您的來信";
			$data = array(
					'message' => 'sendSuccess'
				);
				echo json_encode($data);
    	}
	}
?>