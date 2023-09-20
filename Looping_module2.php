<?php

// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a  step of 2. 
for($i=2;$i<=20;$i+=2){
    echo $i." ";
}

//  you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print.

function printNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i;
        if ($i + $step <= $end) {
            echo ', ';
        }
    }
}

$start = 2;
$end = 20;
$step = 2;

printNumbers($start, $end, $step);


// Also do the same using while loop .
$i=1;
while($i<=20){
    $i++;
    if($i%2==0){
        echo $i.",";
    }
  
}

// do-while loop

$i=2;
do{
    echo $i;
    $i+=2;
    if($i<=20){
        
        echo " ";
    }

}while($i<=20);



?>