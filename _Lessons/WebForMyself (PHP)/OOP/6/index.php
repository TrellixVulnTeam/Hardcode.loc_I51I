<?php
    error_reporting(-1);

    function print_arr($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }


    // 6 урок. Константы, static класса;
    require_once "classes/Car.php";
    echo Car::$countCar . " - это свойство класса";        // обращение к статическому свойству класса;
    
    $car1 = new Car("black", 4, 200, "volvo");
    echo Car::$countCar . " - это свойство класса";

    $car2 = new Car("white", 4, 220, "bmw");
    echo Car::getCount() . " - это метод класса";        // обращение к статическому методу класса;

    echo $car1->getCarInfo();
    echo $car2->getCarInfo();

    echo $car1->getPrototypeInfo();                      // использование констант

