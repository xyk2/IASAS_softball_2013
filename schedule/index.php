<!DOCTYPE html>

<html lang="en-US" style="height: 100%;">
	<head>
		<title>Schedule - IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="./schedule_style.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="../js/tabify/jquery.tabify.js"></script>
		<script src="../js/worldclock.js"></script>
		<script async src="../js/ga.js"></script>
		<script type="text/javascript">				
			$(document).ready(function () {
				$('#menu').tabify();
			});	
		</script>

		<?php include("./functions.php"); ?>

	</head>

	<body>		
		<?php include ("../header.php"); ?>

		<div id='container' style='height:1000px;'>
			<?php include ("../navigation.php"); ?>
			<div style="width:1000px;">
				<h2 id='subpage_h2' style='float:left;'>Schedule</h2>
				<h3 style="font-family: Arial;font-size: 11px;color: rgba(0, 0, 0, 0.73);float: right;margin-right: 40px;margin-top: 15px;text-align:right;">Current time in Taipei - <span id="Taipei">00:00</span></br>The home team is listed first.</h3>

				<div style='float:left'>
					<ul id="menu" class="menu">
						<li class="active"><a href="#all" style='padding-left:20px;padding-right:20px;'>All</a></li>
						<li><a href="#tas"><img src="../img/blank.gif" id='tas_22px' class="team_tab_sprite">TAS</a></li>
						<li><a href="#sas"><img src="../img/blank.gif" id='sas_22px' class="team_tab_sprite">SAS</a></li>
						<li><a href="#isb"><img src="../img/blank.gif" id='isb_22px' class="team_tab_sprite">ISB</a></li>
						<li><a href="#ism"><img src="../img/blank.gif" id='ism_22px' class="team_tab_sprite">ISM</a></li>
						<li><a href="#iskl"><img src="../img/blank.gif" id='iskl_22px' class="team_tab_sprite">ISKL</a></li>
						<li><a href="#jis"><img src="../img/blank.gif" id='jis_22px' class="team_tab_sprite">JIS</a></li>
						<li style='float:right;'><a href="#finals" style='margin-right:0;'><img src="../img/blank.gif" id='champ_22px' class="team_tab_sprite">Finals and Consolation</a></li>
					</ul>
					
					<div id="all" class="content">
						<div style='float:left;width:410px;margin-top:10px;'>
							<p id="boys_and_girls">Boys</p>
							<p class="date" style='padding-top:0;'>Thursday, April 11</p>
							<table border="0" class='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:30", "AM", "JIS", "ISM", "", "");
									insert_row_all("10:15", "AM", "ISKL", "TAS", "", ""); 
									insert_row_all("12:00", "PM", "SAS", "ISB", "", "");
									insert_row_all("2:00", "PM", "ISM", "ISKL", "", "");
									insert_row_all("3:45", "PM", "ISB", "JIS", "", "");
									insert_row_all("5:30", "PM", "TAS", "SAS", "", ""); 
									?>
								</tbody>
							</table>
							<p class="date">Friday, April 12</p>
							<table border="0" class='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:00", "AM", "ISM", "ISB", "", "");
									insert_row_all("9:45", "AM", "ISKL", "SAS", "", ""); 
									insert_row_all("11:30", "AM", "JIS", "TAS", "", "");
									insert_row_all("2:00", "PM", "ISB", "ISKL", "", "");
									insert_row_all("3:45", "PM", "TAS", "ISM", "", "");
									insert_row_all("5:30", "PM", "SAS", "JIS", "", "");  
									?>
								</tbody>
							</table>
							<p class="date">Saturday, April 13</p>
							<table border="0" class='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:00", "AM", "ISB", "TAS", "", "");
									insert_row_all("9:45", "AM", "ISM", "SAS", "", "");
									insert_row_all("11:30", "AM", "JIS", "ISKL", "", "");  
									?>
								</tbody>
							</table>
							<p class="date" style='font-size: 16px;width: 875px;text-align: center;margin-bottom: 0;'>Saturday, April 13 - Championship Round</p>
							<table border="0" class='schedule_table'>
								<tbody>
									<?php 
									insert_championship("2:30", "PM", "Consolation", "", "");
									insert_championship("6:00", "PM", "Final", "", "");
									?>
								</tbody>
							</table>
						</div>
						
						<!-------------- GIRLS ALL --------------->
						<div style='float:left;width:410px;margin-top:10px;margin-left:60px;'>
							<p id="boys_and_girls">Girls</p>
							<p class="date" style='padding-top:0;'>&nbsp</p>
							<table border="0" class='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:30", "AM", "ISKL", "SAS", "", "");
									insert_row_all("10:15", "AM", "JIS", "ISB", "", ""); 
									insert_row_all("12:00", "PM", "ISM", "TAS", "", "");
									insert_row_all("2:00", "PM", "SAS", "JIS", "", "");
									insert_row_all("3:45", "PM", "TAS", "ISKL", "", "");
									insert_row_all("5:30", "PM", "ISB", "ISM", "", ""); 
									?>
								</tbody>
							</table>
							<p class="date">&nbsp</p>
							<table border="0" class='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:00", "AM", "TAS", "SAS", "", "");
									insert_row_all("9:45", "AM", "ISM", "JIS", "", ""); 
									insert_row_all("11:30", "AM", "ISKL", "ISB", "", "");
									insert_row_all("2:00", "PM", "SAS", "ISM", "", "");
									insert_row_all("3:45", "PM", "JIS", "ISKL", "", "");
									insert_row_all("5:30", "PM", "ISB", "TAS", "", "");  
									?>
								</tbody>
							</table>
							<p class="date">&nbsp</p>
							<table border="0" class='schedule_table'>
								<tbody>
									<?php 
									insert_row_all("8:00", "AM", "ISKL", "ISM", "", "");
									insert_row_all("9:45", "AM", "TAS", "JIS", "", "");
									insert_row_all("11:30", "AM", "SAS", "ISB", "", "");  
									?>
								</tbody>
							</table>
							<p class="date" style='margin-bottom:4px;'>&nbsp</p>
							<table border="0" class='schedule_table'>
								<tbody>
									<?php 
									insert_championship("2:30", "PM", "Consolation", "", "");
									insert_championship("4:15", "PM", "Final", "", "");
									?>
								</tbody>
							</table>
						</div>
					</div>
					
					<!-- ------- TAS ------------ --> 
					<div id="tas" class="content" style="">
						<div id='school_name_container'>
							<img src="../img/blank.gif" id='tas_50px' class="team_tab_sprite">
							<h3>Taipei American School</h3>
						</div>
						<!-- ------------ BOYS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;'>
							<p id="boys_and_girls">Boys</p>
							<p class="date" style='padding-top:0;'>Thursday, April 11</p>
							<?php start_table();
							insert_row("10:15", "AM", "Away", "ISKL", "", "");
							insert_row("5:30", "PM", "Home", "SAS", "", ""); 
							end_table();?>
							
							<p class="date">Friday, April 12</p>
							<?php start_table();
							insert_row("11:30", "AM", "Away", "JIS", "", "");
							insert_row("3:45", "PM", "Home", "ISM", "", ""); 
							end_table();?>

							<p class="date">Saturday, April 13</p>
							<?php start_table();
							insert_row("8:00", "AM", "Away", "ISB", "", ""); 
							end_table();?>
						</div>
						
						<!-- ----------- GIRLS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;margin-left:60px;'>
							<p id="boys_and_girls">Girls</p>
							<p class="date" style='padding-top:0;'>&nbsp</p>
							<?php start_table();
							insert_row("12:00", "PM", "Away", "ISM", "", "");
							insert_row("3:45", "PM", "Home", "ISKL", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("8:00", "AM", "Home", "SAS", "", "");
							insert_row("5:30", "PM", "Away", "ISB", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("9:45", "AM", "Home", "JIS", "", ""); 
							end_table();?>
						</div>
					</div>

					<div id="sas" class="content" style="">
						<div id='school_name_container'>
							<img src="../img/blank.gif" id='sas_50px' class="team_tab_sprite">
							<h3>Singapore American School</h3>
						</div>
						<!-- ------------ BOYS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;'>
							<p id="boys_and_girls">Boys</p>
							<p class="date" style='padding-top:0;'>Thursday, April 11</p>
							<?php start_table();
							insert_row("12:00", "PM", "Home", "ISB", "", "");
							insert_row("5:30", "PM", "Away", "TAS", "", ""); 
							end_table();?>
							
							<p class="date">Friday, April 12</p>
							<?php start_table();
							insert_row("9:45", "AM", "Away", "ISKL", "", "");
							insert_row("5:30", "PM", "Home", "JIS", "", ""); 
							end_table();?>

							<p class="date">Saturday, April 13</p>
							<?php start_table();
							insert_row("9:45", "AM", "Away", "ISM", "", ""); 
							end_table();?>
						</div>
						
						<!-- ----------- GIRLS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;margin-left:60px;'>
							<p id="boys_and_girls">Girls</p>
							<p class="date" style='padding-top:0;'>&nbsp</p>
							<?php start_table();
							insert_row("8:30", "AM", "Away", "ISKL", "", "");
							insert_row("2:00", "PM", "Home", "JIS", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("8:00", "AM", "Away", "TAS", "", "");
							insert_row("2:00", "PM", "Home", "ISM", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("11:30", "AM", "Home", "ISB", "", ""); 
							end_table();?>
						</div>
					</div>
					
					<div id="isb" class="content" style="">
						<div id='school_name_container'>
							<img src="../img/blank.gif" id='isb_50px' class="team_tab_sprite">
							<h3>International School of Bangkok</h3>
						</div>
						<!-- ------------ BOYS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;'>
							<p id="boys_and_girls">Boys</p>
							<p class="date" style='padding-top:0;'>Thursday, April 11</p>
							<?php start_table();
							insert_row("12:00", "PM", "Away", "SAS", "", "");
							insert_row("3:45", "PM", "Home", "JIS", "", ""); 
							end_table();?>
							
							<p class="date">Friday, April 12</p>
							<?php start_table();
							insert_row("8:00", "AM", "Away", "ISM", "", "");
							insert_row("14:00", "PM", "Home", "ISKL", "", ""); 
							end_table();?>

							<p class="date">Saturday, April 13</p>
							<?php start_table();
							insert_row("8:00", "AM", "Home", "TAS", "", ""); 
							end_table();?>
						</div>
						
						<!-- ----------- GIRLS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;margin-left:60px;'>
							<p id="boys_and_girls">Girls</p>
							<p class="date" style='padding-top:0;'>&nbsp</p>
							<?php start_table();
							insert_row("10:15", "AM", "Away", "JIS", "", "");
							insert_row("17:30", "PM", "Home", "ISM", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("11:30", "AM", "Away", "ISKL", "", "");
							insert_row("17:30", "PM", "Home", "TAS", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("11:30", "AM", "Away", "SAS", "", ""); 
							end_table();?>
						</div>
					</div>
					
					<div id="ism" class="content" style="">
						<div id='school_name_container'>
							<img src="../img/blank.gif" id='ism_50px' class="team_tab_sprite">
							<h3>International School of Manila</h3>
						</div>
						<!-- ------------ BOYS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;'>
							<p id="boys_and_girls">Boys</p>
							<p class="date" style='padding-top:0;'>Thursday, April 11</p>
							<?php start_table();
							insert_row("8:30", "AM", "Away", "JIS", "", "");
							insert_row("2:00", "PM", "Home", "ISKL", "", ""); 
							end_table();?>
							
							<p class="date">Friday, April 12</p>
							<?php start_table();
							insert_row("8:00", "AM", "Home", "ISB", "", "");
							insert_row("3:45", "PM", "Away", "TAS", "", ""); 
							end_table();?>

							<p class="date">Saturday, April 13</p>
							<?php start_table();
							insert_row("9:45", "AM", "Home", "SAS", "", ""); 
							end_table();?>
						</div>
						
						<!-- ----------- GIRLS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;margin-left:60px;'>
							<p id="boys_and_girls">Girls</p>
							<p class="date" style='padding-top:0;'>&nbsp</p>
							<?php start_table();
							insert_row("12:00", "PM", "Home", "TAS", "", "");
							insert_row("17:30", "PM", "Away", "ISB", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("9:45", "AM", "Home", "JIS", "", "");
							insert_row("14:00", "PM", "Away", "SAS", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("8:00", "AM", "Away", "ISKL", "", ""); 
							end_table();?>
						</div>						
						
					</div>
					
					<div id="iskl" class="content" style="">
						<div id='school_name_container'>
							<img src="../img/blank.gif" id='iskl_50px' class="team_tab_sprite">
							<h3>International School of Kuala Lumpur</h3>
						</div>
						<!-- ------------ BOYS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;'>
							<p id="boys_and_girls">Boys</p>
							<p class="date" style='padding-top:0;'>Thursday, April 11</p>
							<?php start_table();
							insert_row("10:15", "AM", "Home", "TAS", "", "");
							insert_row("2:00", "PM", "Away", "ISM", "", ""); 
							end_table();?>
							
							<p class="date">Friday, April 12</p>
							<?php start_table();
							insert_row("9:45", "AM", "Home", "SAS", "", "");
							insert_row("2:00", "PM", "Away", "ISB", "", ""); 
							end_table();?>

							<p class="date">Saturday, April 13</p>
							<?php start_table();
							insert_row("11:30", "AM", "Away", "JIS", "", ""); 
							end_table();?>
						</div>
						
						<!-- ----------- GIRLS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;margin-left:60px;'>
							<p id="boys_and_girls">Girls</p>
							<p class="date" style='padding-top:0;'>&nbsp</p>
							<?php start_table();
							insert_row("8:30", "AM", "Home", "SAS", "", "");
							insert_row("15:45", "PM", "Away", "TAS", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("11:30", "AM", "Home", "ISB", "", "");
							insert_row("15:45", "PM", "Away", "JIS", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("8:00", "AM", "Home", "ISM", "", ""); 
							end_table();?>
						</div>
					</div>
					
					<div id="jis" class="content" style="">
						<div id='school_name_container'>
							<img src="../img/blank.gif" id='jis_50px' class="team_tab_sprite">
							<h3>Jakarta International School</h3>
						</div>
						<!-------------- BOYS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;'>
							<p id="boys_and_girls">Boys</p>
							<p class="date" style='padding-top:0;'>Thursday, April 11</p>
							<?php start_table();
							insert_row("8:30", "AM", "Home", "ISM", "", "");
							insert_row("3:45", "PM", "Away", "ISB", "", ""); 
							end_table();?>
							
							<p class="date">Friday, April 12</p>
							<?php start_table();
							insert_row("11:30", "AM", "Home", "TAS", "", "");
							insert_row("5:30", "PM", "Away", "SAS", "", ""); 
							end_table();?>

							<p class="date">Saturday, April 13</p>
							<?php start_table();
							insert_row("11:30", "AM", "Home", "ISKL", "", ""); 
							end_table();?>
						</div>
						<!-- ----------- GIRLS ------------- -->
						<div style='float:left;width:410px;margin-top:10px;margin-left:60px;'>
							<p id="boys_and_girls">Girls</p>
							<p class="date" style='padding-top:0;'>&nbsp</p>
							<?php start_table();
							insert_row("10:15", "AM", "Home", "ISB", "", "");
							insert_row("14:00", "PM", "Away", "SAS", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("9:45", "AM", "Away", "ISM", "", "");
							insert_row("15:45", "PM", "Home", "ISKL", "", ""); 
							end_table();?>
							
							<p class="date">&nbsp</p>
							<?php start_table();
							insert_row("9:45", "AM", "Away", "TAS", "", ""); 
							end_table();?>
						</div>
					</div>
					
					
					
					<div id="finals" class="content" style="">
						<div id='school_name_container'>
							<img src="../img/blank.gif" id='champ_50px' class="team_tab_sprite">
							<h3>Finals and Consolation</h3>
						</div>
						<img src="../img/iasas_logo_compressed.png" style="width: 200px;margin-left:345px;margin-bottom:5px;">
						<p style="text-align:center;font-family:leagueGothicRegular;font-size:28px;color:maroon;">Saturday, April 13</p>
						<p style="text-align: center;font-family: Arial;line-height:1.5;">Both consolation games will be played concurrently at 2:30 PM.</p>
						<p style="text-align: center;font-family: Arial;line-height:1.5;">The girls championship game will be at 4:15 PM and the boys at 6.</p>
					</div>
			</div>

		</div>
		<script src="../js/prefixfree.min.js"></script>
	</body>
</html>
