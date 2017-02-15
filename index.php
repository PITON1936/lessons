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
		$sql = 'SELECT * FROM hotels';
		$result = $pdo->query($sql);
	}catch(PDOException $e){
		echo "Ошибка извлечения";
		echo $e->getMessage();
		exit();
	}

	// foreach ($result as $row) {
	// 	echo 'Id: '.$row['id'].'<br>';
	// 	echo 'Name: '.$row['name'].'<br>';
	// 	echo 'Adress: '.$row['adress'].'<br>';
	// 	echo 'Phone: '.$row['phone'].'<br>';
	// 	echo 'Price: '.$row['price'].'<br>';
	// 	echo 'Information: '.$row['info'].'<br>';
	// 	echo "<button name=\"button\"><a href=\"orders.php?hotel_id=".$row['id']." \">Заказать</a></button>";
	// 	echo "<hr>";
	// }
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
			<title>Hotels</title>
		</head>
		<body>
		<div class="jumbotron">
	  		<h1>Hotel appartments in Odessa</h1>
		</div>
			<div class="container-fluid">
			<table class="table">
				<?php foreach ($result as $row) {
				echo '<tr><td>'.$row['id'].'</td>';
				echo '<td>'.'Название:'.$row['hotel_name'].'</td>';
				echo '<td>'.'Адрес:'.$row['adress'].'</td>';
				echo '<td>'.'Телефон:'.$row['phone'].'</td>';
				echo '<td>'.'Стоимость:'.$row['price'].'грн'.'</td>';
				echo '<td>'.'О нас:'.$row['info'].'</td>';
				echo '<td>'."<button name=\"button\"><a href=\"orders.php?hotel_id=".$row['id']." \">Заказать</a></button>".'</td></tr>';
				}
				?>
			</table>	
			<div class="btn-group">
			<button name="partner" class="btn btn-default"><a href="partnership.php">Сотрудничество</a></button>
			<button name="current" class="btn btn-default"><a href="current_orders.php">Ваши заказы</a></button>
			</div>
			</div>
		</body>
		</html>	