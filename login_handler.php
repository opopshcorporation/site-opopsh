<?php
$username = $_POST["username"];
$password = $_POST["password"];

require_once "cookies.php";

$query = $db -> prepare("SELECT * FROM users WHERE USERNAME = ?");
$query -> execute([$username]);
$user = $query -> fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user["password"]))
{
	create_token_cookie($username);
	header("Location: https://opopsh.ru/");
	exit;
}

else
{
	echo "<script>alert('Неверное имя пользователя или пароль');</script>";
	echo '<script>window.location.href = "https://opopsh.ru/login";</script>';
	exit;
}

?>
