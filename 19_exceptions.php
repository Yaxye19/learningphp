<?php

/**
 * Feed the panda some food.
 *
 * @param  string $food
 * @return void
 */
function feedPanda($food){
 // Switch on food.
 switch ($food) {

    // Handle chocolate.
    case 'chocolate':
        throw new PandaChocolateException;

    // Handle chillies.
    // case 'chilli':
    //     throw new PandaChilliException;

    // Handle other food.
    default:
        echo "The panda eats the {$food}.";
};


    // Set the type of food.
$food = 'chocolate';

try {
    feedPanda($food);
} catch (PandaChocolateException $exception) {
    echo 'That was a close one! No chocolate for the panda.';

}

}

feedPanda('chocolate');


class PandaChocolateException extends Exception{
    protected $message = 'NO CHOCOLATE FOR THE PANDA!';
}

// class PandaChilliException extends Exception{
//     protected $message = 'NO CHILLI FOR THE PANDA. OUCH!';
// }