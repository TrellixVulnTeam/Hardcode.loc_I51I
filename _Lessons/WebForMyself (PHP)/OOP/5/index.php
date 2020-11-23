<?php
    error_reporting(-1);

    function print_arr($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    require_once "classes/File.php";
    $file = new File(__DIR__ . "/text.txt");
    
    $file->writeText("Строка 1");
    $file->writeText("Строка 2");
    $file->writeText("Строка 3");
    $file->writeText("Строка 4");
    $file->writeText("Строка 5");