<?php 
namespace Styde\Armors; 
use Styde\Armor;
class HeavyArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 4; // Reducción a un cuarto
    }
}

