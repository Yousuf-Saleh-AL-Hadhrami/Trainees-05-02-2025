<?php 
declare(strict_types=1);

namespace Src\Cars;

abstract class Car
{
   public $carNo;
   public $carName;
   public $carColor;

   private $test = "Test Car";



   abstract public function setCarNumber($no);
   

   abstract public function setCarName($carName);
  

   abstract public function setCarColor($color);


   public function getCarDetails()
   {
       return $this->carNo . " " . $this->carName . " " . $this->carColor ;
   }
   

}