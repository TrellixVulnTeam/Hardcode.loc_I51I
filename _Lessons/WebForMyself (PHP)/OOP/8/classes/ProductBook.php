<?php
class ProductBook extends Product {
    
    public $numPages;

    public function getNumPages() {
        return $this->numPages;
    }

    public function __construct ($name, $price, $numPages) {
        parent::__construct($name, $price);                 //вставка родительского метода __construct;
        $this->numPages = $numPages;
    }

    public function getProduct() {
        $content = parent::getProduct();
        $content .= "Кол-во страниц: {$this->numPages}<br>";
        return $content;
    }
}