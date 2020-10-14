<?php require "student.php";


$student = new Student("Billy", 19);
$student2 = new Student("Marie", 22);
// $student3 = new student(null, null);

$student->setId("azerty123");
var_dump($student);
// var_dump($student2);
// var_dump($student3);

echo "<p>$student->firstname : " .  $student->getId() . "</p>";
echo "<p>Base code étudiant: ". Student::$base."</p>";
student::setBase("21");
echo "<p>Base code étudiant2: ". Student::$base."</p>";
echo "<p>Base code étudiant3: ". Student::$base."</p>";
echo "<p>valeur max : ". Student::MAX ."</p>";