<?php
// use Styde\BasicArmor;
// use Styde\HeavyArmor;
// use Styde\Soldier;
// use Styde\Archer;
namespace Styde;

use Styde\Weapons\BasicBow;
use Styde\Weapons\BasicSword;
use Styde\Weapons\CrossBow;//Se genera automaticamente cuando se pide un objeto "oooh" :v 

require '../vendor/autoload.php';


// Ejemplo de uso
$basicArmor = new Armors\BasicArmor(); // Armadura básica // Styde\BasicArmor != Styde\Armors\BasicArmor
$heavyArmor = new Armors\HeavyArmor(); // Armadura pesada

$ramm = new Soldier('Ramm', new BasicSword); // Crear soldado
$spikey = new Archer('Spikey', new BasicBow); // Crear arquero

// Asignar armadura a Ramm
$spikey->setArmor($heavyArmor);


$spikey->attack($ramm); 
$ramm->attack($spikey); 

// Cambiar la armadura de Ramm a pesada
$ramm->setArmor($heavyArmor);
$spikey->attack($ramm); // Spikey ataca a Ramm nuevamente
?>