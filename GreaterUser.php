<?php 

class GreaterUser{
	protected $persons;

	public function GreaterUserWritter(ActiveUser $person){
		echo "Пользователь: ".$person->getFullName()."<br>"."Статус: ".$person->getStatus();
	}
}



?>