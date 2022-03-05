<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="Style.css">

</head>
<body>
	<div class="frmDronpDown">

		<div class="row">
<center>
	<form action="forgetpass.php" method="POST">
	<div class="frmDronDown"
	<h2 style="font-size: 25px; color: blue;">Forget Password</h2>
	<?php if (isset($_GET['error'])) { ?>
	<p class="error"><?php echo $_GET['error']; ?> </p>
<?php }  ?>

<?php if (isset($_GET['sucesss'])) { ?>
	<p class="sucesss"><?php echo $_GET['sucesss']; ?> </p>
<?php }  ?>

<div class="row">
<label></label>
<?php if (isset($_GET['name'])) { ?>
<input type="text" name="Email" value="<?php echo $_GET['uname']; ?>" />
<?php }else{ ?>
<input type="text" name="Email" placeholder="Email">
<?php }?>
    <footer id="footer">
    	<input type="Submit" name="submit" value="Submit">
    </footer>

	</div>
	</form>
  </center>
</div>
</div>
</body>
</html>