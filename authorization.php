<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="images\logotypes\logo.svg">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style/opacity.css">
		<title>Авторизация</title>
		<style>
			h1, form, main
			{
				text-align: center;
			}

			body
			{
				font-family: Calibri;  
				background: url('images/decorations/wallpaper2.jpg'); 
				background-attachment: fixed; 
				background-size: cover; 
				background-position: center; 
				background-repeat: no-repeat; 
				margin: 0; 
				height: 100vh;
			}

			#signbtn
			{
				background-color: transparent;
				border-color: transparent;
			}
		</style>
	</head>
	<body>
		<h1>
			<img src="images/decorations/my_network_places.webp" width=100 height=100><br>
			Авторизация
		</h1>
		<main>
			<form action="auth_handler" method="post">
				<input name="username" placeholder="Имя пользователя" required maxlength="20"><br><br>
				<input name="password" type="password" placeholder="Пароль" required maxlength="100"><br><br>
				<button type="submit" id="signbtn"><img src="images/decorations/nextbtn.png" height=50 width=50></button><br><br>
				<button type="reset">Сбросить</button>
			</form>
		</main>
	</body>
</html>

