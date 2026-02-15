<?php 

// for($i = 1 ; $i <= 18 ; $i++)
//     {
//         echo $i . "<br>";
//     }


// $x = 1;
// while($x < 11)
    // {
    //    echo $x . "<br>";
    //    
    //    $x++;
    // }

// $y = 1;
// 
// do {
    // echo "Yousuf <br>";
// 
    // $y++;
// 
// }while($y > 11);

$numbers = [15 , 10 , 30 , 25 , 2.5];

$sum = 0;

$avg = 0;

$min = $numbers[0];

$max = $numbers[0];


foreach( $numbers as $number)
    {
         $sum = $sum + $number;

        echo $number . "<br>";

        $avg = $sum / 4;

        if($number < $min)
            {
                $min = $number;
            }

            if($number > $max)
    {
        $max = $number;
    }
    }

     echo " Sum = " . $sum . "<br>";
     echo " Avg = " . $avg . "<br>";
     echo " Minimum = " . $min . "<br>";
     echo " Maximum = " . $max . "<br>";


