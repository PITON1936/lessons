<?php 

	class Admin extends Person{

	protected $schedule;
	
	function __construct($name, $surname, $patronymic, $phone, $email, $schedule){
		parent::__construct($name, $surname, $patronymic, $phone, $email);
		$this->schedule = $schedule;
	}	

	public function getVisitCard(){
		$res = parent::getVisitCard();
		$res .= "График работы: ";
		foreach ($this->schedule as $value) {
			$res.=$value." ";
		}
		return $res;	
	}
}
?>