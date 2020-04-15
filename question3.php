<?php

// QUESTION 3

// consider the following array
$person_array = array('Leanna', 'derek', 'Lisa', 'John', 'lancelot', 'Michael', 'norman', 'Lawrence of Arabia');

/**
  write a loop that will print out (on a new line) all names that
  begin with L or l (both uppercase and lowercase) that are longer than 5 characters
 */

//SUPPLY YOUR ANSWER BELOW THIS COMMENT

$userinput = "l"; //user input 
$input = preg_quote($userinput, '~');
$result = preg_grep('~' . $input . '~', $data);
$result = array_filter($data, function ($item) use ($input) {
    if (stripos($item, $input) !== false) {
        return true;
    }
    return false;
});

$firstCharacter = "";
$string = '';

foreach ($person_array as $key) {
    $string =  $key;
    //Get the first character using substr.
    $firstCharacter = substr($string, 0, 1);

    if (($firstCharacter == strtoupper($userinput)) || ($firstCharacter == strtolower($userinput))) {
        //prints the array value if is greater than 5
        if (strlen($string) > 5) {
            echo $string . "&nbsp; &nbsp;";
        }
    }
}
