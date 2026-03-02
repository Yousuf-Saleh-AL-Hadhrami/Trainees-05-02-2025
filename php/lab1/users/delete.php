<?php 

include "./../includes/header.php";
include "./../config/Authenticate.php";
include "./../includes/database.php";


    $id = isset($_POST['id']) ? $_POST['id'] : intval(0);

    $delete = " DELETE FROM users WHERE id = $id";
    if(mysqli_query($connection , $delete)){

      $_SESSION['success'] = 'User Has Been Deleted!';
      header("location:index.php");
      exit;
    }

?>
