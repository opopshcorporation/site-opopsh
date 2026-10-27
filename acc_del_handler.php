<?php

require_once "user_data_query.php";
$user = $userdata[0]["username"];
$sended_password = $_POST["password"];

if (password_verify($sended_password, $userdata[0]["password"]))
{
	$query = $db -> prepare("DELETE FROM session_tokens WHERE username = ? ;");
	$query -> execute([$user]);
	$query = $db -> prepare("DELETE FROM users WHERE username = ? ;");
	$query -> execute([$user]);
	setcookie("auth_token", "0", time() - 1, "/", "", true, true);
	echo '<script>window.location.href = "https://opopsh.ru/";</script>';
	exit();
}	

else
{
	echo "Неверный пароль! Проверьте правильность ввода и повторите операцию.";
}
?>
