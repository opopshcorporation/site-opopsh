<?php

require_once "user_data_query.php";
$username = $userdata[0]["username"];
$current_password = $userdata[0]["password"];
$current_password_FU = $_POST["current_password"];
$new_password = $_POST["new_password"];
$confirm_password = $_POST["confirm_password"];

if (password_verify($current_password_FU, $current_password))
{
	if($new_password == $confirm_password)
	{
		$hash = password_hash($new_password, PASSWORD_DEFAULT);
		$stmt = $db -> prepare("UPDATE users SET password = ? WHERE username = ?; ");
		$stmt -> execute([$hash, $username]);
		header("Location: https://opopsh.ru/logout");
		exit();
	}

	else
	{
		echo "Пароли в полях 'НОВЫЙ ПАРОЛЬ' и 'ПОДТВЕРДИТЕ НОВЫЙ ПАРОЛЬ' не совпадают. Повторите попытку.";
	}
}

else
{
	echo "Неверный текущий пароль! Повторите попытку.";
}

?>