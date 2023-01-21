<?php

trait StrokeableTrait
{
    /**
     * Stroke the animal.
     *
     * @return void
     */
    public function stroke()
    {
        echo 'This animal purrs contently.';
    }
}

abstract class Animals{

}


class RedPanda extends Animals{
    /**
     * The panda's name.
     *
     * @var string
     */
    private $name = 'Jasmina';

    use StrokeableTrait;
}

// Create a new red panda.
$panda = new RedPanda;

// Stroke the panda.
$panda->stroke();