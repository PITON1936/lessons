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

	$hotel_id = $_GET['hotel_id'];

	 if(isset($_POST['button'])){
	 	$surname=$_POST['surname'];
	 	$name=$_POST['name'];
	 	$lastname=$_POST['lastname'];
	 	$phone=$_POST['phone'];
	 	$hotel=$_POST['id_hotel'];

	 		try{
	 			$sql = "INSERT INTO client(surname,name,lastname,phone,id_hotel)
	 				VALUES('$surname','$name','$lastname','$phone','$hotel')";
	 			$pdo->exec($sql);	
	 		}catch(PDOException $e){
	 			echo $id_hotel;
	 			echo "Ошибка при заполнении БД";
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
			<title>Orders</title>
		</head>
		<body>
		<header><h1>Заполните форму для заказа</h1></header>
			<div class="container-fluid">
				<div class="form-group">
				<form action="orders.php" method="post">
				<label for="name">Имя</label>
				<input type="text" name="name" class="form-control" id="firstname">
				<label for="surname">Фамилия</label>
				<input type="text" name="surname" class="form-control" id="surname">
				<label for="lastname">Отчество</label>
				<input type="text" name="lastname" class="form-control" id="lastname">
				<label for="phone">Телефон:</label>
				<input type="text" name="phone" class="form-control" id="phone">
				<?php echo "<input type=\"hidden\" name=\"id_hotel\" value=$hotel_id>";?>
				<br>
				<div class="btn-group">
				<button name="button" class="btn btn-default">Отправить</button>
				<button name="backspc" class="btn btn-default"><a href="index.php">На главную</a></button>
				</div>
				</form>
				</div>
				
			</div>
		</body>
</html>	
