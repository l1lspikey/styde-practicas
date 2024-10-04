<?php
// use Styde\BasicArmor;
// use Styde\HeavyArmor;
// use Styde\Soldier;
// use Styde\Archer;
namespace Styde;


require 'src/helpers.php'; 


spl_autoload_register(function($className){
    if (strpos($className, 'Styde\\') === 0){
        echo "$className <br>";
        $className = str_replace('Styde\\', '',$className);
    }

    if(file_exists("src/$className.php")){
          require "src/$className.php";  
    }

});



// Ejemplo de uso
$basicArmor = new BasicArmor(); // Armadura básica
$heavyArmor = new HeavyArmor(); // Armadura pesada

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