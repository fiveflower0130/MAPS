<?php
	session_start();
	if(!empty($_SESSION['login_user']))
	{
		$_SESSION['login_user']='';
		session_destroy();
	}
	//header("Location: signin.php");
?>
<!DOCTYPE html>

<html>
<head>

</head>
<body>
	<script language="JavaScript">
		window.location.replace("signin.php");
	</script>
</body>
</html>