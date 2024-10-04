<?php
namespace Styde;

use Styde\Weapons\Bow;

// Clase Archer
class Archer extends Unit
{
    public function __construct($name ,Bow $bow) 
    {
        parent::__construct($name, $bow);
    }
}