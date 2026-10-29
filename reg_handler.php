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

try
{
	$password_hash = password_hash($password, PASSWORD_DEFAULT);
	$ip = $_SERVER["REMOTE_ADDR"];
	$date_reg = time();
	$query = $db -> prepare("INSERT INTO users (username, password, reg_ip, reg_date) VALUES (?, ?, ?, ?);");
	$query -> execute([$username, $password_hash, $ip, $date_reg]);
	create_token_cookie($username);
	header("Location: https://opopsh.ru/");
	exit();
}

catch (PDOException $e)
{
	if ($e -> getCode() === "23000")
	{
		echo '<script>alert("Данное имя пользователя занято.");</script>';
		echo "<script>window.location.href = 'https://opopsh.ru/registration'</script>";
		exit();
	}

	throw $e;
}



?>
