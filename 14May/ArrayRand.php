<?php
  $fruits = array("apple", "banana", "orange", "grape", "mango");

  $x = array_rand($fruits);
  echo "<pre>";
  print_r($fruits[$x]);
  echo "<br>";



  $colors = ["red", "green", "blue", "yellow", "brown"];
  $random_keys = array_rand($colors,3);

  echo $colors[$random_keys[0]] . ", ";
//   echo $colors[$random_keys[1]] . ", ";
//   echo $colors[$random_keys[2]];
?>