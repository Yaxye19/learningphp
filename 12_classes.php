<?php

class Book {
    // Declare properties
    var $title;
    var $author;
    var $publisher;
    var $yearOfPublication;
    var $format = 'Paperback';

    // Declare a method
    function sayHello() {
        echo 'Hello!';
    }
}

//new instance of the class book assigned to the $book variable
$book = new Book;


//set the properties
$book ->title               = 'The Art of War';
$book ->author              = 'Sun tzu';
$book ->publisher           = 'China';
$book ->yearOfPublication   = '221 BCE';

// echo $book->title              . PHP_EOL;
// echo $book->author             . PHP_EOL;
// echo $book->publisher          . PHP_EOL;
// echo $book->yearOfPublication  . PHP_EOL;

//create another instance of book
$second = new Book;

//set the properties
$second ->title               = 'Jojos Bizzare Adventure';
$second ->author              = 'Araki';
$second ->publisher           = 'Shueisha';
$second ->yearOfPublication   = '1997';

// echo $second->title              . PHP_EOL;
// echo $second->author             . PHP_EOL;
// echo $second->publisher          . PHP_EOL;
// echo $second->yearOfPublication  . PHP_EOL;


//create another instance of book
$third = new Book;

//change value of format

$third->format = 'Hardback';

// Execute the hello method
//echo $book->sayHello();


//new class

class Book2 {

    // Declare properties

    var $title;
    var $author;
    var $publisher;

    // Declare a method
    function summary() {
        echo 'Title: '      . $this->title        . PHP_EOL;
        echo 'Author: '     . $this->author       . PHP_EOL;
        echo 'Publisher: '  . $this->publisher    . PHP_EOL;
    }
}

//create a new instance

$book = new Book2;

// Set class properties.
$book->title        = 'Reaper Man';
$book->author       = 'Terry Pratchett';
$book->publisher    = 'Victor Gollancz';

//execute the function
//echo $book->summary();



//new class

/** NESTED METHOD EXAMPLES   */

class Example{

    //first function
    function first() {
        return $this->second();
    }

    //second function
    function second() {
        return $this->third();
    }

    //third function
    function third(){
        return "well this was pointless";
    }
}


// new panda class

class Panda {

    // LOUD NAME PROPERTY
    var $loudName;

    // Constructor method
    function __construct($name)
    {
        $this->loudName = $this->makeNameLoud($name);
    }

    // NAME LOUDENING METHOD
    function makeNameLoud($name) {
        return strtoupper($name);
    }

    
}
    // create a new class instance
    $panda = new Panda('Lushui');

    $secondPanda = new Panda('pali');

echo $panda->loudName          . PHP_EOL;
echo $secondPanda->loudName;    