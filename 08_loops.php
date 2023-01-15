<?php

/*----- While Loops ------- */

/**
 * The while loop will continue to run a snippet of code while the provided condition is true. 
 * Let's construct an example using a counter.
 */

 // set the panda counter to 0;

 $pandaCounter = 0;

 //Iterate while $pandaCounter is less than 50

 while ($pandaCounter <= 50) {

    // Output the number of panda butlers.
    //echo "We have {$pandaCounter} panda butlers!\n";

    // Increment the counter
    $pandaCounter++;
 }

 
 // create an empty database connection
 $database = null;

 //Iterate while the database isnt't set
//  while ($database == null) {

//     //Attempt to connect to the database
//     //$database = createDatabaseConnection();
//  }


 /*-------- Do While -----------*/

 // Set the panda counter to zero
 $pandaCounter2 = 0;

 // Iterate...
 do {

    // Output the number of panda butlers
    //echo "We have {$pandaCounter2} panda butlers!\n";

    // Increment the counter

    $pandaCounter2++;

    //... while $pandaCounter2 is less than 50
 } while ($pandaCounter2 <= 50);


 
 
 /*------- For Loops ---------*/

 //Iterate for 50 repititions 
 for ($i = 0; $i <= 50; $i++) {
    
    // Output the number of panda butlers.
    //echo "We have {$i} panda butlers!\n";
 }


 /*----------- Foreach ---------- */

 /**
  * Foreach loops are useful when used in combination with iterable types such as arrays. 
  *  The number of iterations of this loop is determined by the number of items within our array. 
  * Let's take a look at an example.
  */

  $pandas = ['Lushui', 'Pali', 'Jasmina'];

  // Iterate our panda array
  foreach ($pandas as $pandass) {
    echo "Hello there {$pandass}!\n";
  }

  
  //create an array of pandas

  $pandas2 = [
        'first'     => 'Lushui',
        'second'    =>  'Pali',
        'third'     =>  'Jasmina'
  ];

  // Iterate our panda array.
foreach ($pandas as $position => $panda) {
    //echo "You're the {$position} panda, {$panda}!\n";
}




// Create an array of pandas.
$pandas3 = [
    'first'     => 'Lushui',
    'second'    => 'Pali',
    'third'     => 'Jasmina'
];

// Iterate our panda array.
foreach ($pandas3 as $position => $panda) {

    // If the position variable equals 'second'.
    if ($position == 'second') {

        // Break the iteration.
        continue;
    }

    // Output.
    echo "You are the {$position} panda, {$panda}!\n";
}