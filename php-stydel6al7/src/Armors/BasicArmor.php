<?php 
namespace Styde\Armors;

use Styde\Armor;

class BasicArmor implements Armor //Styde\Armors\Armor != Styde\Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 3; // Reducción a un tercio
    }
}
