<?php
    // Сохраняет информацию с формы в файл
    function save_mess () {
    $str = $_POST["name"] . "|" . $_POST["text"] . "|" . date("Y-M-d H:i:s") . "\n***\n";
    file_put_contents("gb.txt", $str, FILE_APPEND);
    }

    // Информация с файла возвращается в строчную переменную
    function get_mess () {
        return file_get_contents("gb.txt");
    }

    // Создание массива данных из строки, удаление последнего пустого элемента, реверс массива.
    function array_mess($message) {
        $arr =  explode("\n***\n", $message);
        array_pop($arr);
        return array_reverse($arr);
    }

    // Вывод на экран массива в удобночитаемом формате
    function print_arr ($arr) {
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }

    // Экранирует все данные в $_POST
    function screen_post () {
        global $connect;
        foreach ($_POST as $key => $value) {
            $_POST[$key] = mysqli_real_escape_string($connect, $value);
        }
    }
    
    // Сохраняет информацию с формы в базу данных
    function save_mess_db () {
        global $connect;
        // $name = mysqli_real_escape_string($connect, $_POST['name_db']);
        // $message = mysqli_real_escape_string($connect, $_POST['text_db']);
        screen_post();
        extract($_POST);
        $insert = "INSERT INTO message (name, message) VALUES ('$name_db','$text_db')";
        $query = mysqli_query($connect, $insert) or die (mysqli_error($connect));
    }

    // Информация с базы данных возвращается в массив
    function get_mess_db () {
        global $connect;
        $select = "SELECT * FROM message ORDER BY id DESC";
        $query = mysqli_query($connect, $select);
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
?>