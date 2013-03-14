<!DOCTYPE html>

<html lang="en-US" style="height: 100%;">
	<head>
		<title>Game Template - IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="./style_game.css">
		<link rel="stylesheet" type="text/css" href="./style_scores.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script async src="../js/ga.js"></script>
	</head>

	<body>		
		<?php include ("../header.php"); ?>

		<div id='container'>
			<?php include ("../navigation.php"); ?>

			<div id='game'>SAS vs TAS Girls</div>
			<div style="margin-right: 20px;float: right;" class='info'>Saturday April 13, 3:30pm</div>
			<div class="sections">
					<a href="./index.php">
						<div style="border-radius: 5px 0 0 5px;" class='button'>Wrap</div>
					</a>
					<a href="./box.php">
						<div style="border-radius:none;border-left:none;" class='button'>Box Score</div>
					</a>
					<a href="./play-by-play.php">
						<div style="border-radius:none;border-left:none;" class='button'>Play-by-Play</div>
					</a>
					<a href="./photos.php">
						<div style="border-radius:0 5px 5px 0;border-left:none;" class='button active'>Photos</div>
					</a>
			</div>
		</div>
		<script src="../js/prefixfree.min.js"></script>
	</body>
</html>
