<!DOCTYPE html>

<html lang="en-US" style="height: 100%;">
	<head>
		<title>Scores - IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="./style_scores.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script async src="../js/ga.js"></script>
	</head>

	<body>		
		<?php include ("../header.php"); require_once('../js/parsecsv-0.3.2/parsecsv.lib.php');?>

		<div id='container' style='height:auto;overflow: hidden;min-height:700px;'>
			<?php include ("../navigation.php"); ?>
			<div style="width: 1000px;height: 55px;">
				<h2 id="subpage_h2" style='float:left;'>Scores</h2>
				<h3 style="font-family: Arial;font-size: 11px;color: rgba(0, 0, 0, 0.73);float: right;margin-right: 40px;margin-top: 34px;text-align:right;">Scores will be updated after games complete.</h3>
			</div>	
			<?php 
			$box_score_inning_rhe = "<div class='innings'>
									<div style='height: 100%;width: 105px;float: left;'></div>
									<div class='cell'>1</div>
									<div class='cell'>2</div>
									<div class='cell'>3</div>
									<div class='cell'>4</div>
									<div class='cell'>5</div>
									<div class='cell'>6</div>
									<div class='cell'>7</div>
									<div class='spacer'></div>
									<div class='rhe' style='border-left:1px solid rgb(153,153,153);font-weight:bold;'>R</div>
									<div class='rhe'>H</div>
									<div class='rhe'>E</div>
								</div>";
			?>
			
			<div id='boys'>
				<div style='width:412px;margin-left:auto;margin-right:auto;'>
					<h3 style='font-family: leagueGothicRegular;color:#555;text-align: center;font-size: 26px;margin-bottom: 15px;border-bottom:1px solid #AAA;padding-bottom:5px;'>Boys</h3>
					<?php
						$csv = new parseCSV('boys_scores.csv');
						$skip_array = array(2,5,8,11,14,17,20,23,26,29,32,35,38,41,44); //skip these rows in the excel file (zero indexed to row 2)
						for($game_index = 45; $game_index >= 0; $game_index-=3) {
							if(in_array($game_index, $skip_array)) continue; 
							if(strlen($csv->data[$game_index+1]["7"]) == 0) {
								array_push($skip_array, $game_index+1);
								continue;
							}
							if($game_index == 15) echo "<h3 style='font-family: leagueGothicRegular;color: maroon;text-align: center;font-size: 26px;margin-bottom: 5px;'>THURSDAY</h3>";
							if($game_index == 33) echo "<h3 style='font-family: leagueGothicRegular;color: maroon;text-align: center;font-size: 26px;margin-bottom: 5px;'>FRIDAY</h3>";
							if($game_index == 42) echo "<h3 style='font-family: leagueGothicRegular;color: maroon;text-align: center;font-size: 26px;margin-bottom: 5px;'>SATURDAY</h3>";
							echo "<div class='game'>
							<div class='inner_div'>
								<div class='game_title'>
									<h3 class='final_text'>Final</h3>
									<h3 class='wrap_text'>Wrap</h3>
								</div>
								<div class='box'>";
							echo $box_score_inning_rhe;
							
							$team_one_scores = array(); // holds scores by inning (array length = 7)
							for($inning_index = 1; $inning_index <= 7; $inning_index++) 
								array_push($team_one_scores, $csv->data[$game_index][(string)$inning_index]); // push all innning scores into $team_one_scores array
								
							$team_two_scores = array();
							for($inning_index = 1; $inning_index <= 7; $inning_index++) 
								array_push($team_two_scores, $csv->data[$game_index+1][(string)$inning_index]);
							
							$team_one_name = $csv->data[$game_index]['Teams'];
							$team_one_name_lower = strtolower($team_one_name);
							$team_one_runs = $csv->data[$game_index]["Runs"];
							$team_one_hits = $csv->data[$game_index]["Hits"];
							$team_one_errors = $csv->data[$game_index]["Errors"];
							
							$team_two_name = $csv->data[$game_index+1]['Teams'];
							$team_two_name_lower = strtolower($team_two_name);
							$team_two_runs = $csv->data[$game_index+1]["Runs"];
							$team_two_hits = $csv->data[$game_index+1]["Hits"];
							$team_two_errors = $csv->data[$game_index+1]["Errors"];
							
							echo "<ul class='team_one'>
							<li class='team_name_container'>
								<img id='{$team_one_name_lower}_22px' src='../img/blank.gif'>
								<p class='name' id='{$team_one_name_lower}'>{$team_one_name}</p>
							</li>";
							foreach ($team_one_scores as $score) echo "<li class='cell'>{$score}</li>"; // loop over team 1's scores by inning
							echo "<li class='spacer'></li>
							<li class='rhe runs'>{$team_one_runs}</li>
							<li class='rhe 12pt'>{$team_one_hits}</li>
							<li class='rhe 12pt'>{$team_one_errors}</li>								
							</ul>";
						
							echo "<ul class='team_one'>
							<li class='team_name_container'>
								<img id='{$team_two_name_lower}_22px' src='../img/blank.gif'>
								<p class='name' id='{$team_two_name_lower}'>{$team_two_name}</p>
							</li>";
							foreach ($team_two_scores as $score) echo "<li class='cell'>{$score}</li>"; // loop over team 1's scores by inning
							echo "<li class='spacer'></li>
							<li class='rhe runs'>{$team_two_runs}</li>
							<li class='rhe 12pt'>{$team_two_hits}</li>
							<li class='rhe 12pt'>{$team_two_errors}</li>
							</ul>";
							
							echo "</div>
								</div>
							</div>";
						}
					?>
				</div>
			</div>

			<div id='girls'>
				<div style='width:412px;margin-left:auto;margin-right:auto;'>
					<h3 style='font-family: leagueGothicRegular;color:#555;text-align: center;font-size: 26px;margin-bottom: 15px;border-bottom:1px solid #AAA;padding-bottom:5px;'>Girls</h3>
					<?php
						$csv = new parseCSV('girls_scores.csv');
						$skip_array = array(2,5,8,11,14,17,20,23,26,29,32,35,38,41,44); //skip these rows in the excel file (zero indexed to row 2)
						for($game_index = 45; $game_index >= 0; $game_index-=3) {
							if(in_array($game_index, $skip_array)) continue; 
							if(strlen($csv->data[$game_index+1]["7"]) == 0) {
								array_push($skip_array, $game_index+1);
								continue;
							}
							if($game_index == 15) echo "<h3 style='font-family: leagueGothicRegular;color: maroon;text-align: center;font-size: 26px;margin-bottom: 5px;'>THURSDAY</h3>";
							if($game_index == 33) echo "<h3 style='font-family: leagueGothicRegular;color: maroon;text-align: center;font-size: 26px;margin-bottom: 5px;'>FRIDAY</h3>";
							if($game_index == 42) echo "<h3 style='font-family: leagueGothicRegular;color: maroon;text-align: center;font-size: 26px;margin-bottom: 5px;'>SATURDAY</h3>";
							echo "<div class='game'>
							<div class='inner_div'>
								<div class='game_title'>
									<h3 class='final_text'>Final</h3>
									<h3 class='wrap_text'>Wrap</h3>
								</div>
								<div class='box'>";
							echo $box_score_inning_rhe;
							
							$team_one_scores = array(); // holds scores by inning (array length = 7)
							for($inning_index = 1; $inning_index <= 7; $inning_index++) 
								array_push($team_one_scores, $csv->data[$game_index][(string)$inning_index]); // push all innning scores into $team_one_scores array
								
							$team_two_scores = array();
							for($inning_index = 1; $inning_index <= 7; $inning_index++) 
								array_push($team_two_scores, $csv->data[$game_index+1][(string)$inning_index]);
							
							$team_one_name = $csv->data[$game_index]['Teams'];
							$team_one_name_lower = strtolower($team_one_name);
							$team_one_runs = $csv->data[$game_index]["Runs"];
							$team_one_hits = $csv->data[$game_index]["Hits"];
							$team_one_errors = $csv->data[$game_index]["Errors"];
							
							$team_two_name = $csv->data[$game_index+1]['Teams'];
							$team_two_name_lower = strtolower($team_two_name);
							$team_two_runs = $csv->data[$game_index+1]["Runs"];
							$team_two_hits = $csv->data[$game_index+1]["Hits"];
							$team_two_errors = $csv->data[$game_index+1]["Errors"];
							
							echo "<ul class='team_one'>
							<li class='team_name_container'>
								<img id='{$team_one_name_lower}_22px' src='../img/blank.gif'>
								<p class='name' id='{$team_one_name_lower}'>{$team_one_name}</p>
							</li>";
							foreach ($team_one_scores as $score) echo "<li class='cell'>{$score}</li>"; // loop over team 1's scores by inning
							echo "<li class='spacer'></li>
							<li class='rhe runs'>{$team_one_runs}</li>
							<li class='rhe 12pt'>{$team_one_hits}</li>
							<li class='rhe 12pt'>{$team_one_errors}</li>								
							</ul>";
						
							echo "<ul class='team_one'>
							<li class='team_name_container'>
								<img id='{$team_two_name_lower}_22px' src='../img/blank.gif'>
								<p class='name' id='{$team_two_name_lower}'>{$team_two_name}</p>
							</li>";
							foreach ($team_two_scores as $score) echo "<li class='cell'>{$score}</li>"; // loop over team 1's scores by inning
							echo "<li class='spacer'></li>
							<li class='rhe runs'>{$team_two_runs}</li>
							<li class='rhe 12pt'>{$team_two_hits}</li>
							<li class='rhe 12pt'>{$team_two_errors}</li>
							</ul>";
							
							echo "</div>
								</div>
							</div>";
						}
					?>
				</div>
			</div>
		</div>
		<script src="../js/prefixfree.min.js"></script>
	</body>
	
</html>


