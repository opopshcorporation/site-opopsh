<?php

require_once "user_data_query.php";
$user = $userdata[0]["username"];
$sended_password = htmlspecialchars($_POST["password"]);

if ($sended_password == $userdata[0]["password"])
{
	$query = $db -> prepare("DELETE FROM users WHERE username = ? ;");
	$query -> execute([$user]);
	setcookie("user", "0", time() - 1, "/", "", true, true);
	setcookie("password", "0", time() - 1, "/", "", true, true);
	echo '<script>window.location.href = "https://opopsh.ru/";</script>';
}	

else
{
	echo "Неверный пароль! Проверьте правильность ввода и повторите операцию.";
}
?>
