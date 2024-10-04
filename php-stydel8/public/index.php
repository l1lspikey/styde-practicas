<?php
namespace Styde;
use Styde\BasicArmor;
use Styde\HeavyArmor;
use Styde\Soldier;
use Styde\Archer;


use Styde\Weapons\BasicBow;
use Styde\Weapons\BasicSword;
use Styde\Weapons\CrossBow;//Se genera automaticamente cuando se pide un objeto "oooh" :v 

require '../vendor/autoload.php';


// Ejemplo de uso
$basicArmor = new Armors\BasicArmor(); 
$heavyArmor = new Armors\HeavyArmor(); 

$ramm = new Soldier('Ramm', new BasicSword); // Crear soldado
$spikey = new Archer('Spikey', new BasicBow); 

// Asignar armadura
$spikey->setArmor($heavyArmor);


$spikey->attack($ramm); 
$ramm->attack($spikey); 


$ramm->setArmor($heavyArmor);

$spikey->attack($ramm); 