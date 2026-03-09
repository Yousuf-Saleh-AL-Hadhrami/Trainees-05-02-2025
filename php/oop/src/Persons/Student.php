<?php 
declare(strict_types=1);

namespace Src\Persons;

use Src\Persons\Person;
use Src\Universities\Rules;
use Src\Universities\Exams;
use Src\Courses\Courses;



class Student extends Person implements Rules,Exams
{

  use Courses;
    public $studentId;
    public $major;

    public  $university;

    private $gpa;


    public $rules = [];

    const AGE = 21;

    public function __construct($id = null, $name = '', $address = '', $hobbies = [] , $stdid = null , $major = null, $university)
    {
        parent::__construct($id, $name, $address, $hobbies);

        $this->studentId = $stdid;
        $this->major = $major;
        $this->university = $university;

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
                    "GPA => " .$this->gpa . "<br>" . 
                    "Rules => ". implode(',', $this->rules) .  "<br>" .
                    "Exams => " . implode(",", $this->exams()) .  "<br>" .
                    "Courses => " . implode(',', $this->getCourses()) .  "<br>" .
                    "University => " . $this->university->unversity_name;
    }


    public function setRules(array $rules = [])
    {
        $this->rules = $rules;

        return $this;
    }

    public function exams():array
    {
        return [
            "exam1" => "PHP on 15 March 2026",
            "exam2" => "HTML on 16 March 2026",
            "exam3" => "C++ on 17 March 2026",

        ];
    }

}