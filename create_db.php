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

	// try{
	// 	$sql="CREATE TABLE hotels(
	// 	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	// 	hotel_name TEXT NOT NULL,
	// 	adress TEXT NOT NULL,
	// 	phone TEXT NOT NULL,
	// 	price INT NOT NULL,
	// 	info TEXT NOT NULL
	// 	)DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
	// 	$pdo->exec($sql);
	// }catch(PDOException $e){
	// 	echo "Ошибка при создании таблицы";
	// 	echo $e->getMessage();
	// 	exit();
	// }

	// try{
	// 	$sql="CREATE TABLE client(
	// 	id_client INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	// 	surname TEXT NOT NULL,
	// 	name TEXT NOT NULL,
	// 	lastname TEXT NOT NULL,
	// 	phone TEXT NOT NULL,
	// 	id_hotel INT NOT NULL,
	// 	FOREIGN KEY (id_hotel) REFERENCES hotels(id) 
	// 	)DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
	// 	$pdo->exec($sql);
	// }catch(PDOException $e){
	// 	echo "Ошибка при создании таблицы";
	// 	echo $e->getMessage();
	// 	exit();
	// }

	try{
		$sql="INSERT INTO hotels(
		hotel_name, adress, phone, price, info
		) VALUES (\"Hotel\", \"Dumskaya 1\", \"722-27-23\", \"350\", \"information\")";
		$pdo->exec($sql);
		}catch(PDOException $e){
			echo "Не удалось добавить информацию";
			echo $e->getMessage();
			exit();
		}

