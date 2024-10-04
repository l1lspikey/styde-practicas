<?php

abstract class Unit {
    protected $alive = true;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($direction)
    {
        echo "<p>{$this->name} camina hacia $direction</p>";
    }

    abstract public function attack($opponent);
}

class Soldier extends Unit
{
    public function attack($opponent)
    {
        echo "<p>{$this->name} corta a $opponent</p>";
    }
}

class Archer extends Unit
{
    public function attack($opponent)
    {
        echo "<p>{$this->name} dispara una flecha a $opponent</p>";
    }
}


$spikey = new Archer('Spikey');
//$spikey->move('el norte');
$spikey->attack('Ramm');