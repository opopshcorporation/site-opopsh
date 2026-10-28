<?php
require_once "db.php";

if (!isset($_COOKIE["auth_token"])) 
{
    header("Location: https://opopsh.ru/authorization");
    exit;
}

$stmt = $db->prepare("SELECT username, expires FROM session_tokens WHERE token = ?");
$stmt -> execute([$_COOKIE["auth_token"]]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row || time() >= $row["expires"]) 
{
    $query = $db -> prepare("DELETE FROM session_tokens WHERE token = ?");
    $query -> execute([$_COOKIE["auth_token"]]);
    setcookie("auth_token", "", time() - 3600, "/");
    header("Location: https://opopsh.ru/authorization");
    exit;
}

$userinfo = $db -> prepare("SELECT * FROM users WHERE username = ?");
$userinfo -> execute([$row["username"]]);
$userdata = $userinfo->fetchAll(PDO::FETCH_ASSOC);

if (empty($userdata)) 
{
    header("Location: https://opopsh.ru/authorization");
    exit;
}