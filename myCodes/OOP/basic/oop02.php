<?php

class Fruit
{
    //properties(variables are called properties in classes)
    public $name;
    public $color;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');

echo $apple->get_name();
