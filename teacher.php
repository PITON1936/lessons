<?php 
	class Teacher extends Person{

		protected $lesson;
		const ROLE = "Teacher";

		function __construct($name, $surname, $patronymic, $phone, $email, $lesson){
		parent::__construct($name, $surname, $patronymic, $phone, $email);
		$this->lesson = $lesson;
		}

		public function getVisitCard(){
			$res = parent::getVisitCard();
			$res .= "Название предмета: ".$this->lesson."<br>";
			$res .= "Статус: ".self::ROLE;
			return $res; 
		}
}
?>
