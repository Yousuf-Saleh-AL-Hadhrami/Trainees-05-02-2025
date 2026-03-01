<?php 

// PHP Using mysqli procedural 
// PHP Using mysqli OOP 
// PHP PDO => PHP DATA OBJECT [sqlite , mysql , sqlserver , oracle , postgress , MONGOdb]


try{

$connection = mysqli_connect("localhost","root","","training_25_02_2025");

// if($connection){
    // 
    // echo "Connected";
// }
}catch(Exception $e)
{

echo $e->getMessage();
}