<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Добро пожаловать на сайт Opopsh!">
		<link rel="stylesheet" href="/style.css">
		<link rel="shortcut icon" href="/images/logotypes/logo.svg">
		<title>Opopsh</title>
		<style>
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
			$posts = $db -> query("SELECT * FROM posts ORDER BY publication_date DESC;");
			$all_posts = $posts -> fetchAll(PDO::FETCH_ASSOC);
			$trusted_users = $db -> query("SELECT username FROM users WHERE trusted = 'Y'; ");
			$trusted_users_array = $trusted_users -> fetchAll(PDO::FETCH_ASSOC);
			$trusted_names = array_column($trusted_users_array, "username");
			$i = 0;
			foreach ($all_posts as $post) 
			{
				$trusted_icon = (in_array($post['author'], $trusted_names)) ? "<img src='/images/decorations/trusted.png' width=15 height=15 alt='Пользователь подтвержден' title='Пользователь подтвержден'>" : "";

				echo "<hr>";
				echo "<article id='publication_".$post['ID']."'>";
				echo "<p>";
				echo "<span>Поделиться ссылкой</span>: <a href='https://opopsh.ru#publication_".$post['ID']."'>https://opopsh.ru#publication_".$post['ID']."</a>";
				echo "</p>";
				echo "<h2>";
				echo htmlspecialchars($post['header']);
				echo "</h2><br>";
				echo "<span><b>";
				echo htmlspecialchars($post['author']).$trusted_icon." ".htmlspecialchars(date("Y-m-d H:i:s", $post['publication_date']))." UTC";
				echo "</b></span><br>";
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
