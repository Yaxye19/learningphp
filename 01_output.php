<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/

/* ------- Outputting Content ------- */

// Echo - Output strings, numbers, html, etc
    //echo 'Hello';
    //echo 123;
    //echo 10.5;
    //echo '<h1>Hello<h1>';

// Print - similar to echo but a bit slower
    //print 'Hello';
    
    
// Print_r - Gives a bit more info. Can be used to print arrays
    //print_r([1,2,3]);




// var_dmup - Even more info like data type and length
  //var_dump('hello');



// Escaping characters with a backlash

/* ------------ Comments ------------ */

// This is a single line comment

/*
      * This is a multi-line comment
      *
      * It can be used to comment out a block of code
      */

// If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo 'Post One'; ?></h1>
</body>
</html>