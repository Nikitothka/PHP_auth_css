<?php
	$mysql = new mysqli(
		'localhost', 
		'root', 
		'root', 
		'main'
	);
	$login = htmlspecialchars($_POST['login'] ?? '');
	$pass = htmlspecialchars($_POST['pass'] ?? '');

	$select_sql = "SELECT * FROM `users` WHERE `login` = '$login'";

	if (mysqli_query($mysql, $select_sql)) {
        $result = mysqli_query($mysql, $select_sql);
        $user = $result->fetch_assoc();
        $hash = $user['hash'];
        if (count($user) == 0) {
            echo 'Такого логина в системе нет! <a href="sign-in.php">Повторить</a>';
        } else {
            if (password_verify($pass, $hash)) {
                setcookie('user', $user['name'], time() + 3600, "/");
                echo "New record created successfully";
            } else {
                echo 'Неверные данные! <a href="sign-in.php">Повторить</a>';
                exit();
            }

        }
    }
//
//	$select_sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `hash` = '$pass'";
//
//	if (mysqli_query($mysql, $select_sql)) {
//		$result = mysqli_query($mysql, $select_sql);
//		$user = $result->fetch_assoc();
//		if (count($user) == 0){
//			echo 'Такой пользователь не найден! <a href="sign-in.php">Повторить</a>';
//			exit();
//		}
//
//		setcookie('user', $user['name'], time() + 3600, "/");
//
//    	echo "New record created successfully";
    else {
    	echo "Error: ".$select_sql."<br>".mysqli_error($mysql);
	}
	mysqli_close($mysql);

	header('Location: /');

?>