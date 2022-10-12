<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

	<title>Успешно</title>
</head>
<body>
	<div class="login">
        <?php ?>
			<p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a style="color: floralwhite" href="/exit.php">сюда</a></p>
        <?php ?>
	</div>
</body>
</html>
