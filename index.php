<?php 

require_once('person.php');
require_once('teacher.php');
require_once('student.php');
require_once('admin.php');
require_once('Guest.php');
require_once('GreaterUser.php');

try{
	$pdo = new PDO('mysql:host=localhost;dbname=person_db','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');

	}
catch(PDOException $e){
	echo "Не удалось подключиться к БД<br>";
	echo $e->getMessage();
	exit();
	}

$admin = Person::getInstance(1, $pdo);
$teacher = Person::getInstance(2,$pdo);
$student = Person::getInstance(3,$pdo);
$guest = new Guest;
$person = new GreaterUser;

echo $person->GreaterUserWritter($admin);
?>