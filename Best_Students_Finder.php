<?php
	class BestStudentFinder{
	public $bestStudents;


	public function checkStudent(Student $student){
		if($this->avarengeVisit($student->visits)>=0.5 && $student->avarengeMark >=4){
			$this->bestStudents[]=$student;
			//echo $student->studentName().' '.$student->avarengeMark."<br>";
		}else{
			//echo "-";
		}
	}

	private function avarengeVisit($visits){
		$amount=0;
		$avarengeAmount=0;
		foreach ($visits as $key => $value){
			if($value)$avarengeAmount++;
			$amount++;
		}
		return round($avarengeAmount/$amount,2);
	}
	public function showbestStudents(){
		//var_dump($this->bestStudents);
		foreach ($this->bestStudents as $student){
			echo "<tr><td>".$student->studentName()."</td>";
			echo "<td>".$student->avarengeMark()."</td></tr>";
		}
	}
}
?>