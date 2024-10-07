<?php 
namespace Styde;

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
    
    //Leer el daño antes de tomarlo
    protected function absorbDamage(Attack $attack)
    {
        if ($this->armor) {
            return $this->armor->absorbDamage($attack);
        }

        return $attack->getDamage();
    }
    
    //Tomar daño
    public function takeDamage(Attack $attack)
    {
        $damage = $this->absorbDamage($attack); // Usa el método absorbDamage
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

