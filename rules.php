<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Правила Opopsh</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="images/logotypes/logo.svg">
		<meta name="description" content="Здесь вы можете узнать о правилах нашего сайта.">
		<style>
			body
			{
				font-family: Calibri;  
				background: url('images/decorations/wallpaper.webp'); 
				margin: 0;
				padding: 0; 
				background-size: cover;  
				background-position: center; 
				background-repeat: no-repeat; 
				background-attachment: fixed; 
				min-height: 100vh;	
			}

			#warning
			{
				color: black;
			}
		</style>
	</head>
	<body>
		<?php require_once "header.php"; ?>
		<center>
			<h1>
				Актуальный список правил сайта Opopsh на момент 02.06.2026
			</h1>		
		</center>
		<main>
			<ol>
				<li>В тексте и изображениях постов не может быть слов обозначающих порнографию, нецензурную брань.</li>	
				<li>В имени пользователя или автора постов не может быть слов обозначающих порнографию, нецензурную брань.</li>	
				<li>Запрещено публиковать более 3 постов в час.</li>						
			</ol>
		</main>
		<aside id="warning">
			<img src="images/decorations/info.webp" height=35 width=35>
			<i>ПРЕДУПРЕЖДЕНИЕ! При игнорировании правил, ваш аккаунт будет заблокирован.</i>
		</aside>
		<?php require_once "footer.php"; ?>
	</body>
</html>
