<?php 


class Employee extends Person
{

     public $basicSalary;
     public $bouns;

     public $dedution;

     public $totalSalary;

    //  public function __construct($id = null, $name = null, $address = null, $hobbies = [])
    //  {
    //      parent::__construct($id, $name, $address, $hobbies);
    //  }

    public function setBasicSalary($salary)
    {
        $this->basicSalary = $salary;

        return $this;
    }

    public function setBounus($bounus)
    {
        $this->bouns += $bounus;

        return $this;
    }

    public function setTotalSalary()
    {
        $this->totalSalary += $this->basicSalary + $this->bouns;

        return $this;
    }


    public function getTotalSalary()
    {
        return $this->totalSalary;
    }


    public function deduct($riyal)
    {
        $this->totalSalary -= $riyal;

        return $this;
    }


    protected function getDetails()
    {
        return parent::getDetails() . "<br>" .
                     "Basci Salary  => " . $this->basicSalary . "<br>".
                     "Bounus  => " . $this->bouns . "<br>".
                     "Total Salary  => " . $this->totalSalary ;
                      
    }


}