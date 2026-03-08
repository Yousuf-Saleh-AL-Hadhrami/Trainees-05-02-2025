<?php

include "./lab1/includes/functions.php";
/*

 UNIX Epoch Time => Seconds Since 1/1/1970 00:00:00 UTC 

 time() => Timestamp

 change Timezone at run time;p

*/
date_default_timezone_set("Asia/Muscat");
// echo date_default_timezone_get();
// echo "<br>";
//  echo time();
//  echo "<br>";
// 
//  $lastMonth = time() - 30 * 24 * 60 * 60;
// 
//  $dateInSeconds = strtotime("+ 10 days", strtotime("1975-07-21"));
// 
//  echo date("Y-m-d-l H:i:s", $dateInSeconds);


echo date("Y-m-d-l" , modify_date("1980-08-25", 10, "jhkjhkj"));