<?php
/*Realiza una definición de algún objeto de tu preferencia, por ejemplo: Un carro. 
Tengo un Toyota de color rojo, con cuatro puertas el cual puede acelerar y tocar la bocina.

A partir del ejercicio anterior, procede a crear una Clase con las propiedades y los métodos 
que consideres que estén dentro de tu definición.*/

class Carro {
    // Propiedades
    private $color;
    private $numeroDePuertas;
    private $velocidadActual;

    // Constructor
    public function __construct($color, $numeroDePuertas) {
        $this->color = $color;
        $this->numeroDePuertas = $numeroDePuertas;
        $this->velocidadActual = 0; // velocidad inicial
    }

    // Métodos
    public function acelerar($incremento) {
        $this->velocidadActual += $incremento;// Velocidad = velocidad + incremento
        echo "Acelerando: La velocidad actual es " . $this->velocidadActual . " km/h.<br>";
    }

    public function frenar($decremento) {
        $this->velocidadActual -= $decremento;
        if ($this->velocidadActual < 0) {
            $this->velocidadActual = 0; // no puede ser menor que 0
        }
        echo "Frenando: La velocidad actual es " . $this->velocidadActual . " km/h.<br>";
    }

    public function tocarBocina() {
        echo "¡Beep! ¡Beep!.<br>";
    }

    public function obtenerDetalles() {
        return "Carro de color " . $this->color . " con " . $this->numeroDePuertas . " puertas.";
    }
}

// Ejemplo de uso
$miCarro = new Carro("rojo", 4);
echo $miCarro->obtenerDetalles() . "<br>";
$miCarro->acelerar(20);
$miCarro->tocarBocina();
$miCarro->frenar(10);
?>