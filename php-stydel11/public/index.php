<?php
namespace Styde;



use Styde\Weapons\BasicBow;
use Styde\Weapons\BasicSword;
use Styde\Weapons\CrossBow;
use Styde\Weapons\FireBow;

require '../vendor/autoload.php';


Translator::set([
    'BasicBowAttack' => ':unit thrown an arrow at :opponent with basic bow',
    'BasicSwordAttack' => ':unit attack :opponent with Basicsword',
    'CrossBowAttack' => ':unit thrown an arrow at :opponent with basic bow ',
    'FireBowAttack' => ':unit thrown an fire arrow at :opponent with Firebow',
]);

// Ejemplo de uso
$basicArmor = new Armors\BasicArmor(); 
$heavyArmor = new Armors\HeavyArmor(); 

$ramm = new Unit('Ramm', new BasicSword); // Crear soldado
$spikey = new Unit('Spikey', new FireBow); 

// Asignar armadura
$spikey->setArmor($heavyArmor);
$ramm->setArmor($basicArmor);

$spikey->attack($ramm); 
$ramm->attack($spikey); 




$spikey->attack($ramm); 
$spikey->attack($ramm); 