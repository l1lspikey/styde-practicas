<?php 
namespace Styde\Armors;
use Styde\Armor;
use Styde\Attack;

class BasicArmor implements Armor 
{
    public function absorbDamage(Attack $attack)
    {
        if ($attack->isPhysical())
        {
            return $attack->getDamage() / 2 ;   
        }
        return $attack->getDamage(); 
    }
}
