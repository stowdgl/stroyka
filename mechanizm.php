<?php

Class Mechanizm extends Subject() {
	public $stock_availability; //наличие на складе
	public $repair; //исправность
	public $mechanizm_name; //названия механизмов

	function get_MechanizmName(){
		return $this->mechanizm_name; //получить названия механизмов
	}
	function get_repair(){
		return $this->repair; // узнать информацию об исправности
	}
	function get_stock_availability(){
		return $this->stock_availability; // получить информацию о наличии на складе всех механизмов
	}
}

?>
