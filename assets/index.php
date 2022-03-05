 <!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<form action="login.php" method="POST">
		<?php  if (isset($_GET['error'])) { ?>
			<p class="error"><?php  echo $_GET['error']; ?></p>
		<?php  } ?>

		<?php if (isset($_GET['sucesss'])) { ?>
	<p class="sucesss"><?php echo $_GET['sucesss']; ?> </p>
<?php }  ?>
		<h2>LOGIN</h2>
		<label>User Name</label>
		<input type="text" name="uname" placeholder="User Name"/><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"/>
		<a class="lin" href="forgotpass.php">Forget Password</a>
		<button type="Submit" name="Submit">Login</button>
	</form>
</body>
</html> 