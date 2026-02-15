<?php 

$salary = 500.120; // double

$sum = "10" + 10; // Type Juggling

echo $salary;
echo "<br>";
echo gettype($sum);
echo "<br>";
echo $sum;
echo "<br>";

echo  (int)$salary;   // Type Casting
echo "<br>";

$floatNumber =  (double) "20";
var_dump($floatNumber);

echo "<br>";

echo PHP_FLOAT_MAX;
