<!DOCTYPE html>
<html lang="ru">
	<head>
		<link rel="shortcut icon" href="images/logotypes/logo.svg">
		<meta charset="utf-8">
		<title>Кодинг</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="В этом разделе вы можете посмотреть разные программы на языках программирования.">
		<style>
			h1, #podzagalovok
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
		</style>		
	</head>
	<body>
		<?php require_once 'header.php'; ?>
			<h1>Добро пожаловать!</h1>
			<p id="podzagalovok">На данной странице вы можете рассмотреть разные примеры программ на языке PHP.</p>
		<main>
			<article>
				<h2>
					Метод Гаусса
				</h2>
				<p>Данный код вычисляет сумму всех чисел от 1 до x(вашего числа).</p>
				<textarea disabled cols=100 rows=8>
$to=0; #следим, чтобы пользователь не написал нуль.
while ($to==0){
$to=(int)readline("Введите число: \n");}
$result=$to*($to+1)/2; #вычисляем результат и выводим его.
echo "Результат работы метода Гаусса: ".$result."\n";
				</textarea>	
			</article>
			<hr>
			<article>
				<h2>
					Показатель места на диске
				</h2>
				<p>Показывает все место на диске, и сколько свободно.</p>
				<textarea disabled cols=100 rows=8>
define("DISK", __DIR__);
$total=disk_total_space(DISK)/1000000000;
$available=disk_free_space(DISK)/1000000000;
echo "Всего места: $total ГБ\nСвободно места: $available ГБ";
				</textarea>	
			</article>
			<hr>
			<article>
				<h2>
					Калькулятор дистанции, времени и скорости (для легкоатлетов)
				</h2>
				<p>Вычисляет скорость(м/c), время(с) и дистанцию(м).</p>
				<textarea disabled cols=100 rows=40>
echo "Скорость(м/с): ";
$v = (float)trim(fgets(STDIN));
echo "Время(с): ";
$t = (float)trim(fgets(STDIN));
echo "Дистанция(м): ";
$s = (int)trim(fgets(STDIN));

try
{
	$unknownCount = 0;
	if ($t == 0) {$unknown = "time"; $unknownCount++; }
	if ($v == 0) { $unknown = "velocity"; $unknownCount++; }
	if ($s == 0) { $unknown = "distance"; $unknownCount++; }
	if ($unknownCount != 1) { throw new Exception; }

	switch ($unknown)
	{
		case "time":
			$result = round($s / $v, 2);
			break;

		case "velocity":
			$result = round($s / $t, 2)." м/c";
			break;

		case "distance":
			$result = $v * $t." м";		
			break;			
	}

	echo $result."\n";
}

catch(Exception $e)
{
	echo "Некорректное количество неизвестных чисел.\n";
}
				</textarea>	
			</article>
			<hr>
			<article>
				<h2>
					Программа для работы с отношениями и ингридиентами
				</h2>
				<p>Помогает решать уравнения с отношением ингридиентов и их количеств.</p>
				<textarea disabled cols=100 rows=72>
class InvalidUnknownCountException extends Exception
{
	function __construct()
	{
		parent::__construct("Невозможно выполнить вычисления, так как некорректное количество неизвестных. \n");
	}
}

echo "Чтобы программа работала корректно, введите 0 там, где неизвестно.\n\n\n";

echo "Первая часть отношения(первый ингридиент) ";
$first = (int)trim(fgets(STDIN));
echo "Вторая часть отношения(второй ингридиент) ";
$second = (int)trim(fgets(STDIN));
echo "Третья часть отношения(третий ингридиент) ";
$third = (int)trim(fgets(STDIN));
echo "Всего(гр.) ";
$total = (float)trim(fgets(STDIN));
echo "Единичная доля в части отношения(гр.) ";
$part = (float)trim(fgets(STDIN));

try
{
	$unknown_count = 0;
	if ($total == 0) { $unknown = 4; $unknown_count++;}
	if ($first == 0) { $unknown = 1; $unknown_count++;}
	if ($second == 0){ $unknown = 2; $unknown_count++;}
	if ($third == 0) { $unknown = 3; $unknown_count++;}
	if ($part == 0)  { $unknown = 0; $unknown_count++;}
	if ($unknown_count != 1){ throw new InvalidUnknownCountException; }

	switch ($unknown)
	{
		case 0:
			$result = $total / ($first + $second + $third);
			break;

		case 1:
			$result = $total - (($second + $third) * $part);
			break;

		case 2:
			$result = $total - (($first + $third) * $part);
			break;

		case 3:
			$result = $total - (($first + $second) * $part);
			break;

		default:
			$result = ($first + $second + $third) * $part;				
	}

	echo $result."\n";
}

catch(DivisionByZeroError $e)
{
	echo "Невозможно выполнить вычисления, так как деление на нуль запрещено. \n";
}

catch (InvalidUnknownCountException $e)
{
	echo $e->getMessage();
}

finally
{
	echo "Программа завершила выполнение. \n\n";
}

?>
				</textarea>	
			</article>							
		</main><br><br><br><br>
		<?php require_once 'footer.php'; ?>			
	</body>
</html>
