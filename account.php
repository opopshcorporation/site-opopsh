<?php

require_once "user_data_query.php";

$username = htmlspecialchars($userdata[0]["username"]);
$regdate = htmlspecialchars(date("d.m.Y", $userdata[0]["reg_date"]));

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="images\logotypes\logo.svg">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<title>Мой аккаунт</title>
		<style>
			main
			{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php require_once "header.php"; ?>
		<main>
			<h1>Мой аккаунт</h1>
			<img src="images/decorations/my_network_places.webp" width=100 height=100><br>
			<b>@<?php echo $username; ?></b><br>
			Пользователь зарегестрирован: <b><?php echo $regdate ?></b><br><br>
			<a href = "/change_password">Сбросить пароль</a><br><br>
			<a href = "/delete_account"><b>Удалить аккаунт</b></a><br><br>
			<a href = "/logout"><b>Сменить аккаунт</b></a><br><br>
		</main>
		<?php require_once "footer.php"; ?>	
	</body>
</html>

