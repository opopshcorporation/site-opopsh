<?php

require_once "user_data_query.php";

$author = $userdata[0]["username"];
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="images\logotypes\logo.svg">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Создать пост</title>
		<style>
			body
			{
				font-family: Calibri; 
				background: url('images/decorations/wallpaper.webp'); 
				background-size: cover;
			}
			h1, form
			{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php require_once "header.php"; ?>
		<h1>Создать пост</h1>
		<main>
			<form method="post" action="handler.php" enctype="multipart/form-data">
				<p>Пост будет опубликован от имени: <input placeholder="<?php echo $author ?>" value="<?php echo $author ?>" readonly></p><br><br>
				<input name="postname" placeholder="Тема поста" required><br><br>
				Загрузить картинку: <input type="file" accept="image/*" name="loaded_image"><br><br>
				<textarea name="posttext" placeholder="Текст поста" required></textarea><br><br>
				<button type="submit">Опубликовать</button><br><br>
			</form><br>
		</main>
		<?php require_once "footer.php"; ?>
	</body>
</html>
