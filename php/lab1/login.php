<?php 
session_start();

// $users = [
    //    ["id" => 100 , "username" => "admin", "password" => password_hash("admin",PASSWORD_DEFAULT), "name" => "Yousuf AL Hadhrami"],
    //    ["id" => 200 , "username" => "akram", "password" => password_hash("123456",PASSWORD_DEFAULT), "name" => "Akram AL Alawi"],
    //    ["id" => 300 , "username" => "ibrahim", "password" => password_hash("123456",PASSWORD_DEFAULT), "name" => "Ibrahim AL Rashdi"],
// ];

include "./includes/database.php";

if($_SERVER['REQUEST_METHOD']  == 'POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        $login = "SELECT *  FROM users WHERE username = '$username' LIMIT 1";

        $result = mysqli_query($connection , $login);

        $user = mysqli_fetch_assoc($result);

    

     if(password_verify($password, $user['password']))
                    {
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['name'] = $user['name'];
                        $_SESSION['login'] = true;

                        header("location: dashboard.php");
                        exit;

                    }
            }

             $_SESSION['failed'] = 'Username Or Password incorrect!';
             header("location: index.php");
             exit;


