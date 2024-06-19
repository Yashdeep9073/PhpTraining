<?php
//array_column(array, column_key, index_key)
    // $cloths = [
    // ["color" => "Red","fabric" => "jeans"],
    // ["color" => "Blue","fabric" => "cotton"],
    // ["color" => "White","fabric" => "denim"],
    // ];
    
    // $fabrics  = array_column($cloths,"color");
    // echo "<pre>";
    // print_r($fabrics);

    //example 

    $array = [
        [
            "id" => 1,
            "fname" => "Yash",
            "lname" => "deep",
        ],
        [
            "id" => 2,
            "fname" => "Aman",
            "lname" => "jot",
        ],
        [
            "id" => 3,
            "fname" => "Gur",
            "lname" => "preet",
        ],
        [
            "id" => 4,
            "fname" => "Suvi",
            "lname" => "shrestha",
        ],
        [
            "id" => 5,
            "fname" => "Kushal",
            "lname" => "kumar",
        ],
    ];


        $a = array_column($array,"fname");

        echo "<pre>";
        print_r($a);
  
  
?>