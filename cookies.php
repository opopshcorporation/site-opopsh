<?php

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

?>