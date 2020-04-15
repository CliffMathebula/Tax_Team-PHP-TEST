<?php

// QUESTION 2
// consider the following array

$this_array = array(14, 23, 264, 654, 4, 34, 34);

// write code that will print out the sum of the values in the array
// NOTE: Please do not use the array_sum function


//SUPPLY YOUR ANSWER BELOW THIS COMMENT

function sumArray($array)
{
    $total = 0;
    foreach ($array as $value) {
        $total += $value;
    }
    //returning the total sum of array 
    return $total;
}

//calling the function and assign to total and print the total.
echo "Total number : ".$total = sumArray($this_array);
