<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "./08-functions.php"; ?>

 <nav>
    <ul>
        <li><a href=""><?= translate('Home') ?></a></li>
        <li><a href=""><?= translate('Services')  ?></a></li>
        <li><a href=""><?= translate('Contact us')?></a></li>
    </ul>
 </nav>

 <?php 

  echo $_SESSION['USERNAME'];
  echo "<br>";
  unset($_SESSION['USERNAME']);

//   echo ini_get("session.gc_maxlifetime") / 60;

?>
    
</body>
</html>