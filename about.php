<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="images\logotypes\logo.svg">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Здесь вы можете узнать подробнее о сайте Opopsh.">
		<link rel="stylesheet" href="style/opacity.css">
		<title>О проекте</title>
		<style>
			aside, #do_you_know_header
			{
				text-align: right;
			}

			h1
			{
				text-align: center;
			}

			body
			{
				font-family: Calibri;  
				background: url('images/decorations/wallpaper.webp'); 
				background-attachment: fixed; 
				background-size: cover; 
				background-position: center; 
				background-repeat: no-repeat; 
				margin: 0; 
				height: 100vh;
			}

			#sitedescription
			{
 				background-color: white;
			}
		</style>
	</head>
	<body>
		<?php require_once "header.php"; ?>
		<h1>О проекте Opopsh</h1>
		<main>
			<div id="sitedescription">
				<b>Opopsh</b> - <u>информационный сайт</u>, на котором вы сможете
				скачивать наши проекты и практиковаться программированию собственных приложений на наших примерах! Также вы можете сохранять свои покупки и публиковать посты, создав аккаунт.
				<br>
				Наш сайт посвящен тематике программирования и играм, мы рады любому гостю! <br>
				Мы очень надеемся, что вам понравится наш проект!
			</div>
		</main>
		<aside>
			<img src="images\decorations\bulb.webp">
			<h1 id='do_you_know_header'>А знаете ли вы,</h1>
			<p>
			<?php
			$question = rand(0, 2);
			switch ($question)
			{
				case 0:
					echo "<textarea readonly cols=70 rows=1>что проект Opopsh изначально планировался, как телепередача?</textarea>";
					break;
				case 1:
					echo "<textarea readonly cols=70 rows=1>что проектом Opopsh занимается только один человек?</textarea>";
					break;
				case 2:
					echo "<textarea readonly cols=70 rows=1>что сайт Opopsh появился в 2021 году, как сайт opopsh.net?</textarea>";
					break;
			}
			?>
			</p>
		</aside><br>
		<?php require_once "footer.php"; ?>	
	</body>
</html>

