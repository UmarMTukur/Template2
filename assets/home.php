<?php
session_start();
include 'db_conn.php';

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	 <h1>Hello, <?php echo $_SESSION['name']; ?></h1><br/>
	 <a href="logout.php">Logout</a>
</body>
</html>

<?php
}else{
	header("Location: index.php");
	exit();
}
?> 