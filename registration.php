<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="/images/logotypes/logo.svg">
		<link rel="stylesheet" href="/style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Регистрация</title>
		<style>
			h1, form, main
			{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1>
			<img src="images/decorations/my_network_places.webp" width=100 height=100><br>
			Регистрация
		</h1>
		<main>
			<form action="reg_handler" method="post">
				<input name="username" placeholder="Имя пользователя" required maxlength="20"><br><br>
				<input name="password" type="password" placeholder="Пароль" required maxlength="100"><br><br>
				<button type="submit" id="signbtn"><img src="images/decorations/nextbtn.png" height=50 width=50></button><br><br>
				<button type="reset">Сбросить</button><br><br>
				<a href="https://opopsh.ru/login">Войти в существующий аккаунт</a>
			</form>
		</main>
	</body>
</html>

