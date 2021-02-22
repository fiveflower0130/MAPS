<?php
	if(empty($_SESSION['login_user']))
	{
		header('Location: signin.php');
	}
?>