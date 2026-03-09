<?php 
declare(strict_types=1);
 class Person
{

// Properties
   public ?int $id = null;
   public $name;
   public $address;

   public $hobbies = [];

   public static $counter = 0; // static property for class

   public const AGE = 18;

   public function __construct($id = null , $name = null , $address = null , $hobbies = [])
   {
      $this->id = $id;
      $this->name = $name;
      $this->address = $address;
      $this->hobbies = $hobbies;


      self::$counter ++;

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
           "Hobbies => " . implode("-", $this->hobbies);
   }


   public function showDetails()
   {
      return $this->getDetails();
   }

}