<?php
// use Styde\BasicArmor;
// use Styde\HeavyArmor;
// use Styde\Soldier;
// use Styde\Archer;
namespace Styde;

require '../vendor/autoload.php';


// Ejemplo de uso
$basicArmor = new Armors\BasicArmor(); // Armadura básica // Styde\BasicArmor != Styde\Armors\BasicArmor
$heavyArmor = new Armors\HeavyArmor(); // Armadura pesada

$ramm = new Soldier('Ramm'); // Crear soldado
$spikey = new Archer('Spikey'); // Crear arquero

// Asignar armadura a Ramm
$ramm->setArmor($basicArmor);

$spikey->attack($ramm); 
$spikey->attack($ramm); 
$ramm->attack($spikey); 

// Cambiar la armadura de Ramm a pesada
$ramm->setArmor($heavyArmor);
$spikey->attack($ramm); // Spikey ataca a Ramm nuevamente
?>