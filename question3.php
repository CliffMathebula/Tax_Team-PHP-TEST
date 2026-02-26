<?php

// QUESTION 3
$person_array = array('Leanna', 'derek', 'Lisa', 'John', 'lancelot', 'Michael', 'norman', 'Lawrence of Arabia');

/**
 * write a loop that will print out (on a new line) all names that
 * begin with L or l (both uppercase and lowercase) that are longer than 5 characters
 */

foreach ($person_array as $name) {
    // 1. Get the first character
    // Using $name[0] is shorthand for the first character of the string
    $firstChar = strtolower($name[0]);

    // 2. Check conditions:
    // - Does it start with 'l'?
    // - Is the length greater than 5?
    if ($firstChar === 'l' && strlen($name) > 5) {
        // 3. Print on a new line
        // Use <br> for browser display or PHP_EOL for terminal
        echo $name . "<br>\n";
    }
}
