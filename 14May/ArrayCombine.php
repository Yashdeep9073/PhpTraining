<?php
//combine 
//   $keys = array("one", "two", "three", "four");
//   $values = array(1, 2, 3, 4);

//   $combinedArray = array_combine($keys, $values);
//   echo "<pre>";         
//   print_r($combinedArray);

//

$color = ["red","green","yellow"];
$number = [1,2,3];

$combineArray = array_combine($color,$number);
echo "<pre>";
print_r($combineArray);
?>
