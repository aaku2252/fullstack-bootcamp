<?php

//> String methods
$a='Akash University';
echo 'Total Length: '.strlen($a).'<br/>';
echo ' Total Words: '.str_word_count($a).'<br/>';
echo 'reversed string :'.strrev($a).'<br/>';

echo 'position :'. strpos($a, 'n')."<br/>";
echo 'Replace :'. str_replace('Akash','Future', $a)."<br/>";

echo 'Lowercase : '.strtolower($a)."<br/>";
echo 'Uppercase : '.strtoupper($a)."<br/>";


echo "Trimmed string : ".trim($a).'<br/>';


//> Number methods

$a= 6.7;
$b = -6.4;
$c = array(4,3,5,6,49,75,5,3);

echo "Absolute Number : ".abs($b).'<br/>';
echo "Ceil Number : ".ceil($b).'<br/>';
echo "Floor Number : ".floor($a).'<br/>';
echo "Round number : ".round($b).'<br/>';
echo "Power Value : ".pow(3,4).'<br/>';
echo "Random : ".rand(1,100).'<br/>';
echo "Maximum Number : ".max(2,4,5,6,7,8,9,5,4).'<br/>';
echo "Minimum Number : ".min(2,4,5,6,7,8,9,5,4).'<br/>';
echo "Minimum Number : ".max($c).'<br/>';


//> Array in php
//define an associated array
$a = array("Peter"=>43,"Ben"=>23,"John"=>45);


// $key and value are name of variables we can use any name.

foreach($a as $key=>$value) {
    echo "The Value of ".$key." is ".$value."<br/>";
}

//> Functions in php

function func(){
    echo "this is a function in php.";
}



//* passing argument
function argFunc($a,$b){
    return $a+$b;
}



//* Passing default arguments

function argDefaultFunc($a,$b=50){
    return $a+$b;
}



//* Variable length argument

function funcSpread($a=0,...$args){
    foreach($args as $ar ){
        $a+=$ar;
    }
    return $a;
}

$addSpread = funcSpread(20,...[20,30,20]);