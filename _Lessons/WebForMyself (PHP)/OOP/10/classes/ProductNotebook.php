<?php
class ProductNotebook extends Product {
  
    public $cpu;

    public function getCpu() {
        return $this->cpu;
    }

    public function __construct ($name, $price, $cpu) {
        parent::__construct($name, $price);                 //вставка родительского метода __construct;
        $this->cpu = $cpu;
    }

    public function getProduct() {
        $content = parent::getProduct();
        $content .= "Процессор: {$this->cpu}<br>";
        return $content;
    }
}