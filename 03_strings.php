<?php

// String with single quotes.
$panda = 'Pandas rule!';

// String with double quotes.
$panda = "Pandas rule!";

// Output.
//echo $panda;

// Set a string
$value = 'pandas';

// Single quotes
$first = 'We love $value!';

// Double quotes
$second = "We love $value!";

//Output
// var_dump($first);
// var_dump($second);

//to use braces with interpolated values
$third = "We love {$value} too";

//var_dump($third);


/* ---- Concatenation ----- */

// First value

$value1 = "Pandas are";

$value2 = " cool!";

//var_dump($value1 . $value2);



// First value.
$first = '3';

// Second value.
$second = '5';

// Concatenate.
//var_dump($first + $second);