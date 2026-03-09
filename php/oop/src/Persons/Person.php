<?php 
declare(strict_types=1);

namespace Src\Persons;

use Src\Cars\Car;

 class Person extends Car
{

// Properties
   //public ?int $id = null; // nullable typed property.
   public string $name; // typed property
   public string $address;

   public array $hobbies = [];

   public static int $counter = 0; // static property for class

   public const AGE = 18;
    
     // constructor property promotion
   public function __construct(public ?int $id = 10 , $name = '' , $address = '' , $hobbies = [])
   {
      $this->id = $id;
      $this->name = $name;
      $this->address = $address;
      $this->hobbies = $hobbies;


      self::$counter ++;

      echo "You have taken an instance of this class";
      echo "<br>";

   }


   public static function getCounter()
   {
      return self::$counter; 

   }




   public function setId($id)
   {
    $this->id = $id;

    return $this;
   }

   public function getId()
   {
     return $this->id;
   }

   public function setName($n)
   {
    $this->name = $n;

    return $this;
   }

   public function getName()
   {
    return $this->name;
   }

   public function setAddress($add)
   {
    $this->address = $add;

    return $this;

   }

   public function getAddress()
   {
    return $this->address;
   }


   public function setHobbies($hobb)
   {
    $this->hobbies = $hobb;

    return $this;

   }


 protected function getDetails()
   {
    return "Id  => " . $this->id . "<br>" .
           "Name  => " . $this->name . "<br>" .
           "Address  => " . $this->address . "<br>" .
           "Hobbies => " . implode("-", $this->hobbies) . "<br>". 
           "Car Details => ". $this->getCarDetails();
   }


   public function showDetails()
   {
      return $this->getDetails();
   }


   public function setCarNumber($no)
   {
      $this->carNo = $no;

      return $this;
   }


   public function setCarName($carName)
   {
      $this->carName = $carName;

      return $this;
   }

   public function setCarColor($color)
   {
      $this->carColor = $color;

      return $this;
   
   }


}