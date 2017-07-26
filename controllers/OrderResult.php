<!DOCTYPE html>
<html>
<head>
	<title>Order Success</title>
</head>
<body>

	<div style="text-align:center;">
		<h2><span style="color:#2fb3e0">Congratulations!!!</span> <span style="color:#2fb3e0">Order Submitted Successfully !!!</span></h2>
		<h3>Order another one</h3>
		<form action="" method="post">
			<input type="submit" name="login" value="Home">
		</form>
	</div>
	<?php
	if($_POST){
		header("Location:../index.php");
	}
	?>
</body>
</html>
