<?php 

class Student extends Person 
{
    public $studentId;
    public $major;

    public $gpa;

    const AGE = 21;

    // public function __construct($id = null, $name = null, $address = null, $hobbies = [] , $stdid = null , $major = null  , $gpa = null)
    // {
    //     parent::__construct($id, $name, $address, $hobbies);

    //     $this->studentId = $stdid;
    //     $this->major = $major;
    //     $this->gpa = $gpa;
    // }


    public function setStudentId($stdid)
    {
        $this->studentId = $stdid;

        return $this;
    }


    public function setMajor($sps)
    {
        $this->major = $sps;

        return $this;
    }

    public function setGpg($g)
    {
        $this->gpa = $g;

        return $this;
    }

    public function getDetails()
    {
        return
         parent::getDetails() . "<br>". 
                    "Student Id => " .$this->studentId . "<br>" .
                    "Major => " .$this->major . "<br>" .
                    "GPA => " .$this->gpa . "<br>" ;
    }
}