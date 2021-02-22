<?php
	function checkAppUserResult($code, $result)
	{
		switch($code){
			case 0:
				if($result == "true")
				{
					$_SESSION['login_user']=$email; //Storing user session value.
					$this->load->helper('decodeEncode');
					$encodeData = dataEncode($password);
					$_SESSION['login_password']=$encodeData;
					if(isset($remember)&&($remember == "true"))
					{
						setcookie("remUser", $email, time()+365*24*60, "/", null, true, true);
						setcookie("remPass", $encodeData, time()+365*24*60, "/", null, true, true);
					}
					else{
						if(isset($_COOKIE["remUser"])||isset($_COOKIE["remPass"]))
						{
							setcookie("remUser", $email, time()-100, "/", null, true, true);
							setcookie("remPass", $encodeData, time()-100, "/", null, true, true);
						}
					}
					$data = array(
						'message'=>'loginSuccess'
					);
					exit (json_encode($data));
				}
				else
				{
					$data = array(
						'message'=>'loginFail'
					);
					exit (json_encode($data));
				}
			break;
			case 404:
				$data = array(
						'message'=>'failSignIn404'
					);
					return json_encode($data);
			break;
			case 412:
				$data = array(
						'message'=>'failSignIn412'
					);
					return json_encode($data);
			break;
			case 500:
				$data = array(
						'message'=>'failSignIn500'
					);
					return json_encode($data);
			break;
			case 502:
				$data = array(
						'message'=>'failSignIn502'
					);
					return json_encode($data);
			break;
			}
	}

?>