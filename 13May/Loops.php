<?php
    
    //WHIILE LOOP

    // $i = 0;

    // while ($i <= 10) {
    //     $i++;
    //     if($i == 4) continue;
    //     echo $i;
    // }

    //Do while Loop;

    // $i = 0;

    // do {
    //     echo $i;
    //     $i++;
    // } while ($i <= 10);

    //for loop

    // for ($i=0; $i <= 10 ; $i++) { 
    //     echo "The number is ". $i ."<br>" ;
    // }

    //star printing

    // $rows = 5;

    // for ($i=1; $i <= $rows; $i++) { 

    //     for ($j=1; $j <= $i ; $j++) { 
    //     echo "#";
            
    //     }
    //     echo "<br>";
    // }

    //pyrid mid

    $rows = 5;

    // Outer loop to iterate through rows
    for ($i = 1; $i <= $rows; $i++) {
        // Inner loop to print spaces before stars
        for ($space = 1; $space <= ($rows - $i); $space++) {
            echo " ; ";
        }
        // Inner loop to print stars
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "* ";
        }
        // Move to the next line after each row is printed
        echo "<br>";
    }
?>