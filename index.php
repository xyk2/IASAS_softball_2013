<!DOCTYPE html>
<html lang="en-US" style="height: 100%;">
	<head>
		<!--[if lt IE 9]><script src="dist/html5shiv.js"></script><![endif]-->
		<title>IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="./img/favicon.png"/>
		
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link rel="stylesheet" type="text/css" href="./bootstrap_css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./js/slides.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="./js/jquery.slides.min.js"></script>

		<script async src="./js/ga.js"></script>
		<script>
			$(function() {
			  $('#slides').slidesjs({
				width: 1000,
				height: 400,
				navigation: false
			  });
			});
		</script>
		

	</head>


	<body style='height:980px;'>
		<?php include ("./header.php"); ?>
		
		<div id='container' style='height:820px'>
			<?php include ("./navigation.php"); ?>


			<div class="slides_container">
				<div id="slides" style=''>
					<img src="./front_page_images/5_compressed.jpg" width="1000" height="400" alt="">
					<?php 
					$filenames = glob('./front_page_images/*.jpg');
					$timestamps = array();
					foreach($filenames as $name) array_push($timestamps, filectime($name)); //add timestamp of each file to $timestamps array
					array_multisort($timestamps, SORT_DESC, $filenames, SORT_DESC);
					
					$num_of_photos = 5;
					if(count($filenames) < 5) $num_of_photos = count($filenames);
					
					for($x = 0; $x < $num_of_photos; $x++) {
						echo "<img src='{$filenames[$x]}' width='1000' height='400' alt=''>
";
					}
					?>
					<img src="./front_page_images/8_mini.jpg" width="1000" height="400" alt="">
				</div>
			</div>

			<?php 
			function insert_block($home, $away, $label_text, $label_type, $epoch, $override_label_text="", $override_label_type="") {
				$current_epoch = time();
				if($epoch < $current_epoch) {
					$label_type = "label-success";
					$label_text = "In Progress";
				}
				if($current_epoch - $epoch > 5400) { 
					$label_type = "";
					$label_text = "Completed";
				}
				if(strlen($override_label_type) > 0) $label_type = $override_label_type;					
				if(strlen($override_label_text) > 0) $label_text = $override_label_text;
				if($home == 'Final' || $home == 'Consolation' || $away == 'Final' || $away == 'Consolation') $vs = ""; else $vs = 'vs';
				echo "<div class='internal_score_block'>
				<p>{$home} <span>{$vs}</span> {$away}</p>
				<span class='label {$label_type}'>{$label_text}</span>
				</div>
				";
			}
			?>
			<h4 id='day_of_week'><?php if(time() < 1365699600) echo "THURSDAY"; if(time() > 1365699600 && time < 1365786000) echo "FRIDAY"; if(time() > 1365786000) echo "SATURDAY";?></h4>
			<div id='scoreboard' style='float:left'>
				<h5>Boys</h5>
				<div class='internal_score_block' style='height:20px;'>
					<div class='listen_watch_follow' style='margin-left:35px;'>
						<a href='./stream/'>
							<i style='background-position: -432px -48px;'></i>
							<p class='p_text'>Watch</p>
						</a>
					</div>
					<div class='listen_watch_follow'>
						<a href='https://www.gamechanger.io/g/iasasboyssoftball13'>
							<i style='background-image:url(./img/gc.png);'></i>
							<p class='p_text'>Follow</p>
						</a>
					</div>
				</div>				<?php
				if(time() < 1365699600) { // if it is not Friday 1AM yet, show Thursday games
					insert_block("JIS", "ISM", "8:30 AM", "label-info", 1365640200, "", "");
					insert_block("ISKL", "TAS", "10:15 AM", "label-info", 1365646500, "", "");
					insert_block("SAS", "ISB", "12:00 PM", "label-info", 1365652800, "", "");
					insert_block("ISM", "ISKL", "2:00 PM", "label-info", 1365660000, "", "");
					insert_block("ISB", "JIS", "3:45 PM", "label-info", 1365666300, "", "");
					insert_block("TAS", "SAS", "5:30 PM", "label-info", 1365672600, "", "");
				}
				if(time() > 1365699600 && time < 1365786000) { // between 1AM Friday and 1AM Saturday, show Friday games
					insert_block("ISM", "ISB", "8:00 AM", "label-info", 1365724800, "", "");
					insert_block("ISKL", "SAS", "9:45 AM", "label-info", 1365731100, "", "");
					insert_block("JIS", "TAS", "11:30 AM", "label-info", 1365737400, "", "");
					insert_block("ISB", "ISKL", "2:00 PM", "label-info", 1365746400, "", "");
					insert_block("TAS", "ISM", "3:45 PM", "label-info", 1365752700, "", "");
					insert_block("SAS", "JIS", "5:30 PM", "label-info", 1365759000, "", "");					
				}
				
				if(time() > 1365786000) { // Show saturday games after 1AM Saturday
					insert_block("ISB", "TAS", "8:00 AM", "label-info", 1365811200, "", "");
					insert_block("ISM", "SAS", "9:45 AM", "label-info", 1365817500, "", "");
					insert_block("JIS", "ISKL", "11:30 AM", "label-info", 1365823800, "", "");
					insert_block("Consolation", "", "2:30 PM", "label-info", 1365834600, "", "");
					insert_block("Final", "", "6:00 PM", "label-info", 1365847200, "", "");
				}
				?>
				
				
			</div>
			
			<div id='scoreboard' style='float:left;'>
				<h5>Girls</h5>
				<div class='internal_score_block' style='height:20px;'>
					<div class='listen_watch_follow'>
						<a href='#'>
							<i style='background-position: -336px -24px;'></i>
							<p class='p_text'>Listen</p>
						</a>
					</div>
					<div class='listen_watch_follow'>
						<a href='./stream/'>
							<i style='background-position: -432px -48px;'></i>
							<p class='p_text'>Watch</p>
						</a>
					</div>
					<div class='listen_watch_follow'>
						<a href='https://www.gamechanger.io/g/iasasgirlssoftball13'>
							<i style='background-image:url(./img/gc.png);'></i>
							<p class='p_text'>Follow</p>
						</a>
					</div>
				</div>
				<?php
				if(time() < 1365699600) { // if it is not Friday 1AM yet, show Thursday games
					insert_block("ISKL", "SAS", "8:30 AM", "label-info", 1365640200, "", "");
					insert_block("JIS", "ISB", "10:15 AM", "label-info", 1365646500, "", "");
					insert_block("ISM", "TAS", "12:00 PM", "label-info", 1365652800, "", "");
					insert_block("SAS", "JIS", "2:00 PM", "label-info", 1365660000, "", "");
					insert_block("TAS", "ISKL", "3:45 PM", "label-info", 1365666300, "", "");
					insert_block("ISB", "ISM", "5:30 PM", "label-info", 1365672600, "", "");
				}
				if(time() > 1365699600 && time < 1365786000) { // between 1AM Friday and 1AM Saturday, show Friday games
					insert_block("TAS", "SAS", "8:00 AM", "label-info", 1365724800, "", "");
					insert_block("ISM", "JIS", "9:45 AM", "label-info", 1365731100, "", "");
					insert_block("ISKL", "ISB", "11:30 AM", "label-info", 1365737400, "", "");
					insert_block("SAS", "ISM", "2:00 PM", "label-info", 1365746400, "", "");
					insert_block("JIS", "ISKL", "3:45 PM", "label-info", 1365752700, "", "");
					insert_block("ISB", "TAS", "5:30 PM", "label-info", 1365759000, "", "");					
				}
				
				if(time() > 1365786000) { // Show saturday games after 1AM Saturday
					insert_block("ISKL", "ISM", "8:00 AM", "label-info", 1365811200, "", "");
					insert_block("TAS", "JIS", "9:45 AM", "label-info", 1365817500, "", "");
					insert_block("SAS", "ISB", "11:30 AM", "label-info", 1365823800, "", "");
					insert_block("Consolation", "", "2:30 PM", "label-info", 1365834600, "", "");
					insert_block("Final", "", "4:15 PM", "label-info", 1365840900, "", "");
				}
				?>		
			</div>
			<div style='float:left; margin-left:20px;margin-top:-15px;'>
				<a width='450' height="320" style='display:none' class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=lang%3Aen+iasas+OR+%40tpe_tigers+OR+%40sas_ad+OR+%40isbpanthers+OR+%40iasas+OR+%23iasas" data-widget-id="312204248442077185">Tweets about "lang:en iasas OR @tpe_tigers OR @sas_ad OR @isbpanthers OR #iasas -katwolf21"</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		


		<script src="./js/prefixfree.min.js"></script>
	</body>
</html>

