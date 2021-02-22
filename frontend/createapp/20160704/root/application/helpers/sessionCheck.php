<?php
	function session_judge()
	{
		if(isset($_SESSION['login_user'])&&!empty($_SESSION['login_user']))
		{
			header('Location:/cms/maps_app');
		}
	}
	
	function session_check()
	{
		if(empty($_SESSION['login_user']))
		{
			header('Location: cms/signin');
		}
	}
	
	function session_destroy()
	{
		if(!empty($_SESSION['login_user']))
		{
			$_SESSION['login_user']='';
			session_destroy();
			header('Location: signin');
		}
	}
?>