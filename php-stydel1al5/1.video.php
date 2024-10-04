<?php 
class Person {

    var $firstname;

    var  $lastname;

    public function __construct($firstname, $lastname) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }

    function fullName(){

        return $this->firstname. ' '. $this->lastname;
    }

}
    $persona = new Person('Dulio','Palacios');
    $persona2 = new Person('Ramob', 'Lapenta');

   echo "{$persona->fullName()} es amigo de {$persona2->fullName()} "
?>