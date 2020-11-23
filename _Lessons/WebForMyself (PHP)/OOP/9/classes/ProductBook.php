<?php
class ProductBook extends Product {
    
    public $numPages;

    public function getNumPages() {
        return $this->numPages;
    }

    public function __construct ($name, $price, $numPages) {
        parent::__construct($name, $price);                 //вставка родительского метода __construct;
        $this->numPages = $numPages;
        $this->setDiscount(5);
        // var_dump($this->public);
        // var_dump($this->protected);
        // var_dump($this->private);                        // работает только в классе, где был создан;
    }

    public function getProduct() {
        $content = parent::getProduct();
        $content .= "Цена без скидки: {$this->price}<br>";
        $content .= "Кол-во страниц: {$this->numPages}<br>";
        $content .= "Скидка: {$this->getDiscount()}%<br>";
        return $content;
    }
}