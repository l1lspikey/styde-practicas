<?php 
namespace Styde\Armors; 
use Styde\Armor;
use Styde\Attack;

class HeavyArmor implements Armor
{
    public function absorbDamage(Attack $attack)
    {
        if ($attack->isPhysical())
        {
            return $attack->getDamage() / 4; // Reducción a un cuarto
        }
        return $attack->getDamage();
    }
}

