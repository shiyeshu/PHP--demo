<?php 
session_start();
if (!isset($_SESSION['username'])) {
	header('Location:index.php');
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
 </head>
 <body>
THIS IS :<?php echo $_SESSION['username']; ?>
<a href="b.php"><input type="button" name="" value="删除session"></a>
 </body>
 </html>
