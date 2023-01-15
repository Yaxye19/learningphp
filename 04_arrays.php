<?php


/* ----------- Arrays ----------- */

/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/

// create an array
$pandas = ['Lushui', 'Jasmina', 'Pali'];

// also make an array like this
//$pandas = array('Lushui', 'Jasmina', 'Pali');

//var_dump($pandas);

// Get the first item of the array
$Lushui = $pandas[0];

//echo the result
//echo $Lushui;


// Create an array of integers.
$integers = [3, 6, 9, 12];

// Create an array of floats.
$floats = [1.30, 2.60, 3.90, 4.120];

// Set some variables.
$one    = 1;
$two    = 2;
$three  = 3;

// Create an array of variables.
$variables = [$one, $two, $three];

$one = 1;

// Create an array of mixed values.
$mixed = ['Lushui', $one, 5, 23.54];



/* ----- associative arrays ------ */

// create an associative array

$numbers = [
    'one'   => 1,
    'two'   => 2,
    'three' => 3,
    'four'  => 4,
    'five'  => 5,
    'six'   => 6
];

// Dump a value
//echo $numbers['one'];



/* multi-dimensional array */

// create a multi-dimensional array
$moreNumbers = [
    'prime'         => [2, 3, 5, 7, 11],
    'fibonacci'     => [1, 1, 2, 3, 5],
    'triangular'    => [1, 3, 6, 10, 15]
];

// First get the prime numbers array.
//$primes = $moreNumbers['prime'];

// Next get the third (second, zero-based) number
//echo $primes[2];

// Access our prime number directly.
echo $moreNumbers['prime'][2];