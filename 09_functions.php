<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/


function echoSong() {
    echo "So take the photographs, and still frames in your mind.\n";
    echo "Hang it on a shelf in good health and good time.\n";
    echo "Tattoos and memories and dead skin on trial.\n";
    echo "For what it's worth, it was worth all the while.\n";
}

//echoSong();

//create function
function getFourtyTwo() {
    
    //return value
    return 42;
}

// Execute the function and assign result
$result = getFourtyTwo();

//echo getFourtyTwo();

//var_dump($result);


/* ------------ Parameters ------------ */

// Welcome someone!


function welcome ($name) {
   // echo "Welcome to PHP Pandas, {$name} !\n";
}

welcome('reader');              // This is you!
welcome('Captain Yaxye Ali');  // This is an awesome guy!
welcome('Arno Dorian');         // No clue
welcome(64.54);                 // That's not a name!



// sum of some values

function addify($input1, $input2, $input3, $input4, $input5) {
    //echo $input1 + $input2 + $input3 + $input4 + $input5;
}

echo addify(1,2,3,4,5);



function welcome2() {

    // Get all function parameters.
    $names = func_get_args();

    // Iterate the names and welcome them
    foreach ($names as $name) {
        echo "Welcome, {$name}!\n";
    }
}

//echo welcome2('Dayle', 'James', 'Andrea', 'Ben', 'Mateusz');




/* ----------- Type Hinting ------------ */

// Say hello to an array of people.
function sayHello(array $names) {
    foreach ($names as $name) {
        echo "Hello, {$name}!\n";
    }
}

sayHello(['Katie', 'Corissa', 'Lucy']);
