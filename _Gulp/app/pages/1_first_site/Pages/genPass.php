<h1>Генератор паролей</h1>

<?php
	if (isset($_POST["userAnswer"])) {
		$arr = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','V','X','Y','Z','1','2','3','4','5','6','7','8','9','0');
		$lengthPassword = $_POST["userAnswer"];
		$createPassword = "";
		for ($i = 0; $i < $lengthPassword; $i++) {
			$index = rand(0,count($arr) - 1);
			$createPassword .= $arr[$index];
		}
	}
	echo("Ваш пароль:<br>" . $createPassword);
?>
<form method="POST">
	<p id="info">Введите длину пароля:</p>
	<input type="text" name="userAnswer">
	<br>
	<input type="submit" value="Сгенерировать" name="">
</form>
	

