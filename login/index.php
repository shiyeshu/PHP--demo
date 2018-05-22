
<?php
@$password=$_POST['password'];
if ($_POST["password"] = $password) {
	session_start();
	$_SESSION['username'] = $password;
	header("Location: admin.php");
} else {
	echo "密码错误或未输入";
}
?>