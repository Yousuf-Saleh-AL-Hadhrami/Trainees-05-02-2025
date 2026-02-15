<?php 

// declare(strict_types=1);
// Indexed Array 

$numbers = [10 ,"Nasser","Salim", 15 , 20 ,30, true, null];
$names = ["Ali","Nasser","Salim"];


echo $numbers[6];
echo "<br>";
echo $names[1];


// Associative Array 
$countries = [
    "om" => "Oman",
    "sa" => "Saudi Arabia",
    "qa" => "Qatar",
    10 => "Iran"

];


echo $countries[10];

echo "<br>";



// Multidieminsional Array 

$students = [

    ["id" => 10 , "name" => "Yousuf AL Hadhrami", "address" => "Izki", ["football","Programming"],["CSS","HTML"]],
    ["id" => 20 , "Ibrahim ALRashdi", "address" => "Nizwa"],
    ["id" => 30 , "Ahmed AL Sabari", "address" => "Mahah"],


];


echo $students[0][0][1];