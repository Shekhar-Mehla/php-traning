<?php

echo "hello world";
$x = "shekar";
$y = "shekhar";
echo "/n".$x.$y;
// if elsce condition

$age = 10;
if($age>=18)
echo '\nyou can vote  ';
else
echo "/n you cannot vot...       ";
// array types
// index array
$arr1 = array("hllo","world",3,4,"shelkar");
print_r($arr1);
// associative array it keeps the key value pair like an object in js
$arr2 = array("name"=>"shekhar","lastname"=>"nmehla","ll"=>"nmehla");
print_r($arr2);
print_r($arr2["ll"]);


// another normal wayt of creatting array
$arr4 = [1,2,3,4,5,6,7=>[8,9,0]];
print_r($arr4);




?>