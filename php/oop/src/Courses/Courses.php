<?php 

namespace Src\Courses;
trait Courses
{
    public $courses = [];

    public function setCourses($courses)
    {
        $this->courses = $courses;

        return $this;
    }


    public function getCourses()
    {
        return $this->courses;
    }
}