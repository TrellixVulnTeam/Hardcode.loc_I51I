<?php

namespace classes;

use interfaces\int3D;

class ProductBook extends Product implements int3D {      //подключение интерфейса
    
    public $numPages;

    public function getNumPages() {
        return $this->numPages;
    }

    public function __construct ($name, $price, $numPages) {
        parent::__construct($name, $price);                 //вставка родительского метода __construct;
        $this->numPages = $numPages;
        $this->setDiscount(5);
    }

    public function getProduct() {
        $content = parent::getProduct();
        $content .= "Цена без скидки: {$this->price}<br>";
        $content .= "Кол-во страниц: {$this->numPages}<br>";
        $content .= "Скидка: {$this->getDiscount()}%<br>";
        return $content;
    }

    public function addProduct($name, $price, $test = 0) {     //создали тело документа из абстрактного метода родителя
        var_dump($name);                                       // модификатор доступа не может быть выше родительского
        var_dump($price); 
    }

    public function test () {

    }

}