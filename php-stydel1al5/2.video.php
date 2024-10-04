<?php

class Person {
    protected $firstName; // public, protected <-> private
    protected $lastName;
    protected $nickname;
    protected $changedNickname = 0;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
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
            throw new Exception(
                "You can't change a nickname more than 2 times"
            );
        }

        $this->nickname = $nickname;

        $this->changedNickname++;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$persona = new Person('Duilio', 'Palacios');

$persona->setNickname('Spikey');
$persona->setNickname('Spikey');

exit($persona->getNickname());




echo $person1->getFullName();