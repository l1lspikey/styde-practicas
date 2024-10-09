<?php
namespace Styde;

use Styde\Armors\HeavyArmor;
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


$spikey = Unit::createSoldier('spikey')
        ->setWeapon(new Weapons\BasicSword)
        ->setArmor(new Armors\HeavyArmor)
        ->setShield();

$ramm = new Unit('ramm', new FireBow); 

// Asignar armadura
$ramm->setArmor($heavyArmor);


$spikey->attack($ramm); 
$ramm->attack($spikey); 




$spikey->attack($ramm); 
$spikey->attack($ramm); 