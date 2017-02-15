<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=hotels_db','hotels_db_us','3929');
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');
	}catch(PDOException $e){
		echo 'Не удалось подключиться к БД<br>';
		echo $e->getMessage();
		exit();
	}

	try{
		$sql = "SELECT `client`.`id_client`,`client`.`surname`, `client`.`name`, `client`.`lastname`, `client`.`phone`, `hotels`.`hotel_name` FROM `client`,`hotels` WHERE `client`.`id_hotel`= `hotels`.`id`";
		$result =$pdo->query($sql);
	}catch(PDOException $e){
		echo "Ошибка при работе с БД";
		echo $e->getMessage();
	}

	function deletePost($id){
	global $pdo;
	$sql="DELETE FROM client WHERE id_client = '".$id."' ";
	$res =$pdo->exec($sql);
	return $res;
}

if (isset($_GET['delete_post'])) {
	$res = deletePost($_POST['post_id']);
	if($res==1){
		header("Location: current_orders.php");
	}
}
?>

<!DOCTYPE html>
		<html lang="en">
		<head>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="style.css">
			<meta charset="UTF-8">
			<meta name="description" content="Описание сайта">
			<meta name="keywords" content="Ключевые слова">

			<link rel="shortcut icon" href="#" type="image/x-icon">
			<title>Current Orders</title>
		</head>
		<body>
			<header><h1>Ваши заказы</h1></header>
			<div class="container">
				<table class="table">
					<?php foreach($result as $row): ?>
					<tr><td>Фамилия: <?=$row['surname']?></td>
					<td>Имя: <?=$row['name']?></td>
					<td>Отчество: <?=$row['lastname']?></td>
					<td>Телефон: <?=$row['phone']?></td>
					<td>Ваш отель: <?=$row['hotel_name']?></td>
					<td><form action="?delete_post" method="post">
						<button name="post_id" class="btn btn-default" value="<?=$row['id_client']?>">Удалить</button>
					</form></td></tr>
					<?php endforeach; ?> 
				</table>
				<button name="backspc" class="btn btn-default"><a href="index.php">На главную</a></button>
			</div>
		</body>
		</html>	