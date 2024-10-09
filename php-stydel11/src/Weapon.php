<?php

namespace Styde;

use Styde\Attack;

abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;
    

    public function getDamage()
    {
        return $this->damage;
    }

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->getDescriptionkey());
    }

    protected function getDescriptionKey()
    {
        return str_replace('Styde\Weapons\\', '', get_class($this)).'Attack';
    }
}