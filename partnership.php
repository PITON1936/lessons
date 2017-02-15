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

	if(isset($_POST['crtbutton'])){
		$name=$_POST['hotel_name'];
		$adress=$_POST['adress'];
		$phone=$_POST['phone'];
		$price=$_POST['price'];
		$info=$_POST['info'];

			try{
				$sql= "INSERT INTO hotels(hotel_name,adress,phone,price,info)
				VALUES('$name','$adress','$phone','$price','$info')";
				$pdo->exec($sql);
			}catch(PDOException $e){
				echo "Ошибка при заполнении заявки";
				echo $e->getMessage();
				exit();
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
			<title>Partnership</title>
		</head>
		<body>
			<header><h1>Сотрудничество с нами</h1></header>
		<div class="container-fluid">
		<div class="form-group">
			<form action="partnership.php" method="post">
			<label for="hotel_name">Название отеля:</label>
			<input type="text" name="hotel_name" class="form-control" id="first_name">
			<label for="adress">Адрес:</label>
			<input type="text" name="adress" class="form-control" id="adress">
			<label for="tphone">Телефон:</label>
			<input type="text" name="phone" class="form-control" id="phone">
			<label for="price">Цена:</label>
			<input type="text" name="price" class="form-control" id="price">
			<label for="info">О вас:</label>
			<textarea name="info" id="info" class="form-control" rows="10"></textarea>
			<br>
			<div class="btn-group">
			<button name="crtbutton" class="btn btn-default">Подать заявку</button>
			<button name="backspc" class="btn btn-default"><a href="index.php">На главную</a></button>
			</form>
		</div>	
		</div>	
	</div>
		</body>
</html>	