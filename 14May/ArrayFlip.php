<?php
    $originalArray = [
        "apple" => "fruits",
        "carrot" => "vegatables",
    ];

    $flipArray = array_flip($originalArray);

    echo "<pre>";
    print_r($originalArray);
    print_r($flipArray);
?>