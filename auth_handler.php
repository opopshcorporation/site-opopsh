<?php
$username = htmlspecialchars($_POST["username"])
$password = htmlspecialchars($_POST["password"]);
$password_hash = password_hash($password, PASSWORD_DEFAULT);
$ip = $_SERVER["REMOTE_ADDR"];
$date_reg = date("d.F.Y");

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
	$query = $db->prepare("INSERT INTO users (username, password, reg_ip, reg_date) VALUES (?, ?, ?, ?);");
	$query->execute([$username, $password_hash, $ip, $date_reg]);
	create_token_cookie($username);
}

catch(Exception $e)
{
	$query = $db->prepare("SELECT * FROM users WHERE USERNAME = ?");
	$query->execute([$username]);
	$user = $query->fetchAll(PDO::FETCH_ASSOC);
	
	if (password_verify($password, $user[0]["password"]))
	{
		create_token_cookie($username);
	}
	
	else
	{
	
		echo "<script>alert('Неверный пароль от аккаунта $username');</script>";
		echo "<script>window.location.href = 'https://opopsh.ru/authorization'</script>";
	}
}

echo "<script>window.location.href = 'https://opopsh.ru/'</script>";

?>
