<?php

abstract class User {

	public $fullname;

	public $accessRights;

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

