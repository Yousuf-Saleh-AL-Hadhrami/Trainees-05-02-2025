<?php 

// Built-in Constants 
// User Defined Constants 
// Magic Constants 


// Built-In Constants 

echo PHP_VERSION;
echo "<br>";
echo PHP_OS;


 // Magic Constants

 echo __DIR__;
echo "<br>";
echo __file__;
echo "<br>";
echo __line__;

function test()

{
    __FUNCTION__;

    return 'rest';
}

echo test();