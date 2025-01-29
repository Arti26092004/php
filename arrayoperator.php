<?php

    // Comparing Integers 
    echo 1 <=> 1; // Outputs: 0
    echo "\n";
    echo 1 <=> 2; // Outputs: -1
    echo "\n";
    echo 2 <=> 1; // Outputs: 1
    echo "\n";
     
    // Comparing Floats
    echo 1.5 <=> 1.5; // Outputs: 0
    echo "\n";
    echo 1.5 <=> 2.5; // Outputs: -1
    echo "\n";
    echo 2.5 <=> 1.5; // Outputs: 1
    echo "\n";
     
    // Comparing Strings
    echo "x" <=> "x"; // Outputs: 0
    echo "\n";
    echo "x" <=> "y"; // Outputs: -1
    echo "\n";
    echo "y" <=> "x"; // Outputs: 1
    
?>