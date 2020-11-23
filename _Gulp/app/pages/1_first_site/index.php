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
					include "pages/puzzle.php";
				} else if ($_GET["content"] == "guess") {
					include "pages/guess.php";
				} else if ($_GET["content"] == "guess_mp") {
					include "pages/guess_mp.php";
				} else if ($_GET["content"] == "genPass") {
					include "pages/genPass.php";
				} else {
					include "content.php";
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