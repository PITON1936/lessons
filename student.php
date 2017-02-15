<?php 

	class Student extends Person{

		protected $avarageMarks;
		protected $visits;

	function __construct($name, $surname, $patronymic, $phone, $email, $avarageMarks, $visits){
	parent::__construct($name, $surname, $patronymic, $phone, $email);
	$this->avarageMarks = $avarageMarks;
	$this->visits = $visits;
	}

	public function getVisitCard(){
	$res = parent::getVisitCard();
	$res .= "Средний балл: ".$this->avarageMarks."<br>";
	$res .= "Посещаемость: ".$this->visits."<br>";
	return $res;	
	}	
}
?>