<?php
error_reporting(-1);
require_once "classes/Product.php";
function debug ($arr) {
    echo "<pre>" . print_r($arr,1) . "</pre>";
}

$book = new Product ("Три мушкетера", 25, null, 250);
$notebook = new Product ("Dell", 5600, "Intel");
debug ($book);
debug ($notebook);

echo $book->getProduct("book");
echo $notebook->getProduct();