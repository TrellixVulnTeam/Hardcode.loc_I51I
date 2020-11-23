<?php

namespace _Core\traits;

trait tSingleton {

    private static $instanceObject;

    private function __construct () {           //запрет на создание объекта обычным способом

    }

    public static function createInstanceObject() { //через метод создаем объект
        if (self::$instanceObject === null) {         //проверка, создавался ли объект ранее
            self::$instanceObject = new self();      // при отсутствии - создает объект
        }
        return self::$instanceObject;                // при наличии - возвращает созданный ранее объект
    }
}