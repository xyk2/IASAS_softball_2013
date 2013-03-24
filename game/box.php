<!DOCTYPE html>

<html lang="en-US" style="height: 100%;">
	<head>
		<title>Game Template - IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="./style_game.css">
		<link rel="stylesheet" type="text/css" href="./style_box.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
						<div style="border-radius:none;border-left:none;" class='button active'>Box Score</div>
					</a>
					<a href="./play-by-play.php">
						<div style="border-radius:none;border-left:none;" class='button'>Play-by-Play</div>
					</a>
					<a href="./photos.php">
						<div style="border-radius:0 5px 5px 0;border-left:none;" class='button'>Photos</div>
					</a>
			</div>
			
				<div class="box">
					<div class="innings">
						<div style="height: 100%;width: 150px;float: left;">Girls</div>
						<div class="cell">1</div>
						<div class="cell">2</div>
						<div class="cell">3</div>
						<div class="cell">4</div>
						<div class="cell">5</div>
						<div class="cell">6</div>
						<div class="cell">7</div>
						<div class="spacer"></div>
						<div class="rhe" style="border-left:1px solid rgb(153,153,153);font-weight:bold;">R</div>
						<div class="rhe">H</div>
						<div class="rhe">E</div>
					</div>
					<div class="team_one">
						<div style="height: 100%;width: 150px;float: left;">
							<img src="../img/school_TAS.png">
							<p class="name" style="color:navy;">TAS</p>
						</div>
						<div class="cell">1</div>
						<div class="cell">0</div>
						<div class="cell">0</div>
						<div class="cell">0</div>
						<div class="cell">0</div>
						<div class="cell">1</div>
						<div class="cell">0</div>
						<div class="spacer"></div>
						<div class="rhe" style="background-color: rgba(0, 0, 0, 0.06);font-weight:bold;">2</div>
						<div class="rhe">8</div>
						<div class="rhe">1</div>								
					</div>
					<div class="team_two">
						<div style="height: 100%;width: 150px;float: left;">
							<img src="../img/school_SAS.png">
							<p class="name" style="color:maroon;">SAS</p>
						</div>
						<div class="cell">4</div>
						<div class="cell">1</div>
						<div class="cell">0</div>
						<div class="cell">0</div>
						<div class="cell">1</div>
						<div class="cell">0</div>
						<div class="cell">0</div>
						<div class="spacer"></div>
						<div class="rhe" style="background-color: rgba(0, 0, 0, 0.06);font-weight:bold;">6</div>
						<div class="rhe">15</div>
						<div class="rhe">0</div>
					</div>
				</div> <!-- end box -->
			
			
		</div>
		<script src="../js/prefixfree.min.js"></script>
	</body>
</html>
