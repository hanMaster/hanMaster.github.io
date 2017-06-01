<?php 
	require "db.php";
	session_start(); 

	$msg = "Привет!";
	$data = $_POST;

	if(isset($data['do_reg']))
	{
		$name = trim($data['user']);
		$pass = $data['passw'];

		if(strlen($name) < 2)
		{
			$msg = "Имя слишком короткое!";
		}
		elseif(count_user($name) > 0)
		{
			$msg = "Такой пользователь уже зарегистрирован!";
		}
		else
		{
			reg_user($name,$pass);	
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
				<input type="submit" value="Зарегистрировать" name="do_reg">
			</p>


		</form>
	</div>

	<br>
	<p><?=$msg?></p>


</body>
</html>
