<?php
$username = $_POST["username"];
$password = $_POST["password"];

require_once "db.php";

function create_token_cookie($username)
{
	global $db;
	$token = bin2hex(random_bytes(32));
	$expires = time() + 2592000;
	setcookie("auth_token", $token, [
		"expires" => $expires, 
		"path" => "/", 
		"domain" => "", 
		"secure" => true, 
		"httponly" => true, 
		"samesite" => "Lax"
	]);
	$query = $db -> prepare("INSERT INTO session_tokens (token, username, expires) VALUES (?, ?, ?)");
	$query -> execute([$token, $username, $expires]);
}


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
