<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Игры Opopsh</title>
		<link rel="shortcut icon" href="/images/logotypes/logo.svg">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="В этом разделе вы можете посмотреть и скачать наши игры.">
		<style>
			h1, table, p
			{
				text-align: center;
			}

			body
			{
				font-family: Calibri;  
				background: url('/images/decorations/wallpaper.webp'); 
				background-attachment: fixed; 
				background-size: cover;
				background-position: center; 
				background-repeat: no-repeat; 
				margin: 0; 
				height: 100vh;
			}
		</style>
	</head>
	<body>
		<?php require_once 'header.php'; ?>
		<h1>Наши игры:</h1>
			<main>
				<nav>
					<table>
						<tr>
							<td>
								<article>
									<h2>Mikromir: EL</h2>
									<img src="/images/decorations/mikromir.png" width="250" height="250">
									<p>Миниатюрная биологическая игра-песочница с амебами,<br> инфузориями, бактериями и эвгленами</p>
									<a href="/apps/MikromirEL_3_0.exe">Скачать</a>
								</article>
							</td>
							<td>
								<article>
									<h2>Kuba Ava 2</h2>
									<img src="/images/decorations/kubaava2.png" width="250" height="250">
									<p>Продолжение игры Kuba Ava, где добавлен новый режим Vityazevo.</p>
									<a href="/apps/kubaava2.apk">Скачать</a>			
								</article>
							</td>							
						</tr>
						<tr>
							<td>
								<article>
									<h2>Funk Clicker</h2>
									<img src="/images/decorations/funkclicker.png" width="250" height="250">
									<h3>Бесплатно.</h3>
									<p>Забавный кликер, где нужно покупать шарфики и ловить глазика из норок.</p>
									<a href="/apps/funkclicker.zip">Скачать</a>
									<br><br><br>
								</article>
							</td>
						</tr>
					</table>
				</nav>
			</main>
			<aside>
				<p>Для покупки игры отправьте на карту средства в размере цены игры, которую хотите купить и добавьте к переводу сообщение, в котором указан ваш email.</p>
			</aside>
			<?php require_once 'footer.php'; ?>
	</body>
</html>
