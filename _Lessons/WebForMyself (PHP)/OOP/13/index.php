<?php

use app\{ProductBook, ProductNotebook};         //указатель на использование пространства имен вместо просто класса
use _Core\interfaces\iGadget;

error_reporting(-1);

require_once __DIR__ . "/vendor/autoload.php";

function debug ($arr) {
    echo "<pre>" . print_r($arr,1) . "</pre>";
}

// function autoloaderClass ($class) {                              //создаем функцию на автозагрузку
//     $class = str_replace ("\\","/",$class);                      //исправляем "\" на "/" в пространстве имен 
//     $file = __DIR__ . "/$class.php";
//     if(file_exists($file)) {                                    //проверка на наличие и подключение файла класса
//         require_once $file;
//     }
// }

// spl_autoload_register("autoloaderClass");                            //создаем автозагрузку

function offerCase (iGadget $Product) {                         //устанавливаем проверку на родство с интерфейсом iGadget
    echo "<hr>Вы приобрели чехол для {$Product->getName()}!";
}

$book = new ProductBook ("Три мушкетера", 50, 366);
$notebook = new ProductNotebook ("Dell", 9600, "Intel");
debug ($book);

echo $book->getProduct();

offerCase($notebook);

$mail = new \PHPMailer\PHPMailer\PHPMailer();
debug($mail);