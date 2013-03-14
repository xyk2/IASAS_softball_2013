<!DOCTYPE html>
<html lang="en-US" style="height: 100%;">
	<head>
		<title>Standings - IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="./standings_style.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="../js/tabify/jquery.tabify.js"></script>
		<script async src="../js/ga.js"></script>
		<script type="text/javascript">				
			$(document).ready(function () {
				$('#menu').tabify();
			});	
		</script>
		<style type="text/css" media="screen">
			.menu { padding: 0; margin-top:10px; }
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
							background: rgba(255, 255, 255, 0.44);
}
			.table { float: left; 
						width: 920px; 
			}
		</style>
	</head>

	<body>		
		<?php include ("../header.php"); ?>

		<div id='container'>
			<?php include ("../navigation.php"); ?>
			<div style="width: 1000px;">
				<h2 style="font-family: leagueGothicRegular;color: rgba(0, 0, 0, 0.47);font-size: 40px;margin-left: 40px;margin-top: 10px;">
					Standings
				</h2>
				<div style='height:390px;width:920px;margin-left:auto;margin-right:auto;'>

					<ul id="menu" class="menu">
						<li class="active"><a href="#boys">Boys</a></li>
						<li><a href="#girls">Girls</a></li>
					</ul>
					<!-- BOYS -->
					<div id="boys" class="table">
						<div style='height: 358px;width: 920px;margin-left: auto;margin-right: auto;background: rgba(255, 255, 255, 0.34);'>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;" id="teams">
								<div class="column_data_one" style='font-size: 20px;'>Boys</div>
								<div class='column_data_one' style='color:navy'>TAS</div>
								<div class='column_data_one' style='color:maroon'>SAS</div>
								<div class='column_data_one'>ISB</div>
								<div class='column_data_one' style='color:green'>ISM</div>
								<div class='column_data_one' style='color: #B8B000'>ISKL</div>
								<div class='column_data_one' style='color: #00526D'>JIS</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">TAS</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">SAS</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">ISB</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">ISM</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">ISKL</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">JIS</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
							</div>	
							
							<div style="width: 50px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">W</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>	
							<div style="width: 50px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">L</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>	
							<div style="width:50px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">D</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>	
							<div style="width:70px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">Points</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>	
						</div>
					</div>
					
					<!-- GIRLS -->
					<div id="girls" class="table">
						<div style='height: 358px;width: 920px;margin-left: auto;margin-right: auto;background: rgba(255, 255, 255, 0.34);'>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;" id="teams">
								<div class="column_data_one"  style='font-size: 20px;'>Girls</div>
								<div class='column_data_one' style='color:navy'>TAS</div>
								<div class='column_data_one' style='color:maroon'>SAS</div>
								<div class='column_data_one'>ISB</div>
								<div class='column_data_one' style='color:green'>ISM</div>
								<div class='column_data_one' style='color: #B8B000'>ISKL</div>
								<div class='column_data_one' style='color: #00526D'>JIS</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">TAS</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">SAS</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">ISB</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">ISM</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">ISKL</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
								<div class='column_data'>-</div>
							</div>
							<div style="width: 100px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">JIS</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data' style='background-color: rgba(0, 0, 0, 0.07)'></div>
							</div>	
							
							<div style="width: 50px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">W</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>	
							<div style="width: 50px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">L</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>	
							<div style="width:50px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">D</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>	
							<div style="width:70px;float: left;font-family: leagueGothicRegular;color: #444;font-size: 26px;">
								<div class="column_data">Points</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
								<div class='column_data'>-</div>
							</div>	
						</div>
					</div>
				</div>
				
				
				
				
				
			</div>

		</div>
		<script src="../js/prefixfree.min.js"></script>
	</body>
</html>
