<?php

class File {

    public $path_file;                              // будем помещать путь к файлу;
    public $write_file;                             // указатель на открытый файл для записи;

    public function __construct ($file) {
       $this->path_file = $file;                    // записываем путь к файлу;

       if (!is_writable($this->path_file)) {        // проверка на открытие файла;
        echo "Данный {$this->path_file} файл не открывается!";
        exit;
       }

       $this->write_file = fopen($this->path_file, "a"); // открываем файл;

    }

    public function __destruct () {
        fclose($this->write_file);                      //закрываем открытый файл;
    }

    public function writeText ($text) {
        if (fwrite($this->write_file, $text . "\n") === FALSE) {   //проверка на запись файла; "\n" - PHP_EOL (аналог)
            echo "Не могу произвести запись в файл {$this->path_file}!";
            exit;
        }
    }

}