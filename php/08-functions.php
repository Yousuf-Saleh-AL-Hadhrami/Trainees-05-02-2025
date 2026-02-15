<?php 
declare(strict_types=1);
// function vs procedure

// Built-in functions 
// user defined functions

// Procedure
function makeBreak()
{  
    echo "<br>";
}


// echo "10";
// makeBreak();
// echo "100";
// makeBreak();

// echo strlen("Yous uf");


function sum(int|float|string|array $x , int $y):int|string
{
    return "String" . $x + $y;
   
}

// echo sum(10 , 2);


function check_array(array $numbers = [] , bool $status = false ):string
{
   $sum = 0;
   $avg = 0;
   $max = $numbers[0];
   $min = $numbers[0];
   $counter = 0;

   if($status):

   foreach( $numbers as $number)
    {
        $counter += 1;
    }

    for($i = 0; $i < $counter; $i++)
        {
            $sum += $numbers[$i];


            if($numbers[$i] > $max)
                {
                    $max = $numbers[$i];
                }


                if($numbers[$i] <  $min)
              {
                 $min = $numbers[$i];
                }
        }

        $avg = $sum / $counter;

        return 
         "Sum = " . $sum . "<br>".
         "Average = " . $avg . "<br>".
         "Max = " . $max . "<br>".
         "Min = " . $min . "<br>".
         "====================".
         "<br><br>";

else:

    return "Status Not True Can't Make Operation";

endif;


}


// echo check_array([5 , 6 , 8 , 15, 2], true);
// echo check_array([1.5 , 6 , 25 , 15, 2]);
// echo check_array([5 , 6 , 8 , 15, 1]);
// echo check_array([0.5 , 45 , 8 , 15, 2, 21]);


$dictionary = [

   "Home" => "الصفحة الرئيسة",
   "Hello" => "مرحبا",
   "Contact us" => "تواصل معنا",
   "Services" => "خدماتنا"

];

$name = "Yousuf";

function translate(string $word ,  String $lang = "en"):string{

global $dictionary;

$translatedWords = [];
$words = '';


    foreach($dictionary as $key => $value){

       if($key == $word)
        {
            return $value;
        }
       
    }

    return $word ;


   }

echo translate('Services');




