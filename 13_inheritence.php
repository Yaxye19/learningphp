<?php

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class Panda
{
    // Properties
    var $coat = 'fluffy';
    var $colour;

    // Method
    function getCoat()
    {
        return $this->coat;
    }

    // Method
    function getColour()
    {
        return $this->colour;
    }
}

class GiantPanda extends Panda
{
    var $coat = 'less fluffy';
}

// Create a new giant panda instance.
$giantPanda = new GiantPanda;

// Get coat type.
//echo $giantPanda->getCoat();


// you can keep going down in the inheritence chain
class First
{
    var $legendary = 'Barney Stinson';
}

class Second extends First
{

}

class Third extends Second
{

}

class Fourth extends Third
{

}

class Sephiroth {
  function equipWeapon (Weapon $weapon) {
    echo 'Die cloud die';
  }
}

class Weapon {

}


class Masamune extends Weapon {

}

class Murasame extends Weapon {

}


// Instantiate a Sephiroth class.
$sephiroth = new Sephiroth;


// Instantiate a Weapon class.
$weapon = new Weapon;

// Instantiate a Masamune class.
$masamune = new Masamune;

// Instantiate a Murasame class.
$murasame = new Murasame;


// Call the equipWeapon() method.
//$sephiroth->equipWeapon($weapon);

// Call the equipWeapon() method with masamune.
$sephiroth->equipWeapon($masamune);

// Call the equipWeapon() method with murasame.
$sephiroth->equipWeapon($murasame);