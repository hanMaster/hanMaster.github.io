<?php 
	require "db.php";
	session_start(); 

	$msg = "Привет!";
	$data = $_POST;

	if(isset($data['do_login']))
	{
		$name = trim($data['user']);
		$pass = $data['passw'];

		if(have_user($name, $pass))
		{
			$_SESSION['loged_user'] = $name;
			header("Location: /");
		}
		else
		{
			$msg = "No such user, sorry";	
		}

	}




?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="your name here">
        <link rel="stylesheet" href="style.css">
        <title>Register</title>
    </head>
<body>
	<div class="container">
		<form  method="POST">
			<p><input type="text" name="user" id="user" placeholder="Введите имя" ></p>
			<p><input type="password" name="passw" id="passw" placeholder="Введите пароль" ></p>
			<p>
				<input type="submit" value="Вход" name="do_login">
			</p>


		</form>
	</div>

	<br>
	<p><?=$msg?></p>



    <!-- <p>Today is <?php echo date('l jS \of F Y h:i:s A'); ?>.</p> -->


</body>
</html>
