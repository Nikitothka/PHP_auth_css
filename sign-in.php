<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Форма входа</title>
</head>
<body>
	<div class="form-signin">
		<h2>Форма входа</h2>
        <div class="login">
            <h2 class="active"> sign in </h2>

            <h2 class="nonactive"> sign up </h2>
            <form action="registration.php" method="post">
			<input type="text" class="text" name="login" id="login" placeholder="Введите логин"><br>
			<input type="password" class="text" name="pass" id="pass" placeholder="Введите пароль"><br>
			<button class="form-signin" type="submit">Войти</button>
                <hr>

            <a href="index.php">Зарегестрироваться!</a>
            </form>
	</div>
</body>
</html>