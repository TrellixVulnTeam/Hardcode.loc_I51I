<?php

namespace app;

use _Core\interfaces\int3D;
use _Core\Product;

class ProductBook extends Product implements int3D {      //подключение интерфейса
    
    public $numPages;
    public $action1;
    public $action2;

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

    public function __toString() {           //при обращении к объекту как к строке, сработает метод getProduct
        return $this->getProduct();
    }

    public function __set($name, $value) {  //срабатывает, когда есть обращение к свойству объекта и его значению, которого не существует
        echo "<hr><p>Проверка магического метода __set()</p>";
        var_dump($name, $value);
    }

    public function __get($name) {          //срабатывает, когда есть обращение к свойству объекта, которого не существует
        echo "<hr><p>Проверка магического метода __get()</p>";
        $name = ucfirst($name);             //Делаем заглавную букву;
        $name = "get{$name}";               // getName;
        if (method_exists ($this, $name)) { //Проверка на существование метода this->getName;
            return $this->$name();
        }
        
    }

    public function addProduct($name, $price, $test = 0) {     //создали тело документа из абстрактного метода родителя
        var_dump($name);                                       // модификатор доступа не может быть выше родительского
        var_dump($price); 
    }

    public function test () {

    }

    public function doAction1 () {
        echo $this->action1 = "<p>Совершили действие 1</p>";
        return $this;
    }

    public function doAction2 () {
        echo $this->action2 = "<p>Совершили действие 2</p>";
        return $this;
    }
}