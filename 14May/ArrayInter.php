<?php


$first_array=array(5, 2, 1, 12, 65, 7);
$second_array=array(1, 5, 3, 7, 2, 6);
$third_array=array(7, 6, 4, 2, 7, 65, 100);

$interSec = array_intersect($first_array,$second_array,$third_array);

echo "<pre>";
print_r($interSec);








?>