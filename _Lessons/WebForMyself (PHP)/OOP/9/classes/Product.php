<?php
class Product {
    
    // public $public = "PUBLIC";
    // protected $protected = "PROTECTED";
    // private $private = "PRIVATE";

    public $name;
    protected $price;

    private $discount = 0;

    public function __construct ($name, $price) {
        $this->name = $name;
        $this->price = $price;
        // var_dump($this->public);
        // var_dump($this->protected);
        // var_dump($this->private);
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
}