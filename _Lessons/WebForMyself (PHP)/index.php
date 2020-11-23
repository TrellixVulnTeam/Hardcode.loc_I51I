<?php
    require_once "connection.php";
    require_once "functions.php";

    if(!empty($_POST)) {
        save_mess_db();    //сохранение сообщения с формы
    header("Location: {$_SERVER['PHP_SELF']}"); // Устранение окна F5
    exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display:flex;flex-direction:column; text-align:center; margin:0 200px;">
    <H1>Домашнее задание</H1>
    <H3>Таблица умножения</H3>
    <?php
    error_reporting(-1); // - вывод всех ошибок
    //var_dump($var) - вывод информации о $var (тип данных и т.д.)

        echo '<table border="1" style="border-collapse:collapse;">' . "\n"; //создаем таблицу
        $r = 1;
        while ($r <= 10) {
            echo "\t<tr>\n";    // создаем строки
                $c = 1;
                while ($c <= 10) {
                    echo "\t\t<td>$r * $c = " . $r * $c . "</td>\n"; // создаем столбцы и контент
                    $c++;
                }
            echo "\t</tr>\n";   // закрываем строки
            $r++;
        }
        echo '</table>\n';    //закрываем таблицу
    ?>

    <H3>Работа с массивами</H3>
    <?php
        $arr = [
            [
                "title" => "Nokia",
                "price" => "4500 rub",
                "description" => "smartphone",
            ],
            [
                "title" => "iPad",
                "price" => "19500 rub",
                "description" => "planshet",
            ],
        ];
        $i = 0;
        while ($i <= 1) {
        echo "<div>\n Модель: <i>" . $arr[$i]["title"] . "</i> Цена: <i>" . $arr[$i]["price"]. "</i> Описание: <i>" . $arr[$i]["description"] . "</i>";
        echo "</div>\n";
        $i++;
        }
    ?>

<?php
    // Сравнение массивов
    // array_diff() - возвращает все несовпадения
    // array_intersect() - возвращает все совпадения
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
?>

<?php
    // аналог функции count();
function test_count ($arr) {
    $i = 0;
    foreach($arr as $v) {
        $i++;
    }
    return $i;
}
$test_array = ["test1", "test2", "test3", "test4"];
echo "<h3>Сделали аналог функции count().</h3><br> Проверка: " . test_count($test_array);
?>

<h3>Гостевая книга</h3>
<form action="index.php" method="POST">
    <p><label>Имя: <input type="text" name="name"></label></p>
    <p><label>Текст: <textarea name="text"></textarea></label></p>
    <button type="submit">Отправить</button>
</form>

<hr>

<?php
$messages = get_mess(); // Сбор всех сообщений в строку
$messages = array_mess($messages);  // Создание массива с сообщениями
?>

<?php if(!empty($messages)) : ?>    <!--Проверка массива с сообщениями-->
    <?php foreach ($messages as $mess) : ?> <!--Цикл с массивами сообщений-->
        <?php $mess = explode("|", $mess)?> <!--Разделение элемента массива сообщения на имя, дату, текст-->
        <div class="message" style="border: 1px solid #ccc; width:100%; text-align: left; margin:20px auto; padding:5px">
            <p>Автор: <?=$mess[0]?> | Дата: <?=$mess[2]?></p>
            <p><i><?=nl2br(htmlspecialchars($mess[1]))?></i></p>  <!--nl2br учет всех переносов, htmlspecialchars защита от срабатывания тэгов в сообщениях-->
        </div>        
    <?php endforeach;?>
<?php endif;?>

<?php
    // $connect = @mysqli_connect("localhost", "mysql", "mysql", "guess_book"); // or die('Ошибка соединения с базой данных!');
    // if(!$connect) echo mysqli_connect_error();

    // mysqli_set_charset($connect, "utf8") or die("Не установлена кодировка!");   // установка кодировки соединения

    // $insert = "INSERT INTO message (name, message) VALUES ('Оля','Lorem ipsum dolor sit amet.')";    // переменная на запрос на добавление сообщения
    // $res_insert = mysqli_query($connect, $insert);   //запрос добавления
    // if($res_insert) echo "Запрос выполнен!";
    // else echo "Запрос НЕкорректен";

    // $update = "UPDATE message SET message = CONCAT(message, '|||') WHERE id > 4";   // переменная на запрос на обновление сообщений
    // $res_update = mysqli_query($connect, $update) or die(mysqli_error($connect));    // запрос обновления

    // $delete = "DELETE FROM message WHERE id = 7";   // переменная на запрос удаления
    // $res_delete = mysqli_query($connect, $delete) or die(mysqli_error($connect));    // запрос удаления
    // echo mysqli_affected_rows($connect);    // какое количество строк было затронуто при запросе

    // $select = mysqli_query($connect, "SELECT name,message,date FROM message");  // запрос на выборку
    //$res_select = mysqli_fetch_all($select, MYSQLI_ASSOC);  // MYSQLI_ASSOC - ассоциативный массив, MYSQLI_NUM - по умолч. обычный индексный
    // foreach ($res_select as $item) {
    //     echo "Name: " . $item['name'] . "<br>";
    //     echo "Text: " . $item['message'] . "<br>";
    //     echo "Date: " . $item['date'] . "<br>";
    //     echo "<hr>";
    // }

    // $select = mysqli_query($connect, "SELECT * FROM message ORDER BY id DESC");  // запрос на выборку
    // echo mysqli_num_rows($select) . "<br>"; // сколько строк достал запрос
    // $arr_select2 = [];
    // while ($row = mysqli_fetch_assoc($select)) { // возвращает только одну строку, поэтому запускаем по циклу
    //     $arr_select2[$row['id']] = $row;
    // }
    // foreach ($arr_select2 as $item) {
    //     echo "Name: " . $item['name'] . "<br>";
    //     echo "Text: " . $item['message'] . "<br>";
    //     echo "Date: " . $item['date'] . "<br>";
    //     echo "<hr>";
    // }
?>

<h3>Гостевая книга с помощью БД</h3>
<form action="" method="POST">
    <p><label>Имя: <input type="text" name="name_db"></label></p>
    <p><label>Текст: <textarea name="text_db"></textarea></label></p>
    <button type="submit">Отправить</button>
</form>
<?php
    $messages_db = get_mess_db ();
    print_arr($messages_db);
?>
<?php if(!empty($messages_db)) : ?>    <!--Проверка массива с сообщениями-->
    <?php foreach ($messages_db as $mess) : ?> <!--Цикл с массивами сообщений-->
        <div style="border: 1px solid #ccc; width:100%; text-align: left; margin:20px auto; padding:5px">
            <p>Автор: <?=$mess['name']?> | Дата: <?=$mess['date']?></p>
            <p><i><?=nl2br(htmlspecialchars($mess['message']))?></i></p>  <!--nl2br учет всех переносов, htmlspecialchars защита от срабатывания тэгов в сообщениях-->
        </div>        
    <?php endforeach;?>
<?php endif;?>

<h3>Новинки PHP 7</h3>
<?php
    //declare(strict_types=1); // строгая типатизация, нельзя мешать данные разных типов;
    function sum (int ...$ints) {   // int - вывод целого числа всегда, ...$ints = массив значений
        return array_sum($ints);
    }
    var_dump(sum(2,3.5,5));
?>
</body>
</html>