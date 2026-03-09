<?php 

class Student extends Person 
{
    public $studentId;
    public $major;

    private $gpa;

    const AGE = 21;

    public function __construct($id = null, $name = null, $address = null, $hobbies = [] , $stdid = null , $major = null )
    {
        parent::__construct($id, $name, $address, $hobbies);

        $this->studentId = $stdid;
        $this->major = $major;

    }


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

    // Method Overrding 
    public function getDetails()
    {
        return
         parent::getDetails() . "<br>". 
                    "Student Id => " .$this->studentId . "<br>" .
                    "Major => " .$this->major . "<br>" .
                    "GPA => " .$this->gpa . "<br>" ;
    }
}