<?php
    $connect = @mysqli_connect("localhost", "mysql", "mysql", "guess_book"); // or die('Ошибка соединения с базой данных!');
    if(!$connect) echo mysqli_connect_error();
    mysqli_set_charset($connect, "utf8") or die("Не установлена кодировка!");   // установка кодировки соединения