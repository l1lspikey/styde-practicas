<?php 
namespace Styde\Armors;
use Styde\Armor;

class BasicArmor implements Armor 
{
    public function absorbDamage($damage)
    {
        return $damage / 3; // Reducción a un tercio
    }
}
