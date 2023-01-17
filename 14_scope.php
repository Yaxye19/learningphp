<?php

// class Panda {

//     public $coat = 'fluffy';

//     public function getCoat() {
//         return $this->coat;
//     }
// }

class Panda {

    // Declare a private property...
    private $coat = 'fluffy';

    //... and a public function
    private function getCoat() {
       return $this->coat;
    }

    public function notReallyGetCoat() {
        return $this->getCoat();
    }

}

    //make new instance of panda
    $panda = new Panda;

    //Try to echo the coat property.
    echo $panda->notReallygetCoat();