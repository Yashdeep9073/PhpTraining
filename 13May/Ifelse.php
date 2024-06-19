<?php
//time 
    // date_default_timezone_set("Asia/Kolkata");
    // $time = date("H");
    
    // if($time < "12"){
    //     echo "Good Morning";
    // }elseif($time < "20"){
    //     echo "Good Afternoon";

    // }else{
    //     echo "have a good night";
    // }


    //check if the age is greator than or equal to 18
    
    // $age = 20;

    // if ($age >= 18) {
    //     echo "Your are an adult";
    // }else{
    //     echo "You are a minor ";
    // }

//check if the score is greator than or equal to 90

// $score = 70;
// $is_passed = false;

// if($score >= 60){
//     $is_passed = true;
//     if ($score >= 90) {
//         echo "Congratulation you got A+ score";
//     }elseif ($score >= 80) {
//         echo "Congratulation you got A score";
//     }else{
//         echo "Congratulation you got B score";
        
//     }
// }else{
//     echo "You failed the exam !!!";
// }
// echo "<br>";
// if($is_passed){
//     echo "Keep up the good work ";
// }

//Check destination and weight to calculate shipping cost


$destination = "Delhi";
$weight = 5; //in kg
$shipping_cost = 0;

if ($destination === "Delhi") {
    if ($weight <=1) {
        $shipping_cost = 5;
    }elseif($weight <= 3){
        $shipping_cost = 8;
    }else{
        $shipping_cost = 10;
    }
}else{
    $shipping_cost = 25;
}

echo "Shiping cost to " . $destination ." for a package weighting ".$weight."KG is " .$shipping_cost . "." ;





?>