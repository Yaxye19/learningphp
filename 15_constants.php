<?php

// // Define our constant.
// define('PI', 3.14159265359);

// // Echo the value of PI.
// echo PI;


// class Circle
// {
//     /**
//      * The value of PI.
//      *
//      * @var float
//      */
//     private $pi = 3.14159265359;

//     /**
//      * Calculate the circumference of a circle from diameter.
//      *
//      * @param  mixed $diameter
//      * @return mixed
//      */
//     public function circumference($diameter)
//     {
//         return $diameter * $this->pi;
//     } 
// }

//     $circle = new Circle;
//     //echo $circle->circumference(32);


class Circle2 {

    /**
     * The value of 
     * PI
     */

     const PI = 3.14159265359;

     /**
      * Calculate the circumference of a circle from diameter.
      *
      *@param mixed $diameter
      *@return mixed
      */
    
      public function circumference($diameter) {

        return $diameter * self::PI;
      }
}
        echo Circle2::PI;
    