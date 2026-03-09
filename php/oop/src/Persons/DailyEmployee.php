<?php 

declare(strict_types=1);

namespace Src\Persons;

use Src\Persons\Employee;
use Src\Persons\Person;

class DailyEmployee extends Employee
{
    public ?int $days = null;

    public ?int $rate = null;


    public function setDays(int $days)
    {
        $this->days += $days;

        return $this;
    }

    public function setRate(int $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    public function setTotalSalary()
    {
        $this->totalSalary = $this->days * $this->rate;

        return $this;
    }

    public function getTotalSalary()
    {
        return $this->totalSalary;
    }

    public function getDetails()
    {
        return 
        
         Person::getDetails() . "<br>" .
         "Days => " . $this->days . "<br>" .
         "Rate => " . $this->rate . "<br>" .
         "Total Salary => " . $this->totalSalary . "<br>" ;
    }
}