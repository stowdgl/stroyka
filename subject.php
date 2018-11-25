<?php

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

class Instrument extends Subject {

}
