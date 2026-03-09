<?php 

 function uploadImage(string|array $image):string|array{

        $validationErrors = [];

        $name2 = $image['name'];

        $extesnion = explode('.', $name2);
        $extension2 = strtolower(end($extesnion));

        $allowed_extensions = ['jpg','png','pdf','jfif'];

        if(!in_array($extension2 , $allowed_extensions)){

           $validationErrors["file1"] = "Extension $extension2 is not Allowed";
        }

        if($image['size'] > 6000){
           
         $validationErrors["file2"] = 'The Image size can not be larger than 6000 Bytes';
           
        }

        if(!empty($validationErrors))
        {

         $image_name = time() . '-'. rand(1,1000).'.'.$extension2;
       
         return $realImage = $image_name;

       } else {

        return $validationErrors;

       }
 }


function modify_date($dateTime , $days = 0 , $operation = "+")
{
    try {

        if($operation != "+" && $operation != "-")
        {
            throw new Exception("Only + and - accepted");
        }

        if($operation == "+")
        {
            return strtotime("+$days days", strtotime($dateTime));
        }

        return strtotime("-$days days", strtotime($dateTime));

    } catch(Exception $e){
        echo $e->getMessage();
    }
}


function encryptCookie($data, $key) {
    $cipher = "AES-256-CBC";
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
    
    $encrypted = openssl_encrypt($data, $cipher, $key, 0, $iv);
    
    return base64_encode($iv . $encrypted);
}


function decryptCookie($data, $key) {
    $cipher = "AES-256-CBC";
    
    $data = base64_decode($data);
    $iv_length = openssl_cipher_iv_length($cipher);
    
    $iv = substr($data, 0, $iv_length);
    $encrypted = substr($data, $iv_length);
    
    return openssl_decrypt($encrypted, $cipher, $key, 0, $iv);
}


$dictionary = [

   "Home" => "الصفحة الرئيسة",
   "Hello" => "مرحبا",
   "Contact us" => "تواصل معنا",
   "Services" => "خدماتنا",
   "Users" => "مستخدمون"

];

$name = "Yousuf";

function translate(string $word ,  String $lang = "en"):string{

global $dictionary;

$translatedWords = [];
$words = '';


    foreach($dictionary as $key => $value){

       if($key == $word)
        {
            return $value;
        }
       
    }

    return $word ;


   }
