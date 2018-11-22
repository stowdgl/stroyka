<?php

abstract class Object
{
    public $name;
    public $owner;
    abstract function getAddress();
    abstract function getPeoples();
}