<?php
error_reporting(-1);
require_once "classes/Product.php";
require_once "classes/ProductNotebook.php";
require_once "classes/ProductBook.php";
function debug ($arr) {
    echo "<pre>" . print_r($arr,1) . "</pre>";
}

$book = new ProductBook ("Три мушкетера", 25, 366);
$notebook = new ProductNotebook ("Dell", 5600, "Intel");
debug ($book);
debug ($notebook);

echo $book->getProduct();
echo $notebook->getProduct();