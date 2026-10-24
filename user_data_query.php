<?php

require_once "db.php";

if (isset($_COOKIE["auth_token"]))
{
	$user = $db -> prepare("SELECT username FROM session_tokens WHERE token = ?;");
	$user -> execute([$_COOKIE["auth_token"]]);
	$username = $user -> fetchAll(PDO::FETCH_ASSOC);
	$username2 = $username[0]["username"];
	$userinfo = $db -> prepare("SELECT * FROM users WHERE username = ?;");
	$userinfo -> execute([$username2]);
	$userdata = $userinfo -> fetchAll(PDO::FETCH_ASSOC);
}

else 
{
	echo '<script>window.location.href = "https://opopsh.ru/authorization";</script>';
	exit();
}

?>
