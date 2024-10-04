<?php

class Person {
    protected $firstName;
    protected $lastName;
    protected $nickname;
    protected $changedNickname = 0;
    protected $birthDate;

    public function __construct($firstName, $lastName, $birthDate)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = new DateTime($birthDate);
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setNickname($nickname)
    {
        if ($this->changedNickname >= 2) {
            throw new Exception("You can't change a nickname more than 2 times");
        }

        if (strlen($nickname) < 2) {
            throw new Exception("Nickname must be at least 2 characters long");
        }

        if ($nickname === $this->firstName || $nickname === $this->lastName) {
            throw new Exception("Nickname cannot be the same as first name or last name");
        }

        $this->nickname = $nickname;
        $this->changedNickname++;//contador nickname
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAge()
    {
        $now = new DateTime();
        $age = $now->diff($this->birthDate);
        return $age->y;
    }
}

// Ejemplo de uso
$persona = new Person('Duilio', 'Palacios', '1990-05-15');

$persona->setNickname('Spikey');
$persona->setNickname('Spikey');
// $persona->setNickname('Spikey'); funciona xd
echo "Nickname: " . $persona->getNickname() . "\n";
echo "Full Name: " . $persona->getFullName() . "\n";
echo "Age: " . $persona->getAge() . " years\n";
?>