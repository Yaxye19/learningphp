<?php


abstract class Animal {

    public function huggle() {
        echo 'I am huggled!';
    }

    abstract public function makeNoise();
}

// Interface PandaInterface {

//     //eat some food 
//     public function eat($food);

//     //poo
//     public function poo();

//     //sleep
//     public function sleep($time);
// }

// class RedPanda implements PandaInterface {

    
// }


/*--------------- POLYMORPHISM ------------------ */

interface PandaInterface
{
    /**
     * Eat some food!
     */
    public function eat();

    /**
     * Poop! (Normally after eating.)
     */
    public function poop();

    /**
     * Sleepy time!
     */
    public function sleep();
}


class RedPanda implements PandaInterface
{
    /**
     * Eat some food!
     */
    public function eat()
    {
        echo "The red panda eats some fruit.\n";
    }

    /**
     * Poop! (Normally after eating.)
     */
    public function poop()
    {
        echo "The red panda takes a poop.\n";
    }

    /**
     * Sleepy time!
     */
    public function sleep()
    {
        echo "The red panda sleeps up a tree.\n";
    }
}


class GiantPanda implements PandaInterface
{
    /**
     * Eat some food!
     */
    public function eat()
    {
        echo "The giant panda eats some bamboo.\n";
    }

    /**
     * Poop! (Normally after eating.)
     */
    public function poop()
    {
        echo "The giant panda takes a giant poop.\n";
    }

    /**
     * Sleepy time!
     */
    public function sleep()
    {
        echo "The giant panda sleeps on the ground.\n";
    }
}


class ZooKeeper {
    /**
     * Care for a panda
     * 
     * @param PandaInterface $panda
     * @return void
     */

     public function care(PandaInterface $panda) {

        // Perform panda stuff.

        $panda->eat();
        $panda->poop();
        $panda->sleep();
     }
}


// Create panda instances.
$redPanda = new RedPanda;
$giantPanda = new GiantPanda;

// zookeeper instances
$keeper = new ZooKeeper;

// Care for both pandas.
$keeper->care($redPanda);
$keeper->care($giantPanda);