<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="style.css">
	<title>Форма регистрации</title>
</head>
<body>
	<div class="form-signin">
        <h2>Форма Регистрации</h2>
		<?php
			if($_COOKIE['user'] == ''):
		?>
        <div class="login">
            <h2 class="nonactive"> sign in </h2>
            <h2 class="active"> sign up </h2>
		<form action="registration.php" method="post">
			<input type="email" class="text" name="login" id="login" placeholder="Введите логин"><br>
			<input type="text" class="text" id="name" name="name" placeholder="Введите имя"><br>
			<input type="password" class="text" name="pass" id="pass" placeholder="Введите пароль"><br>
			<button class="form-signin">Отправить</button>

            <hr>
            <a href="sign-in.php">Авторизироваться!</a>
        </form>
	<?php else:?>

		<p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">сюда</a></p>
	<?php endif;?>
	</div>

</body>
</html>
<x></x>