<?php

namespace Styde;

use Styde\Attack;

abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;
    protected $description = ':unit attacks :opponent' ;

    public function getDamage()
    {
        return $this->damage;
    }

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }

    
}