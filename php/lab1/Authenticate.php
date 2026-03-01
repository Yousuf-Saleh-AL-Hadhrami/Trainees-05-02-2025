<?php 

if(!$_SESSION['login']){
  
header("location:index.php");
exit;
}