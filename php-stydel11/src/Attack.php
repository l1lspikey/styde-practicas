<?php 
namespace Styde;

 class Attack 
{
    protected $damage;
    protected $magical;
    protected $keydescription;

    public function __construct($damage, $magical, $keydescription)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->keydescription = $keydescription;
    }
    
    //Descripcion del ataque 
    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return Translator::get($this->keydescription, ['unit' => $attacker->getName(),
            'opponent' => $opponent->getName(),
        ]);
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