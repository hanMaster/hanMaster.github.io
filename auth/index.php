<?php session_start();  ?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="your name here">
        <link rel="stylesheet" href="style.css">
        <title>Main page</title>
    </head>
<body>
	<div class="container">
	<a href="auth/includes/login.php">Login</a>
	<br>
	<a href="auth/includes/reg.php">Register</a>
	<br>
	<a href="auth/includes/logout.php">Logout</a>

	<hr>
		<?php
			if(isset($_SESSION['loged_user']))
		 	{
		 		$name = $_SESSION['loged_user'];
		 		echo "Hello, $name";
		 	}
		 ?>
	</div>

</body>
</html>
