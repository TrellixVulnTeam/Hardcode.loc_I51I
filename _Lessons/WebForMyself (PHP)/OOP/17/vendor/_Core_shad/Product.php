<?php

namespace _Core;

abstract class Product {    //создание абстрактного класса (обязательно необходимо создать при наличии внутри абстракта)
 
    private $name;
    protected $price;

    private $discount = 0;

    public function __construct ($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    public function getProduct() {
        return "<hr><h3>О товаре: </h3>
        Наименование: {$this->name}<br>
        Цена со скидкой: {$this->getPrice()}<br>";
    }

    public function getDiscount (): int {
        return $this->discount;
    }

    public function setDiscount (int $discount) {
        return $this->discount = $discount;
    }

    abstract protected function addProduct($name, $price);  // не можем создать тело абстрактного метода, необходимо его создать в наследниках   
}