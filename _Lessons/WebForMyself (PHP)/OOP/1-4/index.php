<?php
    error_reporting(-1);

    function print_arr($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    // 1 урок. Создание классов и объектов;
    // require_once 'classes/FirstClass.php';
    // $obj1 = new FirstClass();
    // var_dump($obj1);
    // echo "<br>";
    // $obj2 = new FirstClass();
    // var_dump($obj2);

    // 2 урок. Свойства класса;
    // require_once "classes/Car.php";
    // $car1 = new Car();
    // print_arr($car1);
    
    // $car1->color = "black";
    // $car1->brand = "volvo";
    // $car1->speed = 200;     //перезаписали свойство;
    // $car1->year = 2018;     //Добавили новое свойство;
    // print_arr($car1);

    // $car2 = new Car();
    // $car2->color = "white";
    // $car2->brand = "bmw";
    // $car2->speed = 220;
    // $car2->year = 2017;
    // print_arr($car2);
    // var_dump($car2);

    // echo "<h3>О моём авто</h3>
    // Марка: {$car1->brand}<br>
    // Цвет: {$car1->color}<br>
    // Кол-во колес: {$car1->wheels}<br>
    // Год выпуска: {$car1->year}<br>
    // Макс. скорость: {$car1->speed}<br>";

    // 3-4 урок. Методы объекта, __construct  и __destruct;
    require_once "classes/Car.php";

    $car1 = new Car("black", 4, 200, "volvo");    

    $car2 = new Car("white", 4, 220, "bmw");

    echo $car1->getCarInfo();
    echo $car2->getCarInfo();

