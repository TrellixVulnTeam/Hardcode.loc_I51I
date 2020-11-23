<?php
error_reporting(-1);
require_once "classes/Product.php";
require_once "classes/ProductBook.php";
function debug ($arr) {
    echo "<pre>" . print_r($arr,1) . "</pre>";
}

$book = new ProductBook ("Три мушкетера", 50, 366);
debug ($book);

echo $book->getProduct();

//var_dump($book->public);
//var_dump($book->protected);   // работает только в классе, где был создан и последующих от класса наследниках;
//var_dump($book->private);     // работает только в классе, где был создан;