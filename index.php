<!DOCTYPE html>
<html lang="en-US" style="height: 100%;">
	<head>
		<title>IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="./img/favicon.png"/>

		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./bootstrap_css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./js/slide/css/global.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="./js/slide/js/slides.min.jquery.js"></script>
		<script async src="./js/ga.js"></script>

		<script>
			$(function(){
				$('#slides').slides({preload: true, preloadImage: './js/slide/img/loading.gif', play: 7000, pause: 2500, hoverPause: true,
					animationStart: function(current){
						$('.caption').animate({bottom:-35},100);
					},
					animationComplete: function(current){
						$('.caption').animate({bottom:0},200);
					},
					slidesLoaded: function() {
						$('.caption').animate({bottom:0},200);
					}
				});
			});
		</script>
	</head>


	<body style='height:980px;'>
		<?php include ("./header.php"); ?>
		
		<div id='container' style='height:800px'>
			<?php include ("./navigation.php"); ?>


			<div id="slides">
				<div class="slides_container">
					<div class="slide">
						<img src="./front_page_images/5_compressed.jpg" width="1000" height="400" alt="">
					</div>
					<?php 
					$filenames = glob('./front_page_images/*.jpg');
					$timestamps = array();
					foreach($filenames as $name) array_push($timestamps, filectime($name)); //add timestamp of each file to $timestamps array
					array_multisort($timestamps, SORT_DESC, $filenames, SORT_DESC);
					
					$num_of_photos = 5;
					if(count($filenames) < 5) $num_of_photos = count($filenames);
					
					for($x = 0; $x < $num_of_photos; $x++) {
						echo "<div class='slide'>
							<img src='{$filenames[$x]}' width='1000' height='400' alt=''>
						</div>
						";
					}
					?>
					<div class="slide">
						<img src="./front_page_images/8_mini.jpg" width="1000" height="400" alt="">
						<div class="caption">
							<p>JV Girls practice.</p>
						</div>
					</div>
				</div>
			</div>

			
			<h4 style="clear: left;font-family: leagueGothicRegular;font-size: 26px;color: maroon;margin-left: 15px;">THURSDAY</h4>
			<div id='scoreboard' style='float:left'>
				<h5>Boys</h5>
				<div class='internal_score_block'>
					<p>JIS <span>vs</span> ISM</p>
					<span class="label label-info">9:15 AM</span>
				</div>
				<div class='internal_score_block'>
					<p>ISKL <span>vs</span> TAS</p>
					<span class="label label-info">11:00 AM</span>
				</div>		
				<div class='internal_score_block'>
					<p>SAS <span>vs</span> ISB</p>
					<span class="label label-info">12:45 PM</span>
				</div>		
				<div class='internal_score_block'>
					<p>ISM <span>vs</span> ISKL</p>
					<span class="label label-info">2:45 PM</span>
				</div>		
				<div class='internal_score_block'>
					<p>ISB <span>vs</span> JIS</p>
					<span class="label label-info">4:30 PM</span>
				</div>		
				<div class='internal_score_block'>
					<p>TAS <span>vs</span> SAS</p>
					<span class="label label-info">6:15 PM</span>
				</div>					
			</div>
			
			<div id='scoreboard' style='float:left;'>
				<h5>Girls</h5>
				<div class='internal_score_block'>
					<p>JIS <span>vs</span> ISM</p>
					<span class="label label-info">9:15 AM</span>
				</div>
				<div class='internal_score_block'>
					<p>ISKL <span>vs</span> TAS</p>
					<span class="label label-info">11:00 AM</span>
				</div>		
				<div class='internal_score_block'>
					<p>SAS <span>vs</span> ISB</p>
					<span class="label label-info">12:45 PM</span>
				</div>		
				<div class='internal_score_block'>
					<p>ISM <span>vs</span> ISKL</p>
					<span class="label label-info">2:45 PM</span>
				</div>		
				<div class='internal_score_block'>
					<p>ISB <span>vs</span> JIS</p>
					<span class="label label-info">4:30 PM</span>
				</div>		
				<div class='internal_score_block'>
					<p>TAS <span>vs</span> SAS</p>
					<span class="label label-info">6:15 PM</span>
				</div>					
			</div>
			<div style='float:left; margin-left:20px;'>
				<a width='450' style='display:none' class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=lang%3Aen+iasas+OR+%40tpe_tigers+OR+%40sas_ad+OR+%40isbpanthers+OR+%23iasas" data-widget-id="312204248442077185">Tweets about "lang:en iasas OR @tpe_tigers OR @sas_ad OR @isbpanthers OR #iasas"</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		

		
		<script src="./js/prefixfree.min.js"></script>
	</body>
</html>

