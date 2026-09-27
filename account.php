<?php

require_once "user_data_query.php";

$username = htmlspecialchars($userdata[0]["username"]);
$regdate = htmlspecialchars($userdata[0]["reg_date"]);

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="images\logotypes\logo.svg">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style/opacity.css">
		<title>Мой аккаунт</title>
		<style>
			main
			{
				text-align: center;
			}

			body
			{
				font-family: Calibri;  
				background: url('images/decorations/img42.jpg'); 
				background-attachment: fixed; 
				background-size: cover; 
				background-position: center; 
				background-repeat: no-repeat; 
				margin: 0; 
				height: 100vh;
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
			<button onclick="window.location.href = 'change?change=password'; ">Сбросить пароль</button>
			<button onclick="window.location.href = 'delete_account'; "><b>Удалить аккаунт</b></button><br><br>
			<button onclick="window.location.href = 'authorization'; "><b>Сменить аккаунт</b></button>  
		</main>
		<?php require_once "footer.php"; ?>	
	</body>
</html>

