<?php

    $color = ["red","black","white"];

    $color_list = [1 => "green",2 => "yellow"];
    
    foreach ($color as  $value) {
        echo "<pre>";
        echo $value;
    }

    print_r(array_replace($color,$color_list));


?>