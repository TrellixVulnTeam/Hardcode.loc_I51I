<?php
error_reporting(-1);
require_once "classes/Product.php";
require_once "classes/int3D.php";
require_once "classes/iGadget.php";
require_once "classes/ProductBook.php";
require_once "classes/ProductNotebook.php";
function debug ($arr) {
    echo "<pre>" . print_r($arr,1) . "</pre>";
}

function offerCase (iGadget $Product) {                         //устанавливаем проверку на родство с интерфейсом iGadget
    echo "<hr>Вы приобрели чехол для {$Product->getName()}!";
}

$book = new ProductBook ("Три мушкетера", 50, 366);
$notebook = new ProductNotebook ("Dell", 9600, "Intel");
debug ($book);

echo $book->getProduct();

offerCase($notebook);
//offerCase($book);                                              // выводит ошибку из-за непрохождения проверки интерфейса
