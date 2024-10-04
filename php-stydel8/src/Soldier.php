<?php
namespace Styde;

use Styde\Weapons\BasicSword;

// Clase Soldier
class Soldier extends Unit
{
    public function __construct($name ,BasicSword $sword) 
    {
        parent::__construct($name, $sword);
    }
}

