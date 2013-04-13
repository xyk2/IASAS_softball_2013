<!DOCTYPE html>

<html lang="en-US" style="height: 100%;">
	<head>
		<title>Game Template - IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="./style_game.css">
		<link rel="stylesheet" type="text/css" href="./style_scores.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script async src="../js/ga.js"></script>
		
		<script>
			$(document).ready(function(){
				$('.half_inning').each(function(){
					$(this).children(".title").click(function(){
						$(this).parents(".half_inning").find(".content").slideToggle("fast");
						if($(this).children('img').attr('src') == '../img/arrow_right.png') {
							$(this).children('img').attr('src', '../img/arrow_down.png');
						} else {
							$(this).children('img').attr('src', '../img/arrow_right.png');
						}
					});
				});

			});
		</script>

	</head>

	<body>		
		<?php include ("../header.php"); ?>
		<?php include ("./functions.php"); ?>

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
						<div style="border-radius:none;border-left:none;" class='button active'>Play-by-Play</div>
					</a>
					<a href="./photos.php">
						<div style="border-radius:0 5px 5px 0;border-left:none;" class='button'>Photos</div>
					</a>
			</div>
	
			<div class='half_inning'>
				<div class='title'>
					<img src="../img/arrow_down.png" style="float: left;">
					<h4>Bottom 2</h4>
				</div>
				<div class='content'>
					<ul> <?php play_by_play("../gamecast_new/xml/play_by_play.xml", "two_b", 2, "bottom"); ?> </ul>
				</div>
			</div>
			
			<div class='half_inning'>
				<div class='title'>
					<img src="../img/arrow_down.png" style="float: left;">
					<h4>Top 2</h4>
				</div>
				<div class='content'>
					<ul> <?php play_by_play("../gamecast_new/xml/play_by_play.xml", "two_t", 2, "top"); ?> </ul>
				</div>
			</div>
			
			<div class='half_inning'>
				<div class='title'>
					<img src="../img/arrow_down.png" style="float: left;">
					<h4>Bottom 1</h4>
				</div>
				<div class='content'>
					<ul> <?php play_by_play("../gamecast_new/xml/play_by_play.xml", "one_b", 1, "bottom"); ?> </ul>
				</div>
			</div>
			
			<div class='half_inning'>
				<div class='title'>
					<img src="../img/arrow_down.png" style="float: left;">
					<h4>Top 1</h4>
				</div>
				<div class='content'>
					<ul> <?php play_by_play("../gamecast_new/xml/play_by_play.xml", "one_t", 1, "top"); ?> </ul>
				</div>
			</div>		


			
		</div>
		<script src="../js/prefixfree.min.js"></script>
	</body>
</html>
