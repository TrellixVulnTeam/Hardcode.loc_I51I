<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">

		<div class="header">
			<h1>Личный сайт студента GeekBrains</h1>
		</div>

		<?php include "sidebar.php"; ?>

		<div class="content">
			<?php 
				if ($_GET["content"] == "puzzle") {
					require_once "pages/puzzle.php";
				} else if ($_GET["content"] == "guess") {
					require_once "pages/guess.php";
				} else if ($_GET["content"] == "guess_mp") {
					require_once "pages/guess_mp.php";
				} else if ($_GET["content"] == "genPass") {
					require_once "pages/genPass.php";
				} else {
					require_once "content.php";
				}
			?>
			
		</div>
		<div class="clear"></div>
		<div class="footer">
			copyright &copy; <?php echo date("Y"); ?> Alexander Bikmeev
		</div>
	</div>
</body>
</html>