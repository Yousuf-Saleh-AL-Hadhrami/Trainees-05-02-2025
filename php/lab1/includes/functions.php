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