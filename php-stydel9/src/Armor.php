<?php 
namespace Styde;

// Interfaz Armor
interface Armor
{
    public function absorbDamage(Attack $attack);
}