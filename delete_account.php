<?php

require_once "user_data_query.php";
$user = $userdata[0]["username"];

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="images\logotypes\logo.svg">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Удаление аккаунта Opopsh</title>
		<style>
			h1, form
			{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1>Подтвердите данные</h1>
		<main>
			<form method="post" action="acc_del_handler.php" enctype="multipart/form-data">
				Аккаунт: <u><?php echo $user; ?></u><br><br>
				<input type="password" placeholder="Пароль" name="password" required><br><br>
				<input type="checkbox" name="agree" required> Я подтверждаю свои намерения и хочу удалить аккаунт. <br><br>
				<button type="submit">Удалить аккаунт</button><br><br>
			</form><br>
		</main>
		<?php require_once "footer.php"; ?>
	</body>
</html>
