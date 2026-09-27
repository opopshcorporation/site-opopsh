<?php
$postname = htmlspecialchars($_POST["postname"]);
$author = htmlspecialchars($_POST["author"]);
$posttext = htmlspecialchars($_POST["posttext"]);
$publicationtime = date("d.M.Y");
$ID = rand(0, 1000000000);
$db = new PDO("mysql:host=localhost;dbname=userdata", "admin", "barbarik!@34");
$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $db->query("SELECT * FROM users WHERE 1");
$users = $query->fetchAll(PDO::FETCH_ASSOC);


if ($_FILES["loaded_image"]["size"] != 0)
{
	if ($_FILES["loaded_image"]["size"]/1000000 < 6.2)
	{
		$loaded_image = file_get_contents(htmlspecialchars($_FILES["loaded_image"]["tmp_name"]));
		$image_path = "images/userdata/".rand(0, 1000000).".png";
		file_put_contents($image_path, 	$loaded_image);
		$image = "https://opopsh.ru/".$image_path;
	}

	else 
	{
		$image = "";
		echo "<script>alert('Ваш файл превышает наш лимит размера - 6МБ.');</script>";
		echo '<script>window.location.href = "https://opopsh.ru";</script>';
		exit();
	}	
}

else
{
	$image = "";
}


$query = $db -> prepare("INSERT INTO posts (author, header, image_link, post, publication_date, ID) VALUES (?, ?, ?, ?, ?, ?);");
$query -> execute([$author, $postname, $image, $posttext, $publicationtime, $ID]);
echo '<script>window.location.href = "https://opopsh.ru";</script>';
?>
