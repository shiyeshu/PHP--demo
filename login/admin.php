<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header('Location:index.html');
}



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h1><?php echo $_SESSION['username'];?>,欢迎登陆</h1>
 <a href="a.php"><input type="button" name="" value="下一个页面"></input>
 </body>
 </html>