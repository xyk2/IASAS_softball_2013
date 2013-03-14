<!DOCTYPE HTML>

<html lang="en-US"> 
<head>

	<title>IASAS Softball 2013</title>
	<link rel="shortcut icon" href="img/favicon.png"/>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	
	<script src="js/jquery-1.3.2.min.js"></script>
	<script src="js/jquery.qtip-1.0.0-rc3.min.js"></script>
	<script src="js/loadxmldoc.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.1/swfobject.js"></script>
	<script src="js/field_view.js"></script>
	<script src="js/innings.js"></script>

  	<link rel="stylesheet" type="text/css" href="style_home.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="style_tabs.css" media="all"/>
  	<link rel="stylesheet" type="text/css" href="style_pbp.css" media="all"/>


		<script> <!-- all XML -->
		
			function update_tip() {
				if(first.dataset.taken == '0') {
					$('#first').qtip("hide"); // hide and disable
					$('#first').qtip("disable");
				} else {
					$('#first').qtip("enable"); // enable, update
					$('#first').qtip('api').updateContent(document.getElementById('first').alt);
				}
				if(second.dataset.taken == '0') {
					$('#second').qtip("hide"); // hide and disable
					$('#second').qtip("disable");
				} else {
					$('#second').qtip("enable"); // enable, update
					$('#second').qtip('api').updateContent(document.getElementById('second').alt);
				}
				if(third.dataset.taken == '0') {
					$('#third').qtip("hide"); // hide and disable
					$('#third').qtip("disable");
				} else {
					$('#third').qtip("enable"); // enable, update
					$('#third').qtip('api').updateContent(document.getElementById('third').alt);
				}
			}
			
			function get_data() {
							old = new Date().getMilliseconds();
							console.log(old);

					xmlDoc = loadXMLDoc('iasas_softball.xml'+'?'+Math.random());
					x = xmlDoc.getElementsByTagName("runs");
					runs_two = xmlDoc.getElementsByTagName("runs_two");
					strikes = xmlDoc.getElementsByTagName("strikes");
					balls = xmlDoc.getElementsByTagName("balls");
					outs = xmlDoc.getElementsByTagName("outs");
					runners = xmlDoc.getElementsByTagName("runner");
					inning_number = xmlDoc.getElementsByTagName("inning_number"); // PBP title header
					inning_half = xmlDoc.getElementsByTagName("inning_half");
					batter = xmlDoc.getElementsByTagName("batter");
					batter_meta = xmlDoc.getElementsByTagName("batter_meta");
					
					for(i = 0;i<x.length;i++) {
						document.getElementById('boxscore').rows[1].cells[i+2].innerHTML = x[i].childNodes[0].nodeValue;
					}
					for(i = 0;i<runs_two.length;i++) {
						document.getElementById('boxscore').rows[2].cells[i+2].innerHTML = runs_two[i].childNodes[0].nodeValue;
					}					
					document.getElementById('boxscore').rows[1].cells[9].innerHTML = xmlDoc.getElementsByTagName("cumulative_runs")[0].childNodes[0].nodeValue; // team 1 
					document.getElementById('boxscore').rows[1].cells[10].innerHTML = xmlDoc.getElementsByTagName("cumulative_hits")[0].childNodes[0].nodeValue; // team 1 
					document.getElementById('boxscore').rows[1].cells[11].innerHTML = xmlDoc.getElementsByTagName("cumulative_errors")[0].childNodes[0].nodeValue; // team 1 

					document.getElementById('boxscore').rows[2].cells[9].innerHTML = xmlDoc.getElementsByTagName("cumulative_runs_two")[0].childNodes[0].nodeValue; // team 2
					document.getElementById('boxscore').rows[2].cells[10].innerHTML = xmlDoc.getElementsByTagName("cumulative_hits_two")[0].childNodes[0].nodeValue; // team 2
					document.getElementById('boxscore').rows[2].cells[11].innerHTML = xmlDoc.getElementsByTagName("cumulative_errors_two")[0].childNodes[0].nodeValue; // team 2					
					
					document.getElementById('first').alt = runners[0].childNodes[0].nodeValue; // runner qtips
					if(runners[0].childNodes[0].nodeValue=='null') {
						first.setAttribute("data-taken", "0"); } else { first.setAttribute("data-taken", "1"); } //data-taken attribute for qtip display
					document.getElementById('second').alt = runners[1].childNodes[0].nodeValue;
					if(runners[1].childNodes[0].nodeValue=='null') {
						second.setAttribute("data-taken", "0"); } else { second.setAttribute("data-taken", "1"); }
					document.getElementById('third').alt = runners[2].childNodes[0].nodeValue;
					if(runners[2].childNodes[0].nodeValue=='null') {
						third.setAttribute("data-taken", "0"); } else { third.setAttribute("data-taken", "1"); }
						
					var bases_graphic_url = first.dataset.taken + second.dataset.taken + third.dataset.taken; // automatic bases graphic selection based on runners
					document.getElementById('bases').style.background = "url(img/"+bases_graphic_url+".png) 0px -0px"; // bases graphic
					
					
					switch(strikes[0].childNodes[0].nodeValue) {
						case '0': document.getElementById('strikes').style.background = "url(img/strikes_sprite.png) 0px -0px"; break;
						case '1': document.getElementById('strikes').style.background = "url(img/strikes_sprite.png) 0px -15px"; break;
						case '2': document.getElementById('strikes').style.background = "url(img/strikes_sprite.png) 0px -30px"; break;
						case '3': document.getElementById('strikes').style.background = "url(img/strikes_sprite.png) 0px -45px"; break;
					}
					switch(balls[0].childNodes[0].nodeValue) {
						case '0': document.getElementById('balls').style.background = "url(img/balls_sprite.png) 0px -0px"; break;
						case '1': document.getElementById('balls').style.background = "url(img/balls_sprite.png) 0px -15px"; break;
						case '2': document.getElementById('balls').style.background = "url(img/balls_sprite.png) 0px -30px"; break;
						case '3': document.getElementById('balls').style.background = "url(img/balls_sprite.png) 0px -45px"; break;
						case '4': document.getElementById('balls').style.background = "url(img/balls_sprite.png) 0px -60px"; break;
					}
					switch(outs[0].childNodes[0].nodeValue) {
						case '0': document.getElementById('outs').style.background = "url(img/out_sprite.png) 0px -0px"; break;
						case '1': document.getElementById('outs').style.background = "url(img/out_sprite.png) 0px -15px"; break;
						case '2': document.getElementById('outs').style.background = "url(img/out_sprite.png) 0px -30px"; break;
						case '3': document.getElementById('outs').style.background = "url(img/out_sprite.png) 0px -45px"; break;
					}
					var string = balls[0].childNodes[0].nodeValue + '-' + strikes[0].childNodes[0].nodeValue + '&nbsp;&nbsp;' + outs[0].childNodes[0].nodeValue + ' OUT'; // 0-0 1 OUT counts for play-by-play pbp
					document.getElementById('pbp_count_outs').innerHTML = string;
					
					
					switch(inning_number[0].childNodes[0].nodeValue) { // PBP title header & batter
						case '4':case '5':case '6':case '7':case '8':case '9':
							var pbp_inning_string = inning_number[0].childNodes[0].nodeValue + 'th'; break;
						case '1':
							var pbp_inning_string = inning_number[0].childNodes[0].nodeValue + 'st'; break;
						case '2':
							var pbp_inning_string = inning_number[0].childNodes[0].nodeValue + 'nd'; break;
						case '3':
							var pbp_inning_string = inning_number[0].childNodes[0].nodeValue + 'rd'; break;
					}
					switch(inning_half[0].childNodes[0].nodeValue) {
						case '0':
							pbp_inning_string = 'Top ' + pbp_inning_string; break;
						case '1':
							pbp_inning_string = 'Bottom ' + pbp_inning_string; break;
					}
					$('#pbp_inning').html(pbp_inning_string);
					$('#pbp_batter').html(batter[0].childNodes[0].nodeValue + ' ' + batter_meta[0].childNodes[0].nodeValue);
					update_inning(parseInt(inning_half[0].childNodes[0].nodeValue), parseInt(inning_number[0].childNodes[0].nodeValue));//innings canvas
				console.log(new Date().getMilliseconds());
				console.log('\n');
				}
		</script>
		<script type="text/javascript">
        $(function(){
            // Fast and dirty
            $('article.tabs section > h3').click(function(){
                $('article.tabs section').removeClass('current');
                $(this)
                .closest('section').addClass('current');
            });
        });
    </script>
</head>

<body style='width:650px;margin-left:auto;margin-right:auto;margin-top:20px;background: url(http://i.imgur.com/lksgQ.png);'>
	<h1 style="float: left;">
		TAS
		<span style="font-size: 35px;"> vs </span>
		SAS
		<span style="font-size: 20px;">3:30pm - Upper Field</span>
	</h1>
	<div style="width: 110px;position: absolute;margin-left: 543px;margin-top: 30px;">
		<img style="float: left;" src="img/ajaxloading.gif">
    <p style="font-family:Arial;font-size:11px;font-weight:bold;position: relative;line-height: 16px;margin: 0;padding-left: 20px;color: #c8c8c8;">UPDATING LIVE</p>
	</div>
	<img src="img/underline.png" style="height: 3px;width: 650px;position: relative;top: -5px;">
	
	<div style='margin-top:5px;height:86px;margin-bottom:15px;'>
		<table id='boxscore' class="boxscore" border="0" cellspacing="0">
			<tr style="font-weight:bold;">
				<th></th>
				<th style=" width: auto; padding: 0px;"></th>
				<th>1</th>
				<th>2</th>
				<th>3</th>
				<th>4</th>
				<th>5</th>
				<th>6</th>
				<th>7</th>
				<th style="	padding-left:25px;padding-right:5px;width: 0px;">R</th>
				<th style="	padding-left:5px;padding-right:5px;width: 0px;">H</th>
				<th style="	padding-left:5px;padding-right:20px;width: 0px;">E</th>
			</tr>
			
			<tr>
				<th style="padding-right: 8px;"><img src="img/school_TAS.png" width="30px" height="30px" style="" /></th>
				<th style="width: auto;padding: 0px;text-align: left;padding-right: 10px;">
					<p style="font-weight: bold;font-size: 14px;text-align: right;">TAS</p>
					<p style="font-size: 12px;text-align: right;">0-0</p>
				</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th style="width: 0px;padding-left:25px;padding-right:5px;color:#2C4D83;font-weight:bold;">0</th>
				<th style="	width: 0px;padding-left:5px;padding-right:5px;">0</th>
				<th style="	width: 0px;padding-left:5px;padding-right:20px;">0</th>
			</tr>
			
			<tr>
				<th style=" padding-right: 8px;"><img src="img/school_SAS.png" width="30px" height="30px" style="" /></th>
				<th style=" width: auto; padding: 0px; text-align: left; padding-right: 10px;">
					<p style=" font-weight: bold; font-size: 14px; text-align: right;">SAS</p>
					<p style=" font-size: 12px; text-align: right;">0-0</p>
				</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th>0</th>
				<th style="	width: 0px;padding-left:25px;padding-right:5px;color:#2C4D83;font-weight:bold;">0</th>
				<th style="	width: 0px;padding-left:5px;padding-right:5px;">0</th>
				<th style="	width: 0px;padding-left:5px;padding-right:20px;">0</th>
			</tr>
		</table>
		
		

		<div style="padding-top:15px;-webkit-touch-callout: none;-webkit-user-select: none;-moz-user-select: none;">
			<table class="bso" border="0" cellspacing="0">
			<tr><th>B</th></tr>
			<tr><th>S</th></tr>
			<tr><th>O</th></tr>
			</table>

			<div id='notification' style='width:auto;float:left'>
				<img id='balls' class="balls" src="img/blank.png" width="0" height="0" />
				</br>
				<img id='strikes' class="strikes" src="img/blank.png" width="0" height="0" />
				</br>
				<img id='outs' class="outs" src="img/blank.png" width="0" height="0"/>
			</div>
		</div>
		
		<div style='margin-left:10px;float:left;'>
			<img src='img/blank.png' id='bases' class='bases' usemap="#basesmap">
			<map name="basesmap" id='basesmap'>
				<area shape="poly" coords="0,22,10,12,11,12,21,22,11,32,10,32" alt='Arias, J.' id='third' data-taken='0' />
				<area shape="poly" coords="12,10,22,0,23,0,33,10,23,20,22,20" alt='Posey, B.' id='second' data-taken='0' />
				<area shape="poly" coords="24,22,34,12,35,12,45,22,35,32,34,32" alt='Casilla, S.' id='first' data-taken='0' />

			</map>
			<div>
				<canvas id="innings" width="21" height="15" style="margin-left: 12px; margin-top: 8px;border:0px solid #d3d3d3;"></canvas>
			</div>
		</div>
	</div>
	
	
	
	<article class="tabs">
        <section class="current">
            <h3>Lineups</h3>
            <div style='padding-top:10px;'>
				<table class='lineup' style='margin-left:40px;'>
				<tr>
					<td style='text-align:center;font-size:18px;font-weight:bold;'>TAS</td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td style='text-align:right;width:auto;'>28</td>
								<td style='padding-left:8px;'>Posey, B.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>16</td>
								<td style='padding-left:8px;'>Pagan, A.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>19</td>
								<td style='padding-left:8px;'>Scutaro, M.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>8</td>
								<td style='padding-left:8px;'>Pence, H.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>48</td>
								<td style='padding-left:8px;'>Sandoval, P.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>38</td>
								<td style='padding-left:8px;'>Wilson, B.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>8</td>
								<td style='padding-left:8px;'>Belt, B.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>40</td>
								<td style='padding-left:8px;'>Bumgarner, M.</td>
							</tr>
							<tr>
								<td  style='text-align:right;width:auto;'>35</td>
								<td style='padding-left:8px;'>Crawford, B.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>18</td>
								<td style='padding-left:8px;'>Krukow, M.</td>
							</tr>
						</table>
					</td>
				</tr>
				</table>
				
			<table class='lineup' style='margin-left:60px;'>
				<tr>
					<td style='text-align:center;font-size:18px;font-weight:bold;'>SAS</td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td style='text-align:right;width:auto;'>28</td>
								<td style='padding-left:8px;'>Posey, B.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>16</td>
								<td style='padding-left:8px;'>Pagan, A.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>19</td>
								<td style='padding-left:8px;'>Scutaro, M.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>8</td>
								<td style='padding-left:8px;'>Pence, H.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>48</td>
								<td style='padding-left:8px;'>Sandoval, P.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>38</td>
								<td style='padding-left:8px;'>Wilson, B.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>8</td>
								<td style='padding-left:8px;'>Belt, B.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>40</td>
								<td style='padding-left:8px;'>Bumgarner, M.</td>
							</tr>
							<tr>
								<td  style='text-align:right;width:auto;'>35</td>
								<td style='padding-left:8px;'>Crawford, B.</td>
							</tr>
							<tr>
								<td style='text-align:right;width:auto;'>18</td>
								<td style='padding-left:8px;'>Krukow, M.</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
				
            </div>
        </section>
        <section class="">
            <h3>Field View</h3>
            <div style='padding-top:10px;'>
                <!-- <img width="300" height="auto" src="img/field_view.png" style="padding-left: 50px;padding-top: 10px;padding-top: 10;"> -->
				<canvas id="field_view" width="330" height="300" style="padding-left: 50px;padding-top: 10px;border:0px solid #d3d3d3;"></canvas>

            </div>
        </section>
        <section class="">
            <h3>Video Highlights</h3>
			<div style="padding-top:10px;overflow-y:scroll;">
				<div  rel='modal' data-link='http://www.youtube.com/watch?v=ae34qjaGOao' class="video" style="width:365px;height:auto;padding:10px;margin-left:10px;">
						<a href='#'>
							<table style='width:365px;font-family:Arial;' border="0">
								<tr>
									<td style='height:auto;width:115px;'>
										<img src="http://i3.ytimg.com/vi/ae34qjaGOao/mqdefault.jpg" width="115" height="auto">
									</td>
									<td style='vertical-align:middle;'>
										<h5 style='font-size:14px;padding-left:10px;color:black;'>The San Francisco Giants win the 2010 World Series</h5>
									</td>
								</tr>
							</table>
						</a>
				</div>
				<div data-link='http://www.youtube.com/watch?v=ae34qjaGOao' class="video" style="width:365px;height:auto;padding:10px;margin-left:10px;margin-top:88px;">
						<a href='#'>
							<table style='width:365px;font-family:Arial;' border="0">
								<tr>
									<td style='height:auto;width:115px;'>
										<img src="http://i3.ytimg.com/vi/ae34qjaGOao/mqdefault.jpg" width="115" height="auto">
									</td>
									<td style='vertical-align:middle;'>
										<h5 style='font-size:14px;padding-left:10px;color:black;'>The San Francisco Giants win the 2010 World Series</h5>
									</td>
								</tr>
							</table>
						</a>
				</div>
				<div data-link='http://www.youtube.com/watch?v=ae34qjaGOao' class="video" style="width:365px;height:auto;padding:10px;margin-left:10px;margin-top:176px;">
						<a href='#'>
							<table style='width:365px;font-family:Arial;' border="0">
								<tr>
									<td style='height:auto;width:115px;'>
										<img src="http://i3.ytimg.com/vi/ae34qjaGOao/mqdefault.jpg" width="115" height="auto">
									</td>
									<td style='vertical-align:middle;'>
										<h5 style='font-size:14px;padding-left:10px;color:black;'>The San Francisco Giants win the 2010 World Series</h5>
									</td>
								</tr>
							</table>
						</a>
				</div>
				<div data-link='http://www.youtube.com/watch?v=ae34qjaGOao' class="video" style="width:365px;height:auto;padding:10px;margin-left:10px;margin-top:264px;">
						<a href='#'>
							<table style='width:365px;font-family:Arial;' border="0">
								<tr>
									<td style='height:auto;width:115px;'>
										<img src="http://i3.ytimg.com/vi/ae34qjaGOao/mqdefault.jpg" width="115" height="auto">
									</td>
									<td style='vertical-align:middle;'>
										<h5 style='font-size:14px;padding-left:10px;color:black;'>The San Francisco Giants win the 2010 World Series</h5>
									</td>
								</tr>
							</table>
						</a>
				</div>
				
			</div>
			
        </section>
        <section class="">
            <h3>PITCHf/x</h3>
            <div style='padding-top:10px;'>
                <p>PITCHf/x</p>
            </div>
        </section>
    </article>
	

	<div style="background-color:#EEEEEE;margin-top: 21px;float: left;margin-left: 30px;width:220px;height:310px;border-top-left-radius: 10px;border-top-radius: 10px;border-top-right-radius: 10px;">
		<div class="video" style="font-family: Arial;font-size: 15px;font-weight: bold;color: #666666;padding: 6px;text-align: center;background: #ddd;border-top-left-radius: 10px;border-top-right-radius: 10px;">
			<p id='pbp_inning'>Top 1st</p>
			<p id='pbp_count_outs'>2-2&nbsp;&nbsp;1 OUT</p>
		</div>
			<div style="padding: 5px;height: 42px;background-color: #e7e7e7;border-top: 1px solid #CCC;border-bottom: 1px solid #CCC;">
				<img src="http://iasas.xyk2maker.com/img/school_TAS.png" width="34" height="34" style="padding:3px; border: 1px solid #ADADAD;float: left;background-color: #EEE;">
				<p style="font-size: 11px;font-family: arial;float: left;padding-left: 5px;padding-top: 5px;">
					BATTING
				</p>
				<br>
				<p id='pbp_batter' style="font-size: 14px;font-family: arial;float: left;padding-left: 5px;padding-top: 3px;font-weight: bold;color: #333;">
					Pence, H. #8 RF
				</p>
			</div>
			<div style="height: 214px;overflow-y: scroll;"> <!-- Play-by-play div -->
				<div class='pbp' id='pbp_10' style='display:none'>
					<p class='pbp_number'>10</p>
					<p class='pbp_text'></p>
				</div>
				<div class='pbp' id='pbp_9' style='display:none'>
					<p class='pbp_number'>9</p>
					<p class='pbp_text'></p>
				</div>
				<div class='pbp' id='pbp_8' style='display:none'> 
					<p class='pbp_number'>8</p>
					<p class='pbp_text'></p>
				</div>
				
				<div class='pbp' id='pbp_7' style='display:none'> 
					<p class='pbp_number'>7</p>
					<p class='pbp_text'></p>
				</div>
				<div class='pbp' id='pbp_6' style='display:none'> 
					<p class='pbp_number'>6</p>
					<p class='pbp_text'></p>
				</div>
				<div class='pbp' id='pbp_5' style='display:none'> 
					<p class='pbp_number'>5</p>
					<p class='pbp_text'></p>
				</div>
				<div class='pbp' id='pbp_4' style='display:none'> 
					<p class='pbp_number'>4</p>
					<p class='pbp_text'></p>
				</div>
				<div class='pbp' id='pbp_3' style='display:none'> <!-- second batter -->
					<p class='pbp_number'>3</p>
					<p class='pbp_text'></p>
				</div>
				
				<div class='pbp' id='pbp_2' style='display:none'> <!-- second batter -->
					<p class='pbp_number'>2</p>
					<p class='pbp_text'></p>
				</div>
				<div class='pbp' id='pbp_1' style='display:none'> <!-- first batter -->
					<p class='pbp_number'>1</p>
					<p class='pbp_text'></p>
				</div>
			</div>
	</div>

	<script> <!-- update play by play -->
		function update_play_by_play() {
			//$('#pbp_1').hide('fast');
			//$('#pbp_1').show('fast');
			xmlDoc = loadXMLDoc('xml/play_by_play.xml'+'?'+Math.random());
			var inning_words = ["0","one","two","three","four","five","six","seven","eight","nine","ten"];
			var half_words = ["t","b"];
			var pbp_tagName = inning_words[parseInt(inning_number[0].childNodes[0].nodeValue)]+'_play_';
			pbp_tagName = pbp_tagName + half_words[parseInt(inning_half[0].childNodes[0].nodeValue)];

			play = xmlDoc.getElementsByTagName(pbp_tagName);
			for(i=0; i<play.length; i++) {
				var selector = '#pbp_'+(i+1)+' .pbp_text';
				if(play[i].childNodes[0].nodeValue == 'null') {
					$('#pbp_'+(i+1)).hide();
				} else {
					$('#pbp_'+(i+1)).show('fast');
				}
				$(selector).html(play[i].childNodes[0].nodeValue);
			}
			//$('#pbp_1 .pbp_text').html('#pbp_'+(0+1)+' .pbp_text');
		
		}
	</script>
	
	
	<script type="text/javascript"> <!-- tooltips -->
$(document).ready(function() {
   $("#basesmap > area").each(function()
   {
      $(this).qtip(
      {
         content: {text:$(this).attr('alt')}, // Use the ALT attribute of the area map
         style: {
			fontFamily: 'Arial',
			background: '#F06E65',
			color: '#FEFEFE',
            name: 'dark', // Give it the preset dark style
            border: { width: 0, radius: 0 },
            tip: { corner: 'bottomMiddle', color: '#F06E65'}, // Apply a tip at the default tooltip corner
			textAlign: 'center'
         },
		 
	     position: {
		  corner: {
			target: 'topMiddle',
			tooltip: 'bottomMiddle' 
		  }
		}
      });
   });
   
  })
</script>

	<script type="text/javascript"> <!-- 2500ms reload -->
			get_data();
			update_play_by_play();
			setInterval(function() {get_data(); update_tip();update_play_by_play();}, 2500);
	</script>
	

	 <script type="text/javascript"> <!-- youtube video highlights -->
	
/* $(document).ready(function()
{
   // Use each method to gain access to all youtube links
   $('div[data-link*="youtube."]').each(function()
   {
      // Grab video ID from the url
      var videoID = $(this).attr('data-link').match(/watch\?v=(.+)+/);
      videoID = videoID[1];
      // Create content using url as base
      $(this).qtip(
      {
         // Create content DIV with unique ID for swfObject replacement
         content: '<div id="youtube-embed-'+videoID+'">You need Flash player 8+ to view this video.</div>',
         position: {
            corner: {
               tooltip: 'bottomMiddle', // ...and position it center of the screen
               target: 'topMiddle' // ...and position it center of the screen
            }
         },
         show: {
            when: 'click', // Show it on click...
            solo: true // ...and hide all others when its shown
         },
         hide: 'unfocus', // Hide it when inactive...
         style: {
            width: 431,
            height: 239,
            padding: 0,
            tip: true,
            name: 'dark'
         },
         api: {
            onRender: function()
            {
               // Setup video paramters
               var params = { allowScriptAccess: 'always', allowfullScreen: 'false' };
               var attrs = { id: 'youtube-video-'+videoID };

               // Embed the youtube video using SWFObject script
               swfobject.embedSWF('http://www.youtube.com/v/'+videoID+'&autohide=1&autoplay=1&modestbranding=1&rel=0&showinfo=0&enablejsapi=1&playerapiid=youtube-api-'+videoID,
                                 'youtube-embed-'+videoID, '425', '240', '8', null, null, params, attrs);
            },

            onHide: function(){
               // Pause the vide when hidden
               var playerAPI = this.elements.content.find('#youtube-video-'+videoID).get(0);
               if(playerAPI && playerAPI.pauseVideo) playerAPI.pauseVideo();
            }
         }
      }
      ).attr('href', '#');
   });
}); */
</script>
	
	
	<script> <!-- cookies -->
		function setCookie(c_name,value,exdays) {
			var exdate=new Date();
			exdate.setDate(exdate.getDate() + exdays);
			var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
			document.cookie=c_name + "=" + c_value;
		}
		function getCookie(c_name) {
			var i,x,y,ARRcookies=document.cookie.split(";");
			for (i=0;i<ARRcookies.length;i++)
			{
			  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
			  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
			  x=x.replace(/^\s+|\s+$/g,"");
			  if (x==c_name)
				{
				return unescape(y);
				}
			  }
		}
	</script>
	
	<script type="text/javascript"> <!-- notification -->
		function close_notification() {
			$('#notification').qtip("hide"); // hide notification
			setCookie('notification','1', 1);
			
		}
		var cookieValue = getCookie('notification');
		
		if(cookieValue!='1') {
		$(document).ready(function() {
			$('#notification').qtip(
			{
			content: "<p style='font-size:12px;margin-top:5px;'>Hover over the bases for information</p><a href='#' onclick='close_notification()' style='color:#CCCCCC;'><p style='font-size:10px;margin-left: 175px;'>close</p></a>", // Use the ALT attribute of the area map
			style: {
				width:220,
				fontFamily: 'Arial',
				background: '#888888',
				color: '#FEFEFE',
				name: 'dark', // Give it the preset dark style
				border: { width: 0, radius: 0 },
				tip: { corner: 'topRight', color: '#FFFFFF'}, // Apply a tip at the default tooltip corner
				textAlign: 'center'
			},
			show: {
				when: false, // Don't specify a show event
				ready: true // Show the tooltip when ready
			},
				   hide: false, // Don't specify a hide event
			 position: {
			  corner: {
				target: 'bottomLeft',
				tooltip: 'topMiddle' 
			  }
			}
		  });
		})
		}
</script>

<script type="text/javascript">
$(document).ready(function()
{
   $('div[rel="modal"]').qtip(
   {
      content: {
         text: '<iframe width="582" height="327" src="http://www.youtube.com/embed/9jWeuuCmFg8?html5=1&autohide=1&autoplay=1&modestbranding=1&rel=0&showinfo=0"></iframe>'
      },
      position: {
         target: $(document.body), // Position it via the document body...
         corner: 'center' // ...at the center of the viewport
      },
      show: {
         when: 'click', // Show it on click
         solo: true // And hide all other tooltips
      },
      hide: 'unfocus',
      style: {
         width: 600,
		 height: 325,
		 background: '#000000',
		 padding: '0px',
         border: {
            width: 9,
            radius: 9,
            color: '#666666'
         },
         name: 'light'
      },
      api: {
         beforeShow: function()
         {
			this.elements.content.html('<iframe width="582" height="327" src="http://www.youtube.com/embed/9jWeuuCmFg8?html5=1&autohide=1&autoplay=1&modestbranding=1&rel=0&showinfo=0"></iframe>')
            $('#qtip-blanket').fadeIn(this.options.show.effect.length);
         },
         beforeHide: function()
         {
            $('#qtip-blanket').fadeOut(this.options.hide.effect.length);
         },
		  onHide: function(){ this.elements.content.empty() },

      }
   });

   // Create the modal backdrop on document load so all modal tooltips can use it
   $('<div id="qtip-blanket">')
      .css({
         position: 'absolute',
         top: $(document).scrollTop(), // Use document scrollTop so it's on-screen even if the window is scrolled
         left: 0,
         height: $(document).height(), // Span the full document height...
         width: '100%', // ...and full width

         opacity: 0.7, // Make it slightly transparent
         backgroundColor: 'black',
         zIndex: 5000  // Make sure the zIndex is below 6000 to keep it below tooltips!
      })
      .appendTo(document.body) // Append to the document body
      .hide(); // Hide it initially
});
</script>

	 <!-- <button onclick="window.open('http://iasas.xyk2maker.com','winname','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=685,height=560');">DEBUG</button> -->


</body>

</html>