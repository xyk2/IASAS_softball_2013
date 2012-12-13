<!DOCTYPE html>

<html lang="en-US" style="height: 100%;">
	<head>
		<title>IASAS Softball 2013</title>
		<meta http-equiv="content-type" content="text/html; charset=us-ascii">
		<link rel="shortcut icon" href="img/favicon.png"/>

		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="/js/slide/css/global.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="/js/slide/js/slides.min.jquery.js"></script>
		
		<script>
			$(function(){
				$('#slides').slides({
					preload: true,
					preloadImage: '/js/slide/img/loading.gif',
					play: 7000,
					pause: 2500,
					hoverPause: true,
					animationStart: function(current){
						$('.caption').animate({
							bottom:-35
						},100);
						if (window.console && console.log) {
							// example return of current slide number
							console.log('animationStart on slide: ', current);
						};
					},
					animationComplete: function(current){
						$('.caption').animate({
							bottom:0
						},200);
						if (window.console && console.log) {
							// example return of current slide number
							console.log('animationComplete on slide: ', current);
						};
					},
					slidesLoaded: function() {
						$('.caption').animate({
							bottom:0
						},200);
					}
				});
			});
		</script>
	</head>


	<body>
		<?php include_once("js/analytics.php") ?>
		<?php include ("header.php"); ?>
		
		<div id='container'>
			<?php include ("navigation.php"); ?>
	

			<div id="slides">
				<div class="slides_container">
					<div class="slide">
						<img src="front_page_images/2_compressed.jpg" width="1000" height="400" alt="Slide 1">
					</div>
					<div class="slide">
						<img src="front_page_images/1_compressed.jpg" width="1000" height="400" alt="Slide 2">
					</div>
					<div class="slide">
						<img src="front_page_images/3_compressed.jpg" width="1000" height="400" alt="Slide 3">
						<div class="caption">
							<p>The SF Giants win the 2010 World Series.</p>
						</div>
					</div>
				</div>
			</div>
			
			<h4 style="clear: left;float: left;font-family: leagueGothicRegular;font-size: 26px;color: maroon;margin-left: 15px;"></h4>
			
		</div>
	</body>
</html>

