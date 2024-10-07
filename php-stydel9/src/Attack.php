<?php 
namespace Styde;

 class Attack 
{
    protected $damage;
    protected $magical;
    protected $description;

    public function __construct($damage, $magical, $description)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
    }
    
    //Descripcion del ataque 
    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return str_replace([':unit', ':opponent'], [$attacker->getName(), $opponent->getName()], $this->description );
    }      

    public function getDamage()
    {
        return $this->damage;
    }

    public function isMagical() :bool
    {
        return $this->magical;
    }

    public function isPhysical() : bool
    {
        return !$this->isMagical();
    }
}


?>