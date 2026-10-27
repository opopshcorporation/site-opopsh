<?php

require_once "db.php";

$auth_token = $_COOKIE["auth_token"];

$query = $db -> prepare("DELETE FROM session_tokens WHERE token = ? ;");
$query -> execute([$auth_token]);
setcookie("auth_token", "0", time() - 1, "/", "", true, true);

header("location: https://opopsh.ru/authorization");
exit();

?>