<?php

abstract class User {

	public $fullname;

	public $accessRights;

	abstract public function getFullname();
	
	abstract public function getAccessRights();

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

*/