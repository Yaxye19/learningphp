<?php

class RedPanda
{
     /**
     * The panda's name!
     *
     * @var string
     */
    public static $name;

    public static function beCute()
    {
        echo 'The Red Panda rolls around in the snow.';
    }

    public static function eat()
    {
        return self::eatLeaves();
    }

    private static function eatLeaves()
    {
        return 'The Panda munches on some tasty leaves.';
    }
}

RedPanda::$name = 'Hamish';

echo RedPanda::$name;

RedPanda::beCute();
RedPanda::eat();


class RedPanda2
{
    protected $name;

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    public static function make()
    {
        return new self('Hamish');
    }

    public function getName()
    {
        return $this->name;
    }
}



class Panda
{
    public static function whoAmI()
    {
        return self::getType();
    }

    public static function getType()
    {
        return 'I am a Giant panda!';
    }
}

class RedPanda3 extends Panda
{
    public static function getType()
    {
        return 'I am a Red panda!';
    }
}


echo Panda::whoAmI() . PHP_EOL;
echo RedPanda3::whoAmI();