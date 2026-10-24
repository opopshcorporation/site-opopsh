<?php
$postname = htmlspecialchars($_POST["postname"]);
$posttext = htmlspecialchars($_POST["posttext"]);
$publicationtime = date("d.M.Y");
$ID = rand(0, 1000000000);
require_once "user_data_query.php";
$query = $db->query("SELECT * FROM users WHERE 1");
$users = $query->fetchAll(PDO::FETCH_ASSOC);


if ($_FILES["loaded_image"]["size"] != 0)
{
	if ($_FILES["loaded_image"]["size"]/1000000 < 6.2)
	{
		$loaded_image = file_get_contents($_FILES["loaded_image"]["tmp_name"]);
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
$query -> execute([$userdata[0]["username"], $postname, $image, $posttext, $publicationtime, $ID]);
echo '<script>window.location.href = "https://opopsh.ru";</script>';
?>
