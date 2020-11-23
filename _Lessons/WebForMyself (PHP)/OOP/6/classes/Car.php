<?php

class Car {

    // 6 Константы, static класса;
    public $color;
    public $wheels;
    public $speed;
    public $brand;
    public static $countCar = 0;    // Создание статического свойства класса
    const TEST_CAR = "Прототип";    // Создание константы
    const TEST_CAR_SPEED = 300;

    public function __construct($color_cons, $wheels_cons, $speed_cons, $brand_cons) {
        $this->color = $color_cons;
        $this->wheels = $wheels_cons;
        $this->speed = $speed_cons;
        $this->brand = $brand_cons;
        self::$countCar++;          // обращение к статическому свойству класса внутри;
        echo "<br>";
    }

    public static function getCount () {        // Создание статического метода класса
        return self::$countCar;
    }

    public function getCarInfo () {
        return "<h3>О моём авто</h3>
        Марка: {$this->brand}<br>
        Цвет: {$this->color}<br>
        Кол-во колес: {$this->wheels}<br>
        Макс. скорость: {$this->speed}<br>";
    }

    public function getPrototypeInfo () {
        return "<h3>Данные тестого авто</h3>
        Наименование: " . self::TEST_CAR . "<br>
        Макс. скорость: " . self::TEST_CAR_SPEED . "<br>";
    }
}