<?php 
namespace Styde;

// Clase abstracta Unit
abstract class Unit {
    protected $hp = 40;
    protected $name;
    protected $weapon;
    protected $armor;

    //Constructores e informacion de personaje 
    public function __construct($name, Weapon $weapon )
    {
        $this->name = $name;
        $this->weapon = $weapon;
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
        show($this->weapon->getDescription($this, $opponent));

        $opponent->takeDamage($this->weapon->getDamage());
    }

    //Leer el daño antes de tomarlo
    protected function absorbDamage($damage)
    {
        return $damage; // Por defecto, no absorbe daño
    }
    
    //Tomar daño
    public function takeDamage($damage)
    {
        $this->hp = $this->hp - $this->absorbDamage($damage);

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }
    
    //Morir(quiero)
    public function die()
    {
        show("{$this->name} muere");
        exit();
    }
    
}

