<?php
error_reporting(-1);
require_once "classes/int3D.php";
require_once "classes/Product.php";
require_once "classes/ProductBook.php";
function debug ($arr) {
    echo "<pre>" . print_r($arr,1) . "</pre>";
}

$book = new ProductBook ("Три мушкетера", 50, 366);
debug ($book);

echo $book->getProduct();

// $product = new Product("Test", 1);  //не сможем создать объект из абстрактного класса
// debug($product);

$book->addProduct("Три солнышка", 25);

$book->test();                         //проверка константы из интерфейса;