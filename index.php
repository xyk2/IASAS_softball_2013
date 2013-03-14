<!DOCTYPE html>
<html lang="en-US" style="height: 100%;">
	<head>
		<title>IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="./img/favicon.png"/>

		<link rel="stylesheet" type="text/css" href="./style.css">
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


	<body>
		<?php include ("./header.php"); ?>
		
		<div id='container'>
			<?php include ("./navigation.php"); ?>
	

			<div id="slides">
				<div class="slides_container">
					<div class="slide">
						<img src="./front_page_images/5_compressed.jpg" width="1000" height="400" alt="">
					</div>
					<div class="slide">
						<img src="./front_page_images/9_mini.jpg" width="1000" height="400" alt="">
					</div>
					<div class="slide">
						<img src="./front_page_images/8_mini.jpg" width="1000" height="400" alt="">
						<div class="caption">
							<p>JV Girls practice.</p>
						</div>
					</div>
				</div>
			</div>
			
			<h4 style="clear: left;float: left;font-family: leagueGothicRegular;font-size: 26px;color: maroon;margin-left: 15px;">THURSDAY</h4>
			
		</div>
		
		<script src="./js/prefixfree.min.js"></script>
	</body>
</html>

