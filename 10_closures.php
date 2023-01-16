 <?php

$cat = function () {
    echo 'Hello Yaxye';
};

//$cat();

// create a math function

function math(Closure $type, $first, $second) {

    // Execute the closure with parameters
    return $type($first, $second);
}

// Create an addition closure

$addition = function($first, $second) {
    
    // add the values
    return $first + $second;
};

$subtraction = function($first, $second) {
     
    // minus the values
    return $first - $second;
};

//Execute the math function
echo math($addition, 4, 2);
echo PHP_EOL; // new line
echo math($subtraction, 4, 2);