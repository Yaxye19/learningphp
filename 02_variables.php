<?php


/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/


// the variable three is set to the value of 3

//$three = 3;

// output the value of the varibale

//echo $three;

//set the variable pi to 3.14...
$pi = 3.14159265359;

// performing the circumference calculation
//echo $pi * 3;

$panda = 1; // Legal
$Panda = 1; // Legal
$_panda = 1; // Legal
$pan_da = 1; // Legal
$pan_da4 = 1; // Legal


// Good practice to use camelCasing with variable
$jojoBizzareAdventure = 1;
$attackOnTitan = 1;
$stoneFree = 1;

//echo $stoneFree = 4;



// Integers
$panda = -2;
$panda = 22;


// Floats
$panda = 2.3;
$panda = 0.2;

// Boolean
$panda = true;
$bluePanda = false;


//String
$panda = 'regular panda';
$bigPanda = 'big panda';


// Null 
$noPanda = null;


// Arrays
$countThePandas = [1,2,3,4];
$morepandas = array(5,6,7,8);


/* ------ Advanced Assignment ------ */

// set a value
$pandas = 3;

// add 1 to the value

$pandas+= 1;

//out the variable with dump
//var_dump($pandas);


//opposite of above

$pandas = 3;

//$pandas--;
--$pandas;

var_dump($pandas);


// $value-- - Change value *after* current line.
// --$value - Change the value on the current line.
