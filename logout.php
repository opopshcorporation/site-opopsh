<?php

require_once "user_data_query.php";
$user = $userdata[0]["username"];

setcookie("auth_token", "0", time() - 1, "/", "", true, true);
$query = $db -> prepare("DELETE FROM session_tokens WHERE username = ? ;");
$query -> execute([$user]);

header("location: https://opopsh.ru/authorization");
exit();

?>