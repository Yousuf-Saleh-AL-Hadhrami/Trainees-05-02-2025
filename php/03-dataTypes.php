<?php 

$name = "Yousuf";
$salary = 100;
$gpa = 3.13;
$friends = ["Ibrahim","Ahmed","Osama"];
$status = null;
$success = false;

class Book{

}

$book1 = new Book();


echo gettype($gpa);
echo is_numeric($salary);
echo is_string("test");
echo is_integer($salary);