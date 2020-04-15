<?php

/**
 * 
 * Take your ID and sort it into a string, ordered by biggest number to smallest. 
 * Example: 
 * 
 * $id = "8910295209871"
 * - your code goes here - 
 * - your code goes here - 
 * - your code goes here - 
 * - etc etc etc - 
 * echo $sortedid; // which outputs 9875210000000
 * 
 * -------------------------------------------------------------------------------------------------------------------------------------------------
 * DO NOT USE THE sort FUNCTIONS FOUND HERE http://php.net/manual/en/array.sorting.php THAT WOULD BE TOO EASY. DO IT YOURSELF. 
 * IF YOU REALLY CAN'T DO IT WITHOUT USING THOSE FUNCTIONS, THEN SUBMIT HAVING USED ONE OF THOSE FUNCTIONS. IT'S BETTER THAN NOT SUBMITTING AT ALL. 
 * -------------------------------------------------------------------------------------------------------------------------------------------------
 */

$id = "8910295209871";

// your code goes here
echo "Unsorted array is: ";
print_r($id);
echo "<br />";
$len = strlen($id);

for ($j = 0; $j < $len - 1; $j++) {
    for ($i = $j + 1; $i < $len; $i++) {
        if ($id[$i] > $id[$j]) {
            $temp = $id[$i];
            $id[$i] = $id[$j];
            $id[$j] = $temp;
        }
    }
}
echo "Sorted Array is: ";
$sortedid = preg_replace("/(.)\\1+/", "$1", $id);
//print_r($id);
echo $sortedid = str_pad($sortedid, 13, "0", STR_PAD_RIGHT);
echo "<br />";
