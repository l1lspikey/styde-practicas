<?php

function show($message)
{
    echo "<p>$message</p>";
}

abstract class Unit {
    protected $hp = 40;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        show("{$this->name} camina hacia $direction");
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage)
    {
        $this->setHp($this->hp - $damage);

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function die()
    {
        show("{$this->name} muere");
    }

    private function setHp($points)
    {
        $this->hp = $points;

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }
}

class Soldier extends Unit
{
    protected $damage = 40;
    protected $armor; // propiedad para la armadura

    public function __construct($name, $armor = 1) // Valor por defecto de armadura es 1
    {
        parent::__construct($name);
        $this->armor = $armor;
    }

    public function attack(Unit $opponent)
    {
        show("{$this->name} corta a {$opponent->getName()} en dos");
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        // Aplicar reducción de daño según la armadura
        $reducedDamage = $damage / $this->armor;
        return parent::takeDamage($reducedDamage);
    }
}

class Archer extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->name} dispara una flecha a {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        if (rand(0, 1)) {
            return parent::takeDamage($damage);
        }
    }
}

// Ejemplo de uso
$ramm = new Soldier('Ramm', 3); // Ramm tiene armadura 3 (recibe un tercio del daño)
$silence = new Archer('Silence');

$silence->attack($ramm); // Ataque del arquero
$silence->attack($ramm); // Segundo ataque del arquero
$ramm->attack($silence); // Ataque del soldado
?>