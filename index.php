<?php require "student.php";


$student = new Student("Billy", 19);
$student2 = new Student("Marie", 22);
// $student3 = new student();

$student->setId("azerty123");
var_dump($student);
var_dump($student2);
// var_dump($student3);

echo "<p>$student->firstname : " .  $student->getId() . "</p>";