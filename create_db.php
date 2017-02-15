<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=goods_db','root','');
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');
	}catch(PDOException $e){
		echo 'Не удалось подключиться к БД<br>';
		echo $e->getMessage();
		exit();
	}

	// try{
	// 	$sql="CREATE TABLE goods(
	// 	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	// 	goods_name TEXT NOT NULL,
	// 	price INT NOT NULL,
	// 	description TEXT NOT NULL,
	// 	links TEXT NOT NULL
	// 	)DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
	// 	$pdo->exec($sql);
	// }catch(PDOException $e){
	// 	echo "Ошибка при создании таблицы";
	// 	echo $e->getMessage();
	// 	exit();
	// }

	// try{
	// 	$sql="CREATE TABLE orders(
	// 	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	// 	name TEXT NOT NULL,
	// 	phone TEXT NOT NULL,
	// 	email TEXT NOT NULL,
	// 	id_goods INT NOT NULL,
	// 	amount INT NOT NULL
	// 	)DEFAULT CHARACTER SET utf8 ENGINE=InnoDB";
	// 	$pdo->exec($sql);
	// }catch(PDOException $e){
	// 	echo "Ошибка при создании таблицы";
	// 	echo $e->getMessage();
	// 	exit();
	// }

	// try{
	// 	$sql="INSERT INTO goods(
	// 	goods_name, price, description, links
	// 	) VALUES (\"Щётка для соусов\", \"4\", \"Описание\", \"/img/1.jpg\")";
	// 	$pdo->exec($sql);
	// 	}catch(PDOException $e){
	// 		echo "Не удалось добавить информацию";
	// 		echo $e->getMessage();
	// 		exit();
	// 	}

	// $ar = array('/img/1.jpg','/img/1.jpg','/img/1.jpg','/img/1.jpg','/img/1.jpg','/img/1.jpg','/img/1.jpg');

	// for ($i = 0; $i < 7; $i++) {
	// 	$sql = "INSERT INTO goods(goods_name, price, description, links) VALUES ('Щётка для соусов', 4, 'Описание', '/img/".($i+1).".jpg')";
	// 	$pdo->exec($sql);
	// }



	// try{
	// 	$sql = mysql_query("SELECT * FROM goods");
	// 	while($row = mysql_fetch_array($sql)){

 //  		echo "Картинка: <img src='".$row['links']."'><br/>
    //     ID картинки: ".$row['goods_name']."<br/>
    //     Описание: ".$row['description']."<br/>
    //     Цена: ".$row['description']."<br/>";

// }



?>