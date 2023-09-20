<!-- Task 4: Fibonacci Series printing using a Function -->


<?php
    function printFibonacci($count) {
        $first = 0;
        $second = 1;
        echo $first, ', ', $second;
        $printedCount = 2;
        for ($i = 2; $i < $count; $i++) {
            $next = $first + $second;
            echo ', ', $next;
            $first = $second;
            $second = $next;

            $printedCount++;
        }
    }
    
    printFibonacci(15);
    


?>