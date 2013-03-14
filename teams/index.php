<!DOCTYPE html>
<html lang="en-US" style="height: 100%;">
	<head>
		<title>Teams - IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="./teams_style.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="../js/tabify/jquery.tabify.js"></script>
		<script async src="../js/ga.js"></script>
		<script type="text/javascript">				
			$(document).ready(function () {
				$('#menu').tabify();
			});	
		</script>
		<style type="text/css" media="screen">
			.menu { padding: 0; margin-top:10px; margin-left:40px;}
			.menu li { display: inline; }
			.menu li a { font-family: Arial;
						background: rgba(192, 192, 192, 0.7); 
						padding: 10px; 
						float:left; 
						border-bottom: none; 
						text-decoration: none; 
						color: #444; 
						font-weight: bold;
						margin-right: 5px;
						line-height: 22px;
						padding-top: 5px;
						padding-bottom: 5px;
						}
			.menu li.active a { font-family: Arial;
								background:rgba(255, 255, 255, 0.59); 
							}
			.content { float: left; 
						background:rgba(255, 255, 255, 0.59);
						padding: 10px 20px 20px; 
						width: 880px; 
						margin-left:40px;
			}
		</style>
		<script type="text/javascript" src="../js/jquery.leanModal.min.js"></script>

		<script type="text/javascript">
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 200 });		
			});
		</script>
	</head>

	<body>		
		<?php include ("../header.php"); ?>

		<div id='container' style='min-height: 724px;'>
			<?php include ("../navigation.php"); ?>
			<div style="width: 1000px;">
				<h2 style="font-family: leagueGothicRegular;color: rgba(0, 0, 0, 0.47);font-size: 40px;margin-left: 40px;margin-top: 10px;float:left;">Teams</h2>
				<div style='float:left'>
					<ul id="menu" class="menu">
						<li class="active"><a href="#tas"><img src="../img/blank.gif" class="tab_sprite" id='tas_22px'>TAS</a></li>
						<li><a href="#sas"><img src="../img/blank.gif" class='tab_sprite' id='sas_22px'>SAS</a></li>
						<li><a href="#isb"><img src="../img/blank.gif" class='tab_sprite' id='isb_22px'>ISB</a></li>
						<li><a href="#ism"><img src="../img/blank.gif" class='tab_sprite' id='ism_22px'>ISM</a></li>
						<li><a href="#iskl"><img src="../img/blank.gif" class='tab_sprite' id='iskl_22px'>ISKL</a></li>
						<li><a href="#jis"><img src="../img/blank.gif" class='tab_sprite' id='jis_22px'>JIS</a></li>
					</ul>
				
					<!-- TAS --> 
					<div id="tas" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="../img/blank.gif" id='tas_50px' class="team_tab_sprite">
							<h2 class="school_title">Taipei American School</h2>
						</div>
						<div class='boys'>
							<?php $school = 'TAS'; $gender = 'boys';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>
						<div class='girls'>
							<?php $school = 'TAS'; $gender = 'girls';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>
					</div>
					
					<!-- SAS -->
					<div id="sas" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="../img/blank.gif" id='sas_50px' class="team_tab_sprite">
							<h2 class="school_title">Singapore American School</h2>
						</div>
						<div class='boys'>
							<?php $school = 'SAS'; $gender = 'boys';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>
						<div class='girls'>
							<?php $school = 'SAS'; $gender = 'girls';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>
					</div>
					
					<!-- ISB -->				
					<div id="isb" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="../img/blank.gif" id='isb_50px' class="team_tab_sprite">
							<h2 class="school_title">International School of Bangkok</h2>
						</div>
						<div class='boys'>
							<?php $school = 'ISB'; $gender = 'boys';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>
						<div class='girls'>
							<?php $school = 'ISB'; $gender = 'girls';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>						
					</div>
					
					<!-- ISM -->										
					<div id="ism" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="../img/blank.gif" id='ism_50px' class="team_tab_sprite">
							<h2 class="school_title">International School of Manila</h2>
						</div>
						<div class='boys'>
							<?php $school = 'ISM'; $gender = 'boys';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>
						<div class='girls'>
							<?php $school = 'ISM'; $gender = 'girls';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>								
					</div>
					
					<!-- ISKL -->	
					<div id="iskl" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="../img/blank.gif" id='iskl_50px' class="team_tab_sprite">
							<h2 class="school_title">International School of Kuala Lumpur</h2>
						</div>
						<div class='boys'>
							<?php $school = 'ISKL'; $gender = 'boys';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>
						<div class='girls'>
							<?php $school = 'ISKL'; $gender = 'girls';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>						
					</div>
					
					<!-- JIS -->	
					<div id="jis" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="../img/blank.gif" id='jis_50px' class="team_tab_sprite">
							<h2 class="school_title">Jakarta International School</h2>
						</div>
						<div class='boys'>
							<?php $school = 'JIS'; $gender = 'boys';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>
						<div class='girls'>
							<?php $school = 'JIS'; $gender = 'girls';
							echo "<a rel='leanModal' href='#{$school}_{$gender}'><img src='";
							if(file_exists("photos/{$school}_{$gender}.jpg")) echo "photos/{$school}_{$gender}.jpg";
							else echo "../img/team_placeholder/" . strtolower($school) . "_mini.png";
							echo "' style='width:419px;'></a>";
							include("rosters/{$school}_{$gender}.php");  ?>
						</div>		
					</div>
			</div>
		</div>
		
		<?php 
			$ids = array("TAS_boys","TAS_girls", "SAS_boys","SAS_girls", "ISB_boys","ISB_girls", "ISM_boys","ISM_girls", "ISKL_boys","ISKL_girls","JIS_boys","JIS_girls");
			$placeholder_img = array("tas_mini.png","tas_mini.png", "sas_mini.png","sas_mini.png", "isb_mini.png","isb_mini.png", "ism_mini.png","ism_mini.png", "iskl_mini.png","iskl_mini.png","jis_mini.png","jis_mini.png");
			$team_img = array("TAS_boys.jpg","TAS_girls.jpg", "SAS_boys.jpg","SAS_girls.jpg", "ISB_boys.jpg","ISB_girls.jpg", "ISM_boys.jpg","ISM_girls.jpg", "ISKL_boys.jpg","ISKL_girls.jpg","JIS_boys.jpg","JIS_girls.jpg");
			
			for ($x = 0; $x < 12; $x++) {
				 // If team photo exists in photo/, use that instead of the placeholder
				if(file_exists("photos/{$team_img[$x]}")) echo "<div id='{$ids[$x]}' class='modal'><img src='photos/{$team_img[$x]}'></div>\n";
				else echo "<div id='{$ids[$x]}' class='modal'><img src='../img/team_placeholder/{$placeholder_img[$x]}'></div>\n";
			}
			
		?>		
		<script src="../js/prefixfree.min.js"></script>
	</body>
</html>
