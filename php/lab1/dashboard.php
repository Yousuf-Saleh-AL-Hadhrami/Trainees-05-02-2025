<?php 

date_default_timezone_set("Asia/Muscat");

$expire = time() + 3600;

//echo date("Y-m-d H:i:s", $expire);


include "./includes/header.php";
include "./config/Authenticate.php";
include "./includes/functions.php";

$value = "This cookie has secret value";

 $value = encryptCookie($value , 25369);

if(!isset($_COOKIE['test'])){

setCookie("test",$value, $expire);
}





?>

Dashboard

<?php 
include "./includes/footer.php";
?>









