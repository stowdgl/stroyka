<?php

class User {

    public $fullname, $acceccRights;

	abstract public function getFullname();
	
	abstract public function getAccessRights();


}
class Supplier extends User{

    function getFullname(){
        return $this->fullname."\n";
    }
    protected function getAccess()
    {
        $access = ["director" => "all", "supplier" => "only orders", "worker" => "without access"];
        foreach ($access as $key => $value) {
            echo $access["supplier"];
        }
    }
    function do_order($order){
        $this->order=$order;//with Vlasta?

    }
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

