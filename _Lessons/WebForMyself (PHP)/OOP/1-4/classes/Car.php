<?php

class Car {

    // 2 урок. Свойства класса.
    // public $color;
    // public $wheels = 4;
    // public $speed = 180;
    // var $brand;

    // нижеописанный код работает с PHP 5.6; __DIR__ - путь к текущей папке;
    // public $path = __DIR__ . "/test";
    // public $test = 11 + 3;

    // 3 урок. Метод объекта
    // public function getCarInfo () {
    //     return "<h3>О моём авто</h3>
    //     Марка: {$this->brand}<br>
    //     Цвет: {$this->color}<br>
    //     Кол-во колес: {$this->wheels}<br>
    //     Год выпуска: {$this->year}<br>
    //     Макс. скорость: {$this->speed}<br>";
    // }

    // 4 урок. __construct  и __destruct;
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public function __construct($color_cons, $wheels_cons, $speed_cons, $brand_cons) {
        // echo __METHOD__ . "<br>"; - вывод информации об методе;
        $this->color = $color_cons;
        $this->wheels = $wheels_cons;
        $this->speed = $speed_cons;
        $this->brand = $brand_cons;
    }

    // аналог __construct, название метода должно совпадать с названием класса, не рекомендуется использовать!
    // public function Car ($color_cons, $wheels_cons, $speed_cons, $brand_cons) {
    //     $this->color = $color_cons;
    //     $this->wheels = $wheels_cons;
    //     $this->speed = $speed_cons;
    //     $this->brand = $brand_cons;
    // }

    public function getCarInfo () {
        return "<h3>О моём авто</h3>
        Марка: {$this->brand}<br>
        Цвет: {$this->color}<br>
        Кол-во колес: {$this->wheels}<br>
        Макс. скорость: {$this->speed}<br>";
    }
}