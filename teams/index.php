<!DOCTYPE html>

<html lang="en-US" style="height: 100%;">
	<head>
		<title>Teams - IASAS Softball 2013</title>
		<meta http-equiv="content-type" content="text/html; charset=us-ascii">
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="/style.css">
		<link rel="stylesheet" type="text/css" href="teams_style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="../js/tabify/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
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
		<script type="text/javascript" src="/js/jquery.leanModal.min.js"></script>

		<script type="text/javascript">
			$(function() {
    			$('a[rel*=leanModal]').leanModal({ top : 200 });		
			});
		</script>
	</head>

	<body>		
		<?php include_once("../js/analytics.php") ?>
		<?php include ("../header.php"); ?>

		<div id='container' style='min-height: 724px;'>
			<?php include ("../navigation.php"); ?>
			<div style="width: 1000px;">
				<h2 style="font-family: leagueGothicRegular;color: rgba(0, 0, 0, 0.47);font-size: 40px;margin-left: 40px;margin-top: 10px;float:left;">
					Teams
				</h2>
				<div style='float:left'>
					<ul id="menu" class="menu">
						<li class="active"><a href="#tas" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="/img/blank.gif" class="tab_sprite" style="background: url(/img/sprite_combined_compressed.png) -50px 0px;">TAS</a></li>
						<li><a href="#sas" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="/img/blank.gif" class='tab_sprite' style="background: url(/img/sprite_combined_compressed.png) -50px -22px;">SAS</a></li>
						<li><a href="#isb" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="/img/blank.gif" class='tab_sprite' style="background: url(/img/sprite_combined_compressed.png) -50px -44px;">ISB</a></li>
						<li><a href="#ism" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="/img/blank.gif" class='tab_sprite' style="background: url(/img/sprite_combined_compressed.png) -50px -66px;">ISM</a></li>
						<li><a href="#iskl" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="/img/blank.gif" class='tab_sprite' style="background: url(/img/sprite_combined_compressed.png) -50px -88px;">ISKL</a></li>
						<li><a href="#jis" style='line-height: 22px;padding-top: 5px;padding-bottom: 5px;'><img src="/img/blank.gif" class='tab_sprite' style="background: url(/img/sprite_combined_compressed.png) -50px -110px;">JIS</a></li>
					</ul>
				
					<!-- TAS --> 
					<div id="tas" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="/img/blank.gif" style='background:url(/img/sprite_combined_compressed.png) 0 0;' class="team_tab_sprite">
							<h2 class="school_title">Taipei American School</h2>
						</div>
						<div class='boys'>
							<a rel='leanModal' href='#TAS_boys'><img src='photos/TAS_boys.jpg' style='width:419px;'></a>
							<?php include("rosters/TAS_boys.php"); ?>
						</div>
						
						<div class='girls'>
							<a rel='leanModal' href='#TAS_boys'><img src='photos/TAS_boys.jpg' style='width:419px;'></a>
							<?php include("rosters/TAS_boys.php"); ?>
						</div>
					</div>
					
					<!-- SAS -->
					<div id="sas" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="/img/blank.gif" style='background:url(/img/sprite_combined_compressed.png) 0 -50px;' class="team_tab_sprite">
							<h2 class="school_title">Singapore American School</h2>
						</div>
					</div>
					
					<!-- ISB -->				
					<div id="isb" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="/img/blank.gif" style='background:url(/img/sprite_combined_compressed.png) 0 -100px;' class="team_tab_sprite">
							<h2 class="school_title">International School of Bangkok</h2>
						</div>
					</div>
					
					<!-- ISM -->										
					<div id="ism" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="/img/blank.gif" style='background:url(/img/sprite_combined_compressed.png) 0 -150px;' class="team_tab_sprite">
							<h2 class="school_title">International School of Manila</h2>
						</div>
					</div>
					
					<!-- ISKL -->	
					<div id="iskl" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="/img/blank.gif" style='background:url(/img/sprite_combined_compressed.png) 0 -200px;' class="team_tab_sprite">
							<h2 class="school_title">International School of Kuala Lumpur</h2>
						</div>
					</div>
					
					<!-- JIS -->	
					<div id="jis" class="content" style="">
						<div style="width:100%; height:60px; clear:both">
							<img src="/img/blank.gif" style='background:url(/img/sprite_combined_compressed.png) 0 -250px;' class="team_tab_sprite">
							<h2 class="school_title">Jakarta International School</h2>
						</div>
					</div>
				
				
		
			</div>

		</div>
		
		<div id="TAS_boys" style='width: 700px;display:none;'>
			<img src='photos/TAS_boys.jpg' style='width:700px;border-radius: 5px;-moz-border-radius: 5px;-webkit-border-radius: 5px;'>
		</div>
	</body>
</html>
