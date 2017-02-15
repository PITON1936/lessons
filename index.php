<?php 

require_once('person.php');
require_once('teacher.php');
require_once('student.php');
require_once('admin.php');

$student = new Student('Борис', 'Чалый', 'Романович', '937-99-92', 'boris@mail.ru', 5, 4.6);
$teacher = new Teacher('Игорь', 'Костенко', 'Борисович', '911', 'igor@mail.ru', 'English');
$admin = new Admin('Паша', 'Нерянов', 'Валерьевич', '101', 'pasha007@gmail.com',['Sunday', 'Monday', 'Tuesday']);

echo $admin->getVisitCard($admin);
?>