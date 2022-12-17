<?php 

/**
 * Assignment of Random number between 0 and 1
 * Class #2
 */

 #initialing the rang of value to be printed
 $min_value = 0;
 $max_value = 1;

 #randmon seed for rang of decimal
 $rand_value = rand();

 #random number generator
 $rend_gen = rand($min_value * $rand_value, $max_value * $rand_value) / $rand_value; 
 
 #printing the expected value of rend_gen 
 echo ucwords("The random number between (") . $min_value . " , " . $max_value . ") is = " . $rend_gen;


?>