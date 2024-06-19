<?php

$fruits = ["Grapes","Mango","Cherries","Kiwis"];
$new_fruits = ["Banana","Pineapple"];

echo "<pre>";
echo "original array";
print_r($fruits);
array_splice($fruits,2,2,$new_fruits);

echo "<pre>";
print_r($fruits);



?>