<?php
	$students=array(
		array(
			'name'=>'Vova',
			'surname'=>'Chumachenko',
			'visits'=>['29.11'=>true, '30.11'=>true, '01.12'=>true, '02.12'=>true],
			'marks'=>[5,5,3,5,4,5,4,4,5]),
		array(
			'name'=>'Boris',
			'surname'=>'Chaliy',
			'visits'=>['29.11'=>true, '30.11'=>false, '01.12'=>true, '02.12'=>true],
			'marks'=>[5,5,5,5,5,5,4,4,5]),
		
		array(
			'name'=>'Andrew',
			'surname'=>'Bazilskiy',
			'visits'=>['29.11'=>true, '30.11'=>true, '01.12'=>false, '02.12'=>false],
			'marks'=>[5,5,3,3,5,5,4,3,5]),
		
		array(
			'name'=>'Alex',
			'surname'=>'Grishko',
			'visits'=>['29.11'=>false, '30.11'=>false, '01.12'=>true, '02.12'=>true],
			'marks'=>[5,5,3,3,3,5,3,4,5]),
		
		array(
			'name'=>'Igor',
			'surname'=>'Kostenko',
			'visits'=>['29.11'=>true, '30.11'=>fasle, '01.12'=>false, '02.12'=>false],
			'marks'=>[5,2,3,5,1,5,4,2,5]),
		
		array(
			'name'=>'Igor',
			'surname'=>'Sitaruk',
			'visits'=>['29.11'=>true, '30.11'=>false, '01.12'=>true, '02.12'=>true],
			'marks'=>[5,5,3,2,4,2,2,4,5]),
		);

require_once('Student.php');
require_once('Best_Students_Finder.php');

	$studentFinder = new BestStudentFinder();

	foreach ($students as $student){
		$student_obj = new Student($student['name'],$student['surname'],$student['visits'],$student['marks']);
		$studentFinder->checkStudent($student_obj);
		//$studentFinder->showbestStudents();
}
?>	

<!DOCTYPE html>
		<html lang="en">
		<head>
			<link rel="stylesheet" href="style.css">
			<meta charset="UTF-8">
			<meta name="description" content="Описание сайта">
			<meta name="keywords" content="Ключевые слова">

			<link rel="shortcut icon" href="#" type="image/x-icon">
			<title>BestStudents</title>
		</head>
		<body>
			<table border="1"; style="border-spacing: 0px; border-collapse:collapse;">
			<caption>Best Students</caption>
				<tr><td>Students</td><td>Rating</td></tr>
			<?php 
			echo $studentFinder->showBestStudents();
			//"<td>".$student->avarengeMark()"</td></tr>"
			?>
		</body>
		</html>	