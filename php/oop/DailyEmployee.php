<?php 


class DailyEmployee extends Employee
{
    public $days;

    public $rate;


    public function setDays($days)
    {
        $this->days += $days;

        return $this;
    }

    public function setRate($rate)
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