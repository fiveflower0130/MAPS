<?php
	session_start();
	
	if(!empty($_SESSION['login_user']))
	{
		$_SESSION['login_user']='';
		session_destroy();
	}
?>
<!DOCTYPE html>

<html>
<head>

</head>
<body>
	<script language="JavaScript">
		window.location.replace("../index.php");
	</script>
</body>
</html>
