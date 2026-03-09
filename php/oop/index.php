<?php 
declare(strict_types=1);

// require "Car.php";
// require "Person.php";
// require "Rules.php";
// require "Exams.php";
// require "Courses.php";
// require "University.php";
// require "Student.php";
// require "Employee.php";
// require "DailyEmployee.php";

require './vendor/autoload.php';

use Carbon\Carbon;
use Src\Persons\DailyEmployee;
use Src\Persons\Employee;
use Src\Persons\Person;
use Src\Persons\Student;
use Src\Universities\University;


$now = new Carbon();
$now->setLocale('ar');

$date = Carbon::create(2026, 1, 1);

echo $date->diffForHumans();


               // Named parameters
$p1 = new Person(name:"Nasser", hobbies: ["Hobby1","Hobby2"], id: 500, address: "Izki");
// $p2 = new Person;
// $p3 = new Person;

$unviversity = new University("Sultan Qaboos University");
$unviversity2 = new University("Nizwa University of Technology and applied science");


$student1 = new Student($id = null, "Yousuf" , $address = '' , $hobbies = [] , 1000, "IT", $unviversity);
$student2 = new Student($id = null, "Ibrahim" , $address = '' , $hobbies = [] , 3000, "IT", $unviversity2);

$emp1 = new Employee();

$dailyEmp1 = new DailyEmployee();



// echo $dailyEmp1->setName("Salim AL Mahrouqi")
//      ->setId(9000)
//      ->setAddress("Muscat")
//      ->setHobbies(["Networking","Programming","Football"])
//      ->setDays(22)
//      ->setDays(1)
//      ->setRate(7)
//      ->setTotalSalary()
//      ->getDetails();


echo"<br>";
echo"<br>";



/*echo $emp1->setName("Akram AL Alawi")
     ->setId(5000)
     ->setAddress(" AL Hamra")
     ->setHobbies(["Networking","Programming","Football"])
     ->setBasicSalary(300)
     ->setBounus(150)
     ->setBounus(50)
     ->setBounus(3)
     ->deduct(50)
     ->setTotalSalary()
   //   ->deduct(15)
   //   ->deduct(10)
     ->showDetails();

     */

echo"<br>";
echo"<br>";


// $p3->setName("Ahmed");
// $p3->setAddress("Nizwa");
// $p3->setId(300);
// $p3->setHobbies(["Networking","Running","Play Station"]);


echo $student1->setId(500)
              //->setName("Ali")
              ->setAddress("Manh")
              ->setHobbies(['Tennis'])
              ->setStudentId(205690)
              ->setMajor("Software Engineering")
              ->setGpg(3.7)
              ->setRules(["Absence not More 30%", "Grade not less than 2","Must Park your car in students parks"])
              ->setCourses(['HTML','CSS','JAVASCRIPT','PHP'])
              ->getDetails();



echo"<br>";
echo"<br>";

echo $student2->setId(700)
              //->setName("Ali")
              ->setAddress("Nizwa")
              ->setHobbies(['Football'])
              ->setStudentId(20565890)
              ->setMajor("Software Engineering")
              ->setGpg(3.7)
              ->setRules(["Absence not More 30%", "Grade not less than 2","Must Park your car in students parks"])
              ->setCourses(['HTML','CSS','JAVASCRIPT','PHP'])
              ->getDetails();




echo $p1->setCarNumber(4025)
         ->setName("Yousuf")
        ->setCarColor("White")
         ->setCarName("Camry")
         ->showDetails();
echo"<br>";
echo"<br>";
// echo $p2->showDetails();
echo"<br>";
echo"<br>";
// echo $p3->showDetails();

echo"<br>";
echo"<br>";


// echo Student::AGE;

echo"<br>";
echo"<br>";

// echo Person::$counter;
// echo Person::getCounter();


// if($_SERVER['REQUEST_METHOD'] == 'POST'){

//    $id = (int)$_POST['id'];
//    $days = (int)$_POST['days'];
//    $rate = (int)$_POST['rate'];


//     echo $dailyEmp1->setName($_POST['name'])
//     ->setId($id)
//               ->setAddress($_POST['address'])
//               ->setDays($days) 
//               ->setRate($rate) 
//               ->setTotalSalary()
//               ->getDetails();

// }





?>


<form action="" method="post">

 <div>
       <input type="number" name="id">
     </div>

     <div>
       <input type="text" name="name">
     </div>

     <div>
       <input type="text" name="address">
     </div>

          <div>
       <input type="number" name="days">
     </div>

          <div>
       <input type="number" name="rate">
     </div>

     <button type="submit">Save</button>




</form>
