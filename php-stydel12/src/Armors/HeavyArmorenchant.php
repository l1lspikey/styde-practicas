<?php 
namespace Styde\Armors; 
use Styde\Armor;
use Styde\Attack;

class HeavyArmorenchant extends Armor
{
     public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }

    public function absorbMagicDamage(Attack $attack)
    {
        return $attack->getDamage() / 3;
    }

    
}

