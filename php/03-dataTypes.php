<?php

$name = "Yousuf"; // string 
$salary = 100;  // integer
$gpa = 3.13; // double
$friends = ["Ibrahim", "Ahmed", "Osama"]; // array
$status = null; // NULL
$success = false; // Boolean

class Book {}

$book1 = new Book(); // object 


echo gettype($gpa);
echo is_numeric($salary);
echo is_string("test");
echo is_integer($salary);