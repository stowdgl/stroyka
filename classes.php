<?php

abstract class User
{

    public $fullName;

    public $accessRights;

    abstract public function getFullName();

    abstract public function getAccessRights();
}


class TeamLead extends User
{
    public $accessRights;
    public $name;
    public $surName;

    public function __construct($name, $surname, $accessRights)
    {
        $this->name         = $name;
        $this->surName      = $surname;
        $this->accessRights = $accessRights;
    }

    public function getFullName()
    {
        return $this->name . '' . $this->surName;
    }

    public function getAccessRights()
    {
        return $this->accessRights;
    }
}


interface FullNameAccess
{
//    public function getAccessRights();
}

class Supplier extends User
{
    protected $age = 10;
    function __construct($name, $accessRights = User::WORKER)
    {
        $this->fullName     = $name;
        $this->accessRights = $accessRights;
    }

    public $fullName, $accessRights;

    public function __toString()
    {
        return $this->fullName . PHP_EOL;
    }

    public function __call($name, $arguments)
    {
        $vars    = get_object_vars($this);
        $varName = lcfirst(substr($name, 3));
        if ((substr($name, 0, 3) === 'get') && (array_key_exists($varName, $vars))) {
            return $this->$varName . PHP_EOL;
        }
    }

    public function getFullName()
    {
        // TODO Дописать метод getFullName, потому что он абстрактный
    }

    public function getAccessRights()
    {
        // TODO Дописать метод getFullName, потому что он абстрактный
    }
}

Class Director extends User
{
    /*
     * __CALL
     */
    public function __call($name, $arguments)
    {
        // Замечание: значение $name регистрозависимо.
        echo "Вызов метода '$name' " . implode(', ', $arguments) . "\n";
        $this->fullName = $arguments[ 0 ];
    }
    /*
     * GET
     */
    public function getFullName()
    {
        // TODO Дописать метод getFullName, потому что он абстрактный
    }

    public function getAccessRights()
    {
        // TODO Дописать метод getFullName, потому что он абстрактный
    }
}

$supplier = new Supplier('Nikita', 'supplier');

print $supplier->getAge();

$persons[] = $supplier;

/*
foreach ($persons as $person) {
    echo $person->fullName;
}
*/


/*
	Director Sergey

	Stockman Nikolay

	Supplier Karina

	TeamLead Vlasta

	Worker (types) Pasha

	Driver Nikolay

Order Alexandr

Orderline Vlad

Transaction Sasha

Transactionline Haritonoff





Object Max

Storage Max

Subject: Maxim

Type Dmitry

Instrument Denis

Material Gleb

*/

