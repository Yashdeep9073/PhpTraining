<?php

$x = [1,2,3,4,5];
$y = [1,2,3,4,5];
$z = array_merge($x,$y);
echo "<pre>";
print_r($z);


//
$arr1 = array(2 => "red", 6 => "green");
$arr2 = array(1 => "blue", 7 => "orange");
$arr3 = array(10 => "purple", 5 => "pink");
$arr4 = array_merge($arr1, $arr2, $arr3);
echo "<pre>";
print_r($arr4);

?>