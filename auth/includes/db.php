<?php 
	
	$link = false;

	$hostname	= "localhost";
	$user			= "root";
	$password	= "root";
	$dbname		= "auth";


	function opendb()
	{
		global $hostname, $user, $password, $dbname, $link;
		$link = mysqli_connect($hostname, $user, $password, $dbname);
		if(!$link){
			echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
		   echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
		   echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
		   exit;
		}
	}

	function closedb()
	{
		global $link;
		mysqli_close($link);
	}

	function reg_user($nam, $pass)
	{
		global $link;
		opendb();
		$query = "INSERT INTO `users` (`name`, `passw`) VALUES ('$nam', '$pass')";

		if (!mysqli_query($link, $query)) {
		  printf("Ошибка: %s\n", mysqli_error($link));
		}else{
			echo "Вы зарегистрированы!";
		}

		closedb();
	}

	function count_user($value='')
	{
		global $link;
		opendb();
		$query = "SELECT name FROM `users` WHERE `name` = '$value'";



		if ($result = mysqli_query($link, $query)) {
		    $counter = mysqli_num_rows($result);



		    /* извлечение ассоциативного массива */
//		    while ($row = mysqli_fetch_assoc($result)) {
//		        echo $row["counter"];
//		    }

		    /* удаление выборки */
		    mysqli_free_result($result);

		}
		closedb();
		return $counter;
	}


	function have_user($n, $p)
	{
		global $link;
		opendb();
		$query = "SELECT name FROM `users` WHERE `name` = '$n' AND `passw` = '$p'";

		if ($result = mysqli_query($link, $query)) {
		    $counter = mysqli_num_rows($result);
		    /* удаление выборки */
		    mysqli_free_result($result);
		}
		closedb();
		if ($counter > 0){
			return true;	
		}else{
			return false;
		}
		
	}



 ?>