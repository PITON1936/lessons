<?php

	class Student{
	public $name;
	public $surname;
	public $avarengeMark;
	public $visits;
	public $marks;

	public function __construct($name,$surname,$visits,$marks){
		$this->name=$name;
		$this->surname=$surname;
		$this->visits=$visits;
		$this->marks=$marks;
		$this->avarengeMark=$this->avarengeMark();
	}	

	public function avarengeMark(){
		return round(array_sum($this->marks)/count($this->marks),1);
	}	

	public function studentName(){
		return	$this->surname.' '.$this->name;
	}
}

?>