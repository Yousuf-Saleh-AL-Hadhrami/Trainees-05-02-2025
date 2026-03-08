<?php 
declare(strict_types=1);

require "Person.php";
require "Student.php";



$p1 = new Person(name:"Nasser");
$p2 = new Person;
$p3 = new Person;

//$student1 = new Student(name:"Sultan");


$p1 ->setName("Yousuf")
   ->setAddress("Izki")
   ->setId(100)
   ->setHobbies(["Programming","Reading","Swimming"]);


$p2->setName("Ibrahim");
$p2->setAddress("Nizwa");
$p2->setId(200);
$p2->setHobbies(["Networking","Reading","Swimming"]);


$p3->setName("Ahmed");
$p3->setAddress("Nizwa");
$p3->setId(300);
$p3->setHobbies(["Networking","Running","Play Station"]);


// echo $student1->setId(500)
//               ->setName("Ali")
//               ->setAddress("Manha")
//               ->setHobbies(['Tennis'])
//               ->setStudentId(205690)
//               ->setMajor("Software Engineering")
//               ->setGpg(3.7)
//               ->getDetails();



echo"<br>";
echo"<br>";


echo $p1->getDetails();
echo"<br>";
echo"<br>";
echo $p2->getDetails();
echo"<br>";
echo"<br>";
echo $p3->getDetails();

echo"<br>";
echo"<br>";


echo Student::AGE;

echo"<br>";
echo"<br>";

// echo Person::$counter;
echo Person::getCounter();
