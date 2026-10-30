<?php
$img = rand(0, 6);

$image = match($img) {
	0 => "https://opopsh.ru/images/decorations/vista_bench.webp",
	1 => "https://opopsh.ru/images/decorations/disk.webp",
	2 => "https://opopsh.ru/images/decorations/my_network_places.webp",
	3 => "https://opopsh.ru/images/decorations/exe.webp",
	4 => "https://opopsh.ru/images/decorations/docs.webp",
	5 => "https://opopsh.ru/images/decorations/gallery.webp",
	6 => "https://opopsh.ru/images/decorations/mp3.webp"
};

$error = (int)($_GET["error"] ?? 0);
switch($error)
{
	case 404:
		$header = "Ошибка 404 - данная страница не найдена.";
		$p = "Вероятно, страница была удалена или ее ссылка была изменена.";
		http_response_code(404);
		break;

	case 403:
		$header = "Ошибка 403 - данная страница недоступна.";
		$p = "Вероятно, вы были заблокированы или лишены права доступа к ней.";
		http_response_code(403);
		break;

	default:
		$header = "Неизвестная ошибка.";
		$p = "Вероятно, страница была удалена или ее ссылка была изменена.";
		http_response_code(404);
		break;

}
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Страница не доступна!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/images/logotypes/logo.svg">
		<link rel="stylesheet" href="/style.css">
		<style>
			main, h1{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<header>
			<h1><?php echo $header; ?></h1>			
		</header>
		<main>
			<p><?php echo $p; ?></p>
			<img src="<?php echo $image; ?>" height=62 width=62><br>
			<a href="https://opopsh.ru/">На главную</a>
		</main>
	</body>
</html>
