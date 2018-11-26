<?php

class User {

    public $fullname, $acceccRights;

	abstract public function getFullname();
	
	abstract public function getAccessRights();

}

Class Director extends User {

    function __construct($name,$accessRights)
    {
        $this->fullname = $name;
        $this->accessRights = $accessRights;
    }

    function getFullname(){
        return $this->fullname;
    }

    function getAccessRights(){
        return $this->accessRights;
    }

    function setFullname($name){
        $this->fullname = $name;
    }

    function setAccessRights(array $rights){
        $this->accessRights = $rights;
    }
}

/*
	Director

	Stockman

	Supplier

	TeamLead

	Worker (types)

	Driver

Order

Orderline

Transaction

Transactionline





Object

Storage

Subject:

Type

Instrument

Material

Mechanizm

