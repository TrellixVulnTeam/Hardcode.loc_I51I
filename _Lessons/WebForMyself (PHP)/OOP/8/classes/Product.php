<?php
class Product {
    
    public $name;
    public $price;

    public function __construct ($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getProduct() {
        return "<hr><h3>О товаре: </h3>
        Наименование: {$this->name}<br>
        Цена: {$this->price}<br>";
    }
}