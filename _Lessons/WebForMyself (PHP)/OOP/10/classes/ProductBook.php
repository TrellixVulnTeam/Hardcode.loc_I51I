<?php
class ProductBook extends Product implements int3D {      //подключение интерфейса
    
    public $numPages;

    const TEST = 1000;                                      // перезаписали константу от родителя
    //const TEST2 = 500;                                    // не можем перезаписать константу от интерфейса;

    public function getNumPages() {
        return $this->numPages;
    }

    public function __construct ($name, $price, $numPages) {
        parent::__construct($name, $price);                 //вставка родительского метода __construct;
        $this->numPages = $numPages;
        $this->setDiscount(5);
        var_dump(SELF::TEST);                               // вывод перезаписанной константы;
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
        var_dump($test);    
    }

    public function test () {
        echo "<br>";
        var_dump(SELF::TEST2);
    }
}