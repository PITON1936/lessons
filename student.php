<?php 

	class Student extends Person{

		protected $avarageMarks;
		protected $visits;
		const ROLE = "Student";

	function __construct($name, $surname, $patronymic, $phone, $email, $avarageMarks, $visits){
	parent::__construct($name, $surname, $patronymic, $phone, $email);
	$this->avarageMarks = $avarageMarks;
	$this->visits = $visits;
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
	$res .= "Средний балл: ".$this->avarageMarks."<br>";
	$res .= "Посещаемость: ".$this->visits."<br>";
	$res .= "Статус: ".self::ROLE;
	return $res;	
	}	
}
?>