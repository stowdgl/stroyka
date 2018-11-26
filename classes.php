<?php

interface FullName
{
    CONST DIRECTOR = 'all';
    CONST SUPPLIER = 'only orders';
    CONST WORKER   = 'without access';
}

interface FullNameAccess extends FullName
{
//    public function getAccessRights();
}

abstract class User implements FullNameAccess
{
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
}

class Supplier extends User implements FullNameAccess
{
    protected $order, $age = 10;

    public function getFullName()
    {
        return $this->fullName . "\n";
    }

    public function getAccessRights()
    {
        // TODO $access нету
        foreach ($access as $key => $value) {
            echo $access[ "supplier" ];
        }
    }

    function do_order($order)
    {
        $this->order = $order; //with Vlasta?
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
}

$director = new Director('Like A Boss', ['director']);
$supplier = new Supplier('Nikita', 'supplier');

print $supplier->getAge();

$persons[] = $director;
$persons[] = $supplier;

foreach ($persons as $person) {
    echo $person->fullName;
}


/*
	Director

	Stockman

	Supplier

	TeamLead

	Worker (types)

	Driver

Order
/*
/*Orderline

Transaction

Transactionline

Object

Storage*/

/*Subject:*/

/*Type

Instrument

Material

Mechanizm
*/

