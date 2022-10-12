<?php
	$login = htmlspecialchars($_POST['login'] ?? '');

	$name = htmlspecialchars($_POST['name'] ?? '');

	$pass = htmlspecialchars($_POST['pass'] ?? '');

	if (strlen($login) < 4 || strlen($login) > 50) {
		echo "Недопустимая длина логина!";
		exit();
	} else if (mb_strlen($pass) < 5 || mb_strlen($pass) > 40) {
		echo "Недопустимая длина пароля!";
		exit();
	}

	$pass =  password_hash($pass, PASSWORD_BCRYPT);

	$mysql = new mysqli(
		'localhost', 
		'root', 
		'root', 
		'main'
	);

	$q = "INSERT INTO `users` (`name`, `login`, `hash`) VALUES ('$name', '$login', '$pass')";

	if (mysqli_query($mysql, $q)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: ".$q."<br>".mysqli_error($mysql);
	}
	mysqli_close($mysql);

	setcookie('user', $_POST['name'], time() + 3600, "/");

	header('Location: /success.php');
?>