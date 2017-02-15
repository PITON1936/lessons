<?php 

class Person{

	protected $name;
	protected $surname;
	protected $patronymic;
	protected $phone;
	protected $email;
	private $id = 0;

	public function setId($id){
        $this->id =$id;
    }

	function __construct($name, $surname, $patronymic, $phone, $email){
		$this->name = $name;
		$this->surname = $surname;
		$this->patronymic = $patronymic;
		$this->phone = $phone;
		$this->email = $email;
	}

	public static function getInstance ($id, PDO $pdo){
        $stmt = $pdo->prepare("SELECT * from person WHERE id=:id");
        $stmt ->bindValue(":id", $id);
        $result = $stmt->execute();
        $row = $stmt->fetch();
        if(empty($row)){return null;}

        if($row['ROLE'] == 'Admin'){
            $person = new Admin(
                    $row['Name'],
                    $row['Surname'],
                    $row['Patronymic'],
                    $row['Phone'],
                    $row['Email'],
                    $row['Schedule']
                );
        }
        else if($row['ROLE']=='Teacher'){
            $person = new Teacher(
                    $row['Name'],
                    $row['Surname'],
                    $row['Patronymic'],
                    $row['Phone'],
                    $row['Email'],
                    $row['Lessons']
                );
        }else if($row['ROLE']=='Student'){
            $person = new Student(
                    $row['Name'],
                    $row['Surname'],
                    $row['Patronymic'],
                    $row['Phone'],
                    $row['Email'],
                    $row['AvarengeMarks'],
                    $row['Visits']
                );

        }
        $person -> setId($row['id']);
        return $person;
    }


	public function getVisitCard(){
		$res = "Name: ".$this->name."<br>";
		$res .= "Surname: ".$this->surname."<br>";
		$res .= "Patronymic: ".$this->patronymic."<br>";
		$res .= "Phone: ".$this->phone."<br>";
		$res .= "E-mail: ".$this->email."<br>";
		return $res;
	}

}

?>