<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>

</body>
</html>
<?php
$password="123456";
if ($_POST["password"] == $password) {
	session_start();
	$_SESSION['username'] = $password;
	header("Location:/admin/admin.php");
} else {
	echo "密码错误或未输入,请手动返回上一页面";

	
}



  ?>