<?php

abstract class Animal {

    /**
     * Is the animal awsome (all are)
     * 
     * @var boolean
     */
    private $awsome = true;

    /**
     * Acess the awesome attribute
     * 
     * @return boolean
     */
    public function isAwesome() {
        return $this->awsome;
    }

    abstract public function makeNoise();
}


    class Dog extends Animal {

        public function makeNoise()
        {
            echo 'woof';
        }
    }

    $dog = new Dog;

    echo $dog->makeNoise();