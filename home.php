<?php

session_start();  

if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="container">
		<h2 class="text-center text-warning"> Welcome <?php echo $_SESSION['username']; ?> </h2>
		<a href="logout.php">LOGOUT</a>
	</div>

</body>
</html>