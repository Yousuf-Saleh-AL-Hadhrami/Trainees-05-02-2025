<?php 
session_start();

echo "<pre>";
var_dump($_GET);
var_dump($_POST);
var_dump($_REQUEST); /* $_GET + $_POST + $_COOKIE */
var_dump($_SERVER);
var_dump($_COOKIE);
var_dump($_SESSION);
var_dump($_FILES);
var_dump($_ENV);
var_dump($GLOBALS);


$_SESSION['USERNAME'] = "Yousuf AL Hadhrami";
$_SESSION['is_login'] = true;

