<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function signin()
	{
		//header("Content-Type: text/json; charset=utf-8");
		
		header("Content-Type: text/html; charset=utf-8");
		// Prevents javascript XSS attacks aimed to steal the session ID
		ini_set("session.cookie_httponly", 1);
		// Session ID cannot be passed through URLs
		ini_set('session.use_only_cookies', 1);
		// Uses a secure connection (HTTPS) if possible
		ini_set('session.cookie_secure', 1);
		
		session_start();
		
		//loginin是否已經登入的判斷
		if(isset($_SESSION['login_user'])&&!empty($_SESSION['login_user']))
		{
			//header('Location:/cms/maps_app');
		}
		
		$password = $this->input->post('password');
		$phone = "";
		$remember = $this->input->post('rememberme');
		$email = $this->input->post('email');
		//echo json_encode(array('message' => -1));
		//return;
		$this->load->helper('decodeEncode');
		$encodeData = dataEncode($password);
		
		# check rememberme
		if($remember == "true")
		{
			setcookie("remUser", $email, time()+365*24*60, "/", null, true, true);
			setcookie("remPass", $encodeData, time()+365*24*60, "/", null, true, true);
		}
		else
		{
			if(isset($_COOKIE["remUser"])||isset($_COOKIE["remPass"]))
			{
				setcookie("remUser", $email, time()-100, "/", null, true, true);
				setcookie("remPass", $encodeData, time()-100, "/", null, true, true);
			}
		}
		
		# check input-
		if($password == '' || $email == '' || $remember == '') 
		{
			$this->load->view('cms/common/header');
			$this->load->view('cms/signin');
			$this->load->view('cms/common/footer');
			return;
		}
		# user login
		$this->load->model("user_model");
		$tmp = $this->user_model->checkAppUser($email, $encodeData, $phone);
		
		# process return value
		$json = json_decode($tmp[1]);
		$msgCode= $json->{"msgCode"};
		$checkResult= $json->{"result"};
		
		//echo $msgCode."&".$checkResult;
		# login Fail with msgCode
		if ($json->{"msgCode"} != 0)
		{
			exit(json_encode(array('message' => $json->{"msgCode"})));
		}
		# login fail with Result = false
		if ($json->{"result"} == "false" )
		{
			exit (json_encode(array('message' => -1)));
		}

		# process login success
		$_SESSION['login_user']=$email; //Storing user session value.
		$_SESSION['login_password']=$encodeData;
		
		exit (json_encode(array('message' => 0)));
		
		$this->load->view('cms/common/header');
		$this->load->view('cms/signin');
		$this->load->view('cms/common/footer');
	
	}
	public function binding()
	{
		header("Content-Type: text/html; charset=utf-8");
		session_start();
		#include("src/webService/decodeEncode.php");
		
		#$getData = $_GET['data'];
		#$decodeData = dataDecode($getData);
		#$returnData = explode("&", $decodeData);
		
		#$appID = substr($returnData[0],3);
		#$appOS = substr($returnData[1],3);
		
		#$data = "id=".$appID."&os=".$appOS; 
		#$encodeData = dataEncode($data);
		#echo "123";
		$this->load->view('cms/common/header');
		$this->load->view('cms/binding');
		$this->load->view('cms/common/footer');
	}
	
	public function help()
	{
		header("Content-Type: text/html; charset=utf-8"); 
		session_start();
		$this->load->view('cms/common/header');
		$this->load->view('cms/help');
		$this->load->view('cms/common/footer');
	}
	
	public function create()
	{
		header("Content-Type: text/html; charset=utf-8");
		session_start();
		#include("src/webService/decodeEncode.php");
		
		#$getData = $_GET['data'];
		#$decodeData = dataDecode($getData);
		#$returnData = explode("&", $decodeData);
		
		#$appID = substr($returnData[0],3);
		#$appOS = substr($returnData[1],3);
		
		#$data = "id=".$appID."&os=".$appOS; 
		#$encodeData = dataEncode($data);
		$this->load->view('cms/common/header');
		$this->load->view('cms/create');
		$this->load->view('cms/common/footer');
	}
	
	public function maps_app()
	{
		header("Content-Type: text/html; charset=utf-8"); 
		ini_set("session.cookie_httponly", 1);
		// Session ID cannot be passed through URLs
		ini_set('session.use_only_cookies', 1);
		// Uses a secure connection (HTTPS) if possible
		ini_set('session.cookie_secure', 1);
	
		session_start();
		#include("sessionCheck.php");
		#include("src/webService/countBindingApp.php");
		#include("src/webService/decodeEncode.php");
		#$user= $_SESSION['login_user'];
		#$user_password = $_SESSION['login_password'];
		#$password = dataDecode($user_password);
		$this->load->view('cms/commonJqueryMobile/header');
		$this->load->view('cms/maps_app');
		$this->load->view('cms/commonJqueryMobile/footer');
	}
	
	public function maps_about()
	{
		header("Content-Type: text/html; charset=utf-8");
		session_start();
		#include("sessionCheck.php");
		#include("src/webService/decodeEncode.php");
		#$getData = $_GET['data'];
		#$decodeData = dataDecode($getData);
		#$returnData = explode("&", $decodeData);
		#$user = substr($returnData[0],5);
		#$password = substr($returnData[1],9);
		#include("src/webService/getUserInfo.php");
		$this->load->view('cms/commonJqueryMobile/header');
		$this->load->view('cms/maps_about');
		$this->load->view('cms/commonJqueryMobile/footer');
	}
	
	public function maps_data()
	{
		header("Content-Type: text/html; charset=utf-8");
		session_start();
		#include("sessionCheck.php");
		#include("src/webService/decodeEncode.php");
		#include("src/php_qrcode_detector/lib/QrReader.php");
		
		#$getData = $_GET['data'];
		#$decodeData = dataDecode($getData);
		#$returnData = explode("&", $decodeData);
		
		#$appId = substr($returnData[0],3);
		#$appName = substr($returnData[1],5);
		#$appToken = substr($returnData[2],6);
		#$uuidType = substr($returnData[3],9);
		#$user = substr($returnData[4],5);
		#$password = substr($returnData[5],9);
		#$encodePassword = dataEncode($password);
		
		#$data = "id=".$appId."&name=".$appName."&token=".$appToken."&uuidtype=".$uuidType."&user=".$user."&password=".$password; 
		#$encodeData = dataEncode($data);
		
		#$file = '../custom_apps/qrcode/'.$appId.'.png';
		#$qrcode = new QrReader($file);
		#$text = $qrcode->text();
		
		#include("src/webService/countOSUser.php");
		$this->load->view('cms/commonJqueryMobile/header');
		$this->load->view('cms/maps_data');
		$this->load->view('cms/commonJqueryMobile/footer');
	}
	
	public function maps_pushAll()
	{
		header("Content-Type: text/html; charset=utf-8");
		session_start();
		#include("sessionCheck.php");
		#include("src/webService/decodeEncode.php");
		
		#$getData = $_GET['data'];
		#$decodeData = dataDecode($getData);
		#$returnData = explode("&", $decodeData);
		
		#$appId = substr($returnData[0],3);
		#$appName = substr($returnData[1],5);
		#$appToken = substr($returnData[2],6);
		#$uuidType = substr($returnData[3],9);
		#$user = substr($returnData[4],5);
		#$password = substr($returnData[5],9);
		#$encodePassword = dataEncode($password);
		
		#$data = "id=".$appId."&name=".$appName."&token=".$appToken."&uuidtype=".$uuidType."&user=".$user."&password=".$password; 
		#$encodeData = dataEncode($data);
		$this->load->view('cms/commonJqueryMobile/header');
		$this->load->view('cms/maps_pushAll');
		$this->load->view('cms/commonJqueryMobile/footer');
	}
	
	public function maps_pushFans()
	{
		header("Content-Type: text/html; charset=utf-8");
		session_start();
		/*
		include("sessionCheck.php");
		include("src/webService/decodeEncode.php");
		
		$getData = $_GET['data'];
		$decodeData = dataDecode($getData);
		$returnData = explode("&", $decodeData);
		
		$appId = substr($returnData[0],3);
		$appName = substr($returnData[1],5);
		$appToken = substr($returnData[2],6);
		$uuidType = substr($returnData[3],9);
		$user = substr($returnData[4],5);
		$password = substr($returnData[5],9);
		$encodePassword = dataEncode($password);
		
		$data = "id=".$appId."&name=".$appName."&token=".$appToken."&uuidtype=".$uuidType."&user=".$user."&password=".$password; 
		$encodeData = dataEncode($data);
		*/
		$this->load->view('cms/commonJqueryMobile/header');
		$this->load->view('cms/maps_pushFans');
		$this->load->view('cms/commonJqueryMobile/footer');
	}
	
	public function maps_pushSingle()
	{
		header("Content-Type: text/html; charset=utf-8");
		session_start();
		/*
		include("sessionCheck.php");
		include("src/webService/decodeEncode.php");
		
		$getData = $_GET['data'];
		$decodeData = dataDecode($getData);
		$returnData = explode("&", $decodeData);
		
		$appId = substr($returnData[0],3);
		$appName = substr($returnData[1],5);
		$appToken = substr($returnData[2],6);
		$uuidType = substr($returnData[3],9);
		$user = substr($returnData[4],5);
		$password = substr($returnData[5],9);
		$encodePassword = dataEncode($password);
		
		$data = "id=".$appId."&name=".$appName."&token=".$appToken."&uuidtype=".$uuidType."&user=".$user."&password=".$password; 
		$encodeData = dataEncode($data);
		*/
		$this->load->view('cms/commonJqueryMobile/header');
		$this->load->view('cms/maps_pushSingle');
		$this->load->view('cms/commonJqueryMobile/footer');
	}
}
