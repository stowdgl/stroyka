<?php

class Order {

    protected $orderID;
    protected $receiverID;
    protected $giverID;
    protected $orderDate;
    protected $objectID;
    protected $commit;
    protected $requestedUnit;
    protected $measure;
    protected $quantity;

    public function __construct($orderID,
                                $receiverID,
                                $giverID,
                                $orderDate,
                                $objectID,
                                $commit,
                                $requestedUnit,
                                $measure,
                                $quantity)
    {
        $this->orderID = $orderID;
        $this->receiverID = $receiverID;
        $this->giverID = $giverID;
        $this->orderDate = $orderDate;
        $this->objectID = $objectID;
        $this->commit = $commit;
        $this->requestedUnit = $requestedUnit;
        $this->measure = $measure;
        $this->quantity = $quantity;
    }


    public function getFullOrderList(){
        echo "Заказ № $this->orderID\n";
        echo "Дата заказа $this->orderDate\n";
        echo "Заказчик № $this->receiverID\n";
        echo "Обьект № $this->objectID\n";
        echo "$this->requestedUnit $this->quantity $this->measure\n";
        echo "Комментарий: $this->commit\n";
    }
}

$Filarmoniya = new Order(42, 15, 10, "2018-10-12", 4, 'absolutely needed',  'цемент', 'kg', 35);
$Filarmoniya->getFullOrderList();