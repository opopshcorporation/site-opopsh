<?php require_once "user_data_query.php"; ?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="/images/logotypes/logo.svg">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Сброс пароля</title>
		<style>
			h1, form
			{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php require_once "header.php"; ?>
		<h1>Сброс пароля для аккаунта <?php echo htmlspecialchars($userdata[0]["username"]); ?></h1>
		<form action="cp_handler.php" method="post">
			<input type="password" placeholder="Текущий пароль" name="current_password" required><br><br>
			<input type="password" placeholder="Новый пароль" name="new_password" required><br><br>
			<input type="password" placeholder="Подтвердите пароль" name="confirm_password" required><br><br>
			<p><b>i</b> После смены пароля вам придется заново войти в аккаунт.</p><br>
			<button type="submit">Подтвердить</button>
		</form>
		<?php require_once "footer.php"; ?>
	</body>
</html>
