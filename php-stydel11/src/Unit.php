<?php 
namespace Styde;

use Styde\Armors\MissingArmor;

// Clase abstracta Unit
class Unit 
{
    protected $hp = 40;
    protected $name;
    protected $weapon;
    protected $armor;

    //Constructores e informacion de personaje 
    public function __construct($name, Weapon $weapon )
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new MissingArmor();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }
    
    // Items 
    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }
    
    //Movimiento
    public function move($direction)
    {
        show("{$this->name} camina hacia $direction");
    }
    

    //Causar daño 
    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        show($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }
    

    //Tomar daño
    public function takeDamage(Attack $attack)
    {
        $damage = $this->armor->absorbDamage($attack); // Usa el método absorbDamage
        $this->hp -= $damage;

        show("{$this->name} has now {$this->hp} health points ");

        if ($this->hp <= 0) {
            $this->die();
        }
    }
    
    //Morir
    public function die()
    {
        show("{$this->name} dies");
        exit();
    }
    
}

