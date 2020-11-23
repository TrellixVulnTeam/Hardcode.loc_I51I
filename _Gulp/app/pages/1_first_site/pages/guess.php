
<script type="text/javascript">

	var answer = parseInt(Math.random()*100);
	var tryCount = 0;
	var maxTryCount = 3;

	function readInt () {
		var number = return +document.getElementById("userAnswer").value;
	}

	function write(text) {
		document.getElementById("info").innerHTML = text;
	}

	function hide(id) {
		document.getElementById(id).style.display = "none";
	}

	function guess () {
		tryCount++;
		var userAnswer = readInt();
		if (userAnswer == answer) {
			write("<b>Поздравляю Вы победили!</b>");
			hide("userAnswer");
			hide("button");
		} else if (tryCount >= maxTryCount) {
			write("<b>Вы проиграли!</b><br>Правильный ответ: " + answer);
			hide("userAnswer");
			hide("button");
		} else if (userAnswer > answer) {
			write("Вы ввели слишком большое число!<br>Попробуйте еще раз! Введите число с 0 до 100");
		} else if (userAnswer < answer) {
			write("Вы ввели слишком маленькое число!<br>Попробуйте еще раз! Введите число с 0 до 100");
		}
	}

</script>

<h1>Игра в угадайку</h1>

<div class ="box">
	
	<p id="info">Отгадайте число с 0 до 100!</p>
	
	<input type="text" id="userAnswer">
	<br>
	<a href="#" onclick="guess()" id="button">Начать</a>
					
</div>
	
			