<!DOCTYPE html>
<html>
<head>
			<link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
			<meta charset="UTF-8" />
	<title></title>
</head>
<body>
	<div class="container">
	<table class="table table-striped table-bordered">
			<tr><th>id</th>
				<th>标题</th>
				
				<th>时间</th>
				<th>操作</th>

			</tr>

			<?php 
			session_start();
if (!isset($_SESSION['username'])) {
		
header('Refresh:0,Url=error.html');
}

        echo '<tr>';
		echo "<td>1</td>";
		echo "<td>2</td>";
	
		echo "<td>3</td>";
		echo '<td><div class="btn-group"><a href="edit.php"><input class="btn btn-primary " type="button" name="chaxun" value="编辑"></a></div></td>';
echo "</tr>";?>


		</table>
	</div>
	<center>
		<div><a href="out.php"><button class="btn btn-primary " type="button" value="">退出后台</button></a></div></center>
</body>
</html>