<?php

Class Subject(){
	public $subject_name; //наименования предметов

	function get_subject_name(){
		return $this->subject_name; // получить общие названия предметов(инструменты, механизмы, материалы)
	}
}


class Material extends Subject{
    public $valueC = array('Metres','Tonns', 'Apiece','Boxes', 'Bags','Kilos','Litres'), $valueR=0;
    function __construct($valueC)
    {
        $this->valueR = $this->valueC[$valueC];
    }
    function info(){
        echo $this->valueR;
    }
}

class Instrument extends Subject{
    public $quantity;

    function __construct($quantity){
        $this->quantity = $quantity;
    }

    function getQuantity(){
        return $this->quantity;
    }

    function setQuantity($quantity){
        return $this->quantity = $quantity;
    }
}
