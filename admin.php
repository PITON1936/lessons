<?php 

	class Admin extends Person{

	protected $schedule;
	const ROLE = "Admin";
	
	function __construct($name, $surname, $patronymic, $phone, $email, $schedule){
		parent::__construct($name, $surname, $patronymic, $phone, $email);
		$this->schedule = $schedule;
	}	

	public function getVisitCard(){
		$res = parent::getVisitCard();
		$res .= "График работы: ".$this->schedule."<br>";
		$res .= "Статус: ".self::ROLE;
		return $res;	
	}
}
?>