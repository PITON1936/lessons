<?php 
	class Teacher extends Person{

		protected $lesson;
		const ROLE = "Teacher";

		function __construct($name, $surname, $patronymic, $phone, $email, $lesson){
		parent::__construct($name, $surname, $patronymic, $phone, $email);
		$this->lesson = $lesson;
		}

		public function getFullName(){
		$res = $this->name.' '.$this->surname.' '.$this->patronymic;
		return $res;
		}	

	public function getStatus(){
		return self::ROLE;
		}

		public function getVisitCard(){
			$res = parent::getVisitCard();
			$res .= "Название предмета: ".$this->lesson."<br>";
			$res .= "Статус: ".self::ROLE;
			return $res; 
		}
}
?>
