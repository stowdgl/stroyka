<?php

abstract class User {

    public $fullname;

    public $accessRights;

    abstract public function getFullname();

    abstract public function getAccessRights();

}
class TeamLead extends  User {
    public $accessRights;
    public  $name;
    public  $surname;
    public function __construct($name,$surname,$accessRights){
       $this ->name=$name;
       $this->surame=$surname;
       $this->accessRights=$accessRights;
    }
    }

    function getFullname(){
        return  $this->name.''.$this->surname;
    }
    function getAccessRights(){
        return  $this->accessRights;
    }
    function make_order(){
        return $this->orderBlank;
    }
    function workPlan(){
         return this->
//	Stockman

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