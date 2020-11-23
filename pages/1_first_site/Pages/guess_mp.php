
				<h1>Игра в угадайку мультиплеер</h1>

				<div class ="box">
					<?php
						$answer = rand(0,100);
						if (isset($_POST["userAnswer1"]) && isset($_POST["userAnswer2"])) {
							if ($answer == $_POST["userAnswer1"]) {
								echo("Победил Игрок №1<br>");								
							} else if ($answer > $_POST["userAnswer1"]) {
								echo("Игрок №1 ввел маленькое число!<br>");
							} else if ($answer < $_POST["userAnswer1"]) {
								echo("Игрок №1 ввел большое число!<br>");
							}  else {
								echo("Игрок №1: некорректные данные!<br>");
							}
							if ($answer == $_POST["userAnswer2"]) {
								echo("Победил Игрок №2<br>");								
							} else if ($answer > $_POST["userAnswer2"]) {
								echo("Игрок №2 ввел маленькое число!<br>");
							} else if ($answer < $_POST["userAnswer2"]) {
								echo("Игрок №2 ввел большое число!<br>");
							}  else {
								echo("Игрок №2: некорректные данные!<br>");
							}
						} 
												
					?>
					<form method="POST">
						<p id="info">Отгадайте число с 0 до 100!</p>
						<p>Игрок №1:</p><input type="text" name="userAnswer1">
						<br>
						<p>Игрок №2:</p><input type="text" name="userAnswer2">
						<br>
						<input type="submit" value="Ответить" name="">
						</form>
													
				</div>
	