<?php

//finding day 

// $day = "";

// switch($day){
//     case 'Monday':
//         echo "Today is Monday";
//         break;
//     case 'Tuesday':
//         echo "Today is Tuesday";
//         break;
//     case 'Wednesday':
//         echo "Today is Webnesday";
//         break;
//     case 'Thrusday':
//         echo "Today is Thrusday";
//         break;
//     case 'Friday':
//         echo "Today is Friday";
//         break;
//     case 'Saturday':
//         echo "Today is Saturday";
//         break;
//     case 'Sunday':
//         echo "Today is Sunday";
//         break;
//     default:
//     echo "Wrong input";    
// }

//finding grade

$score = float (60);

switch ($score) {
    case ($score >= 90 && $score <=100):
        echo "You got A+ grade";
        break;
    
    case ($score >= 80 && $score <=100):
        echo "You got A grade";
        break;
    
    case ($score >= 70 && $score <=100):
        echo "You got B grade";
        break;
    
    case ($score >= 60 && $score <=100):
        echo "You passed the exam";
        break;
    
    default:
        echo "You failed the exam ";
        break;
}

?>
