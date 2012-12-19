<!DOCTYPE html>

<html lang="en-US" style="height: 100%;">
	<head>
		<title>Schedule - IASAS Softball 2013</title>
		<meta http-equiv="content-type" content="text/html; charset=us-ascii">
		<link rel="shortcut icon" href="./img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="./schedule_style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="../js/tabify/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">				
			$(document).ready(function () {
				$('#menu').tabify();
			});	
		</script>
		<?php include("./functions.php"); ?>
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
	</head>

	<body>		
		<?php include_once("../js/analytics.php") ?>
		<?php include ("../header.php"); ?>

		<div id='container' style='height:860px;'>
			<?php include ("../navigation.php"); ?>
			<div style="width: 1000px;">
				<h2 style="font-family: leagueGothicRegular;color: rgba(0, 0, 0, 0.47);font-size: 40px;margin-left: 40px;margin-top: 10px;float:left;">
					Schedule
				</h2>
				<h3 style="font-family: Arial;font-size: 11px;color: rgba(0, 0, 0, 0.73);float: right;margin-right: 40px;margin-top: 39px;">All times are UTC+8</h3>
				<!---------------- BOYS ----------------------->
				<div style='float:left'>
					<ul id="menu" class="menu">
						<li class="active"><a href="#boys" style='padding-left:20px;padding-right:20px;'>All</a></li>
						<li><a href="#tas" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="../img/blank.gif" class='tab_sprite' style="background: url(../img/sprite_combined_compressed.png) -50px 0px;">TAS</a></li>
						<li><a href="#sas" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="../img/blank.gif" class='tab_sprite' style="background: url(../img/sprite_combined_compressed.png) -50px -22px;">SAS</a></li>
						<li><a href="#isb" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="../img/blank.gif" class='tab_sprite' style="background: url(../img/sprite_combined_compressed.png) -50px -44px;">ISB</a></li>
						<li><a href="#ism" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="../img/blank.gif" class='tab_sprite' style="background: url(../img/sprite_combined_compressed.png) -50px -66px;">ISM</a></li>
						<li><a href="#iskl" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="../img/blank.gif" class='tab_sprite' style="background: url(../img/sprite_combined_compressed.png) -50px -88px;">ISKL</a></li>
						<li><a href="#jis" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="../img/blank.gif" class='tab_sprite' style="background: url(../img/sprite_combined_compressed.png) -50px -110px;">JIS</a></li>
					</ul>
					
					<div id="boys" class="content">
						<div style='float:left;width:410px;margin-top:10px;'>
							<p style="text-align: center;font-family: Arial;font-weight: bold;color: #333;">Boys</p>
							<p class="date">Thursday, April 12</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:30", "AM", "ISKL", "ISM", "&nbsp", "");
									insert_row_all("11:45", "AM", "SAS", "JIS", "&nbsp", ""); 
									insert_row_all("1:15", "PM", "ISB", "TAS", "&nbsp", "");
									insert_row_all("3:00", "PM", "ISM", "SAS", "&nbsp", "");
									insert_row_all("4:30", "PM", "TAS", "ISKL", "&nbsp", "");
									insert_row_all("6:30", "PM", "JIS", "ISB", "&nbsp", ""); 
									?>
								</tbody>
							</table>
							<p class="date" style='padding-top: 20px;'>Friday, April 13</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:00", "AM", "TAS", "ISM", "&nbsp", "");
									insert_row_all("9:45", "AM", "ISB", "ISB", "&nbsp", ""); 
									insert_row_all("11:30", "AM", "ISKL", "JIS", "&nbsp", "");
									insert_row_all("1:15", "PM", "ISM", "ISB", "&nbsp", "");
									insert_row_all("3:00", "PM", "SAS", "ISKL", "&nbsp", "");
									insert_row_all("4:45", "PM", "JIS", "TAS", "&nbsp", "");  
									?>
								</tbody>
							</table>
							<p class="date" style='padding-top: 20px;'>Saturday, April 14</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:00", "AM", "ISKL", "ISB", "&nbsp", "");
									insert_row_all("9:45", "AM", "TAS", "SAS", "&nbsp", "");
									insert_row_all("11:30", "AM", "ISM", "JIS", "&nbsp", "");  
									?>
								</tbody>
							</table>
						</div>
						
						<!-------------- GIRLS ALL --------------->
						<div style='float:left;width:410px;margin-top:10px;margin-left:60px;'>
							<p style="text-align: center;font-family: Arial;font-weight: bold;color: #333;">Girls</p>
							<p class="date">&nbsp</p>
														<table border="0" id='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:30", "AM", "SAS", "ISB", "&nbsp", "");
									insert_row_all("11:45", "AM", "ISKL", "TAS", "&nbsp", ""); 
									insert_row_all("1:15", "PM", "ISM", "JIS", "&nbsp", "");
									insert_row_all("3:00", "PM", "ISB", "ISKL", "&nbsp", "");
									insert_row_all("4:30", "PM", "JIS", "SAS", "&nbsp", "");
									insert_row_all("6:30", "PM", "TAS", "ISM", "&nbsp", ""); 
									?>
								</tbody>
							</table>
							<p class="date" style='padding-top: 20px;'>&nbsp</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:00", "AM", "ISB", "JIS", "&nbsp", "");
									insert_row_all("9:45", "AM", "ISKL", "ISM", "&nbsp", ""); 
									insert_row_all("11:30", "AM", "SAS", "TAS", "&nbsp", "");
									insert_row_all("1:15", "PM", "JIS", "ISKL", "&nbsp", "");
									insert_row_all("3:00", "PM", "TAS", "ISB", "&nbsp", "");
									insert_row_all("4:45", "PM", "ISM", "SAS", "&nbsp", "");  
									?>
								</tbody>
							</table>
							<p class="date" style='padding-top: 20px;'>&nbsp</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:00", "AM", "JIS", "TAS", "&nbsp", "");
									insert_row_all("9:45", "AM", "ISB", "ISM", "&nbsp", "");
									insert_row_all("11:30", "AM", "SAS", "ISKL", "&nbsp", "");  
									?>
								</tbody>
							</table>
						</div>
					</div>
					
					<!-- ------- TAS ------------ --> 
					<div id="tas" class="content" style="">
						<div style='width:100%; height:50px; clear:both'>
							<img src="../img/blank.gif" style='background:url(../img/sprite_combined_compressed.png) 0 0;' class="team_tab_sprite">
							<h2 style="font-family: leagueGothicRegular;font-size: 30px;color: #444;padding-top: 13px;padding-left: 5px;float: left;">Taipei American School</h2>
						</div>
						<!-- ------------ BOYS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;'>
							<p style="text-align: center;font-family: Arial;font-weight: bold;color: #333;">Boys</p>
							<p class="date">Thursday, April 12</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php insert_row("1:15", "PM", "Away", "ISB", "&nbsp", "");
									insert_row("4:30", "PM", "Home", "ISKL", "&nbsp", ""); ?>
								</tbody>
							</table>
							
							<p class="date" style='padding-top: 20px;'>Friday, April 13</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php insert_row("8:00", "AM", "Home", "ISM", "&nbsp", "");
									insert_row("4:45", "PM", "Away", "JIS", "&nbsp", ""); ?>
								</tbody>
							</table>
							
							<p class="date" style='padding-top: 20px;'>Saturday, April 14</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php insert_row("9:45", "AM", "Home", "SAS", "&nbsp", ""); ?>
								</tbody>
							</table>
						</div>
						
						<!-- ----------- GIRLS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;margin-left:60px;'>
							<p style="text-align: center;font-family: Arial;font-weight: bold;color: #333;">Girls</p>
							<p class="date">&nbsp</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php insert_row("11:45", "AM", "Away", "ISKL", "Gamecast", "http://iasas.xyk2maker.com/gamecast/");
									insert_row("6:30", "PM", "Home", "ISM", "Gamecast", "http://iasas.xyk2maker.com/gamecast/"); ?>
								</tbody>
							</table>
							
							<p class="date" style='padding-top: 20px;'>&nbsp</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php insert_row("11:30", "AM", "Away", "SAS", "Gamecast", "http://iasas.xyk2maker.com/gamecast/");
									insert_row("3:00", "PM", "Home", "ISB", "Gamecast", "http://iasas.xyk2maker.com/gamecast/"); ?>
								</tbody>
							</table>
							
							<p class="date" style='padding-top: 20px;'>&nbsp</p>
							<table border="0" id='schedule_table'>
								<tbody>
									<?php insert_row("8:00", "AM", "Away", "JIS", "Gamecast", "http://iasas.xyk2maker.com/gamecast/"); ?>
								</tbody>
							</table>
						</div>
					</div>

					<div id="sas" class="content" style="">
						<img src="../img/blank.gif" style='background:url(../img/sprite_combined_compressed.png) 0 -50px;' class="team_tab_sprite">
						<h2 style="font-family: leagueGothicRegular;font-size: 30px;color: #444;padding-top: 13px;padding-left: 5px;float: left;">Singapore American School</h2>
					</div>
				
					<div id="isb" class="content" style="">
						<img src="../img/blank.gif" style='background:url(../img/sprite_combined_compressed.png) 0 -100px;' class="team_tab_sprite">
						<h2 style="font-family: leagueGothicRegular;font-size: 30px;color: #444;padding-top: 13px;padding-left: 5px;float: left;">International School of Bangkok</h2>
					</div>
					<div id="ism" class="content" style="">
						<img src="../img/blank.gif" style='background:url(../img/sprite_combined_compressed.png) 0 -150px;' class="team_tab_sprite">
						<h2 style="font-family: leagueGothicRegular;font-size: 30px;color: #444;padding-top: 13px;padding-left: 5px;float: left;">International School of Manila</h2>
						</div>
					<div id="iskl" class="content" style="">
						<img src="../img/blank.gif" style='background:url(../img/sprite_combined_compressed.png) 0 -200px;' class="team_tab_sprite">
						<h2 style="font-family: leagueGothicRegular;font-size: 30px;color: #444;padding-top: 13px;padding-left: 5px;float: left;">International School of Kuala Lumpur</h2>
						</div>
					<div id="jis" class="content" style="">
						<img src="../img/blank.gif" style='background:url(../img/sprite_combined_compressed.png) 0 -250px;' class="team_tab_sprite">
						<h2 style="font-family: leagueGothicRegular;font-size: 30px;color: #444;padding-top: 13px;padding-left: 5px;float: left;">Jakarta International School</h2>
						</div>
				
				
		
			</div>

		</div>
	</body>
</html>
