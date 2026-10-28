<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Добро пожаловать на сайт Opopsh!">
		<link rel="shortcut icon" href="/images/logotypes/logo.svg">
		<title>Opopsh</title>
		<style>
			body
			{
				font-family: Calibri; background: url('/images/decorations/wallpaper.webp'); 
				background-attachment: fixed; 
				background-size: cover; 
				background-position: center; 
				background-repeat: no-repeat; 
				margin: 0; 
				height: 100vh;
			}

			#create_post_link
			{
				color: white;
			}

			#message_icon
			{
				display: block; 
				width: 250px; 
				margin: 0 auto;
			}

			#message_header, #message_description
			{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php require_once "header.php" ?>
		<main>
			<a href="createpost" id="create_post_link">Опубликовать пост</a>
			<?php 
			require_once "db.php";
			$posts = $db->query("SELECT * FROM posts ORDER BY publication_date DESC;");
			$all_posts = $posts->fetchAll(PDO::FETCH_ASSOC);

			$i = 0;
			foreach ($all_posts as $post) {
				echo "<hr>";
				echo "<article id='publication_".$post['ID']."'>";
				echo "<p>";
				echo "Поделиться ссылкой: <a href='https://opopsh.ru#publication_".$post['ID']."'>https://opopsh.ru#publication_".$post['ID']."</a>";
				echo "</p>";
				echo "<h2>";
				echo htmlspecialchars($post['header']);
				echo "</h2><br>";
				echo "<b>";
				echo htmlspecialchars($post['author'])." ".htmlspecialchars(date("Y-m-d H:i:s UTC", $post['publication_date']))." UTC";
				echo "</b><br>";
				echo "<p>";
				echo htmlspecialchars($post['post']);
				echo "</p><br>";
				if ($post['image_link'] != "")
				{
					echo '<img src="'.htmlspecialchars($post['image_link']).'" width=100 height=100 alt="Изображение поста">';
				}
				echo "</article>";
				$i++;
			}
			if ($i==0)
			{
				echo '<img id="message_icon" src="images/decorations/info.webp" alt="Note for user icon">';
				echo "<h1 id='message_header'>В настоящее время постов на сайте нету</h1>";
				echo "<p id='message_description'>Вы можете стать первым!</p>";
			}
			?>
		</main>
		<?php require_once "footer.php" ?>
	</body>
</html>
