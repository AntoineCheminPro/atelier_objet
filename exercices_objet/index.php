<?php require "dog.php";

$dog1 = new Dog();
$dog2 = new Dog();
$dog3 = $dog2;

require "customer.php";

$customer = new Customer();
$customer2 = new Customer();
$customer->name = "Doe";
$customer->firstname = "John";
$customer->age = 42;
$customer->payments = ["visa", "mastercard", "paypal"];

$customer->name = strtoupper($customer->name);
$customer->firstname = strtoupper($customer->firstname);
array_push($customer->payments, "cash");


// echo "<p>$customer->firstname $customer->name" . " is $customer->age years old.</p>"
//     . "<p>He has the following means of payement :</p>";
//     foreach ($customer->payments as $payment){
//     echo "<p> - " . $payment ."</p>"; 
//     }

    require "bird.php";
$bird = new Bird ("sparrow","grey",3 ,["europe", "north america", "asia"]);

// var_dump($bird);
// $bird->sing();

// $bird->fly("paris");
require "otherBird.php";

$data = [
    "type" => "sparrow",
    "color" => "white",
    "age" => 2,
    "areas" => ["europe", "north america", "asia"],
  ];

  $otherBird = new OtherBird($data);


  require "student.php";

  $student = new Student();

// Using setters to give values to attributs

$student2 = new Student();


// try {
//     // Appel à vos setters
//     $student->setName("Timmy");
//     $student->setAge(35);
//     $student2->setName("a");
//     $student2->setAge(1250);
//   }
//   catch (\Exception $e) {
//     // Affichage du message
//   }

//   var_dump($student);
//   var_dump($student2);

require "book.php";
$data = [
    "title" => "The rain",
    "pages" => 246,
  ];

$book = new Book($data);
echo "<br>" . $book->getTitle() . " has " . $book->getPages() . " pages";

