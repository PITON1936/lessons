<?php 

	class Admin extends Person{

	protected $schedule;
	const ROLE = "Admin";
	
	function __construct($name, $surname, $patronymic, $phone, $email, $schedule){
		parent::__construct($name, $surname, $patronymic, $phone, $email);
		$this->schedule = $schedule;
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
		$res .= "График работы: ".$this->schedule."<br>";
		$res .= "Статус: ".self::ROLE;
		return $res;	
	}
}
?>