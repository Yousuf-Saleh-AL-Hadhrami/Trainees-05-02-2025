<?php 
declare(strict_types=1);


require "Person.php";
require "Student.php";
require "Employee.php";
require "DailyEmployee.php";




$p1 = new Person(name:"Nasser");
$p2 = new Person;
$p3 = new Person;

$student1 = new Student(name:"Sultan");

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



echo $emp1->setName("Akram AL Alawi")
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

echo"<br>";
echo"<br>";




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


echo $student1->setId(500)
              ->setName("Ali")
              ->setAddress("Manha")
              ->setHobbies(['Tennis'])
              ->setStudentId(205690)
              ->setMajor("Software Engineering")
              ->setGpg(3.7)
              ->getDetails();



echo"<br>";
echo"<br>";


echo $p1->showDetails();
echo"<br>";
echo"<br>";
echo $p2->showDetails();
echo"<br>";
echo"<br>";
echo $p3->showDetails();

echo"<br>";
echo"<br>";


echo Student::AGE;

echo"<br>";
echo"<br>";

// echo Person::$counter;
echo Person::getCounter();


if($_SERVER['REQUEST_METHOD'] == 'POST'){

   $id = (int)$_POST['id'];

    echo $dailyEmp1->setName($_POST['name'])
    ->setId($id)
              ->setAddress($_POST['address'])
              ->setDays($_POST['days']) 
              ->setRate($_POST['rate']) 
              ->setTotalSalary()
              ->getDetails();

}





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
