<?php 

require "./includes/database.php";

/*

DDL => Data Definistion Language [ Create , ALTER , DROP , TRUNCATE ]
DML => Data Manipulation Language [ INSERT ,UPDATE , DELETE ]
DQL => Data Query Language [ SELECT , WHERE , ORDER BY ....] 
DCL => Data Control Language [ grant , Revoke , etc ]
TCL => Transaction Control Language [ Start Transcation , Commit , Rollback ]


*/

$hashedPassword = password_hash('123456', PASSWORD_DEFAULT);

$queryInsert = " INSERT INTO users (id , username , password , name , role)
                 VALUES (200, 'akram', '$hashedPassword' , 'Akram AL Alawi', 'user'); 
                 ";

$user = mysqli_query($connection , $queryInsert);

if($user){

   echo "The User is Created";
}