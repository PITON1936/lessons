<?php 

class Person{

	protected $name;
	protected $surname;
	protected $patronymic;
	protected $phone;
	protected $email;

	function __construct($name, $surname, $patronymic, $phone, $email){
		$this->name = $name;
		$this->surname = $surname;
		$this->patronymic = $patronymic;
		$this->phone = $phone;
		$this->email = $email;
	}

	public function getVisitCard(){
		$res = "Name: ".$this->name."<br>";
		$res .= "Surname: ".$this->surname."<br>";
		$res .= "Patromynic: ".$this->patronymic."<br>";
		$res .= "Phone: ".$this->phone."<br>";
		$res .= "E-mail: ".$this->email."<br>";
		return $res;
	}

}

?>