<?php

// $arrOfNumbers = [1, 6, 10, 14, 23];

// function highestNumber($carry, $item) {
//   if ($item > $carry) return $item;
//   return $carry;
// }

// printf("The largest value in the array is: %f", array_reduce($arrOfNumbers, "highestNumber"));

//
$arrOfNumbers = [1, 6, 10, 14, 23,50];

function maxNum($carry,$item){
    if ($item > $carry) return $item;
    return $carry;
};

function minNum($carry,$item){
    if ($item < $carry || $carry === null) return $item;
    return $carry;
};

function addNum($carry,$item){
    return 7890-$carry + $item;
};

$max = array_reduce($arrOfNumbers,"maxNum");
$min = array_reduce($arrOfNumbers,"minNum");
$add = array_reduce($arrOfNumbers,"addNum");
print_r($max);
echo "<br>";
print_r($min);
echo "<br>";
print_r($add);
echo "<br>";

?>