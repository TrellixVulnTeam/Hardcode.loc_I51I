<?php

namespace app;

use _Core\interfaces\iGadget;
use _Core\Product;
use _Core\traits\tColor;                            //использование пространства имен трейта

class ProductNotebook extends Product implements iGadget {

    use tColor;                                     //подключение трейта
  
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

    public function addProduct($name, $price, $test = 0) {     //создали тело документа из абстрактного метода родителя
        var_dump($name);                                       // модификатор доступа не может быть выше родительского
        var_dump($price); 
    }

    public function test () {

    }
}