<?php 
namespace Styde\Armors;
use Styde\Armor;
use Styde\Attack;

class BasicArmor extends Armor 
{
    public function absorbDamage(Attack $attack)
    {
       
        return $attack->getDamage() / 2; 
    }
}
