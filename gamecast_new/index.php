<!DOCTYPE HTML>

<html lang="en-US"> 
<head>

	<title>IASAS Softball 2013</title>
	<link rel="shortcut icon" href="img/favicon.png"/>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	
	<script src="./js/jquery-1.3.2.min.js"></script>
	<script src="./js/jquery.qtip-1.0.0-rc3.min.js"></script>
	<script src="./js/loadxmldoc.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.1/swfobject.js"></script>
	<script src="./js/field_view.js"></script>
	<script src="./js/innings.js"></script>

  	<link rel="stylesheet" type="text/css" href="./style_home.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="./style_tabs.css" media="all"/>
  	<link rel="stylesheet" type="text/css" href="./style_pbp.css" media="all"/>


		<script> <!-- all XML -->

			
			function get_data() {
				old = new Date().getMilliseconds();
				console.log(old);
				console.log(new Date().getMilliseconds());
				console.log('\n');
				}
				
		</script>
		<script type="text/javascript">
        $(function(){
            $('article.tabs section > h3').click(function(){
                $('article.tabs section').removeClass('current');
                $(this)
                .closest('section').addClass('current');
            });
        });
    </script>
</head>

<body style='width:650px;margin-left:auto;margin-right:auto;margin-top:20px;background: url(./img/background.png);'>
	<h1 style="float: left;">
		TAS
		<span style="font-size: 35px;"> vs </span>
		SAS
		<span style="font-size: 20px;">3:30pm - Upper Field</span>
	</h1>
	<div style="width: 110px;position: absolute;margin-left: 543px;margin-top: 30px;">
		<img style="float: left;" src="./img/ajaxloading.gif">
    <p style="font-family:Arial;font-size:11px;font-weight:bold;position: relative;line-height: 16px;margin: 0;padding-left: 20px;color: #c8c8c8;">UPDATING LIVE</p>
	</div>
	<img src="./img/underline.png" style="height: 3px;width: 650px;position: relative;top: -5px;">
	
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
			
			<tr id='team_one'>
				<th style="padding-right: 8px;"><img src="./img/school_TAS.png" width="30px" height="30px" style="" /></th>
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
			
			<tr id='team_two'>
				<th style=" padding-right: 8px;"><img src="./img/school_SAS.png" width="30px" height="30px" style="" /></th>
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
				<img id='balls' class="balls" src="./img/blank.png" width="0" height="0" />
				</br>
				<img id='strikes' class="strikes" src="./img/blank.png" width="0" height="0" />
				</br>
				<img id='outs' class="outs" src="./img/blank.png" width="0" height="0"/>
			</div>
		</div>
		
		<div style='margin-left:10px;float:left;'>
			<img src='./img/blank.png' id='bases' class='bases' usemap="#basesmap">
			<map name="basesmap" id='basesmap'>
				<area shape="poly" coords="24,22,34,12,35,12,45,22,35,32,34,32" alt='runner' id='first' data-taken='0' />
				<area shape="poly" coords="12,10,22,0,23,0,33,10,23,20,22,20" alt='runner' id='second' data-taken='0' />
				<area shape="poly" coords="0,22,10,12,11,12,21,22,11,32,10,32" alt='runner' id='third' data-taken='0' />

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
				<img src="../img/school_TAS.png" id='pbp_image' width="34" height="34" style="padding:3px; border: 1px solid #ADADAD;float: left;background-color: #EEE;">
				<p style="font-size: 11px;font-family: arial;float: left;padding-left: 5px;padding-top: 5px;">
					BATTING
				</p>
				<br>
				<p id='pbp_batter' style="font-size: 14px;font-family: arial;float: left;padding-left: 5px;padding-top: 3px;font-weight: bold;color: #333;">
					Batter #1 P
				</p>
			</div>
			<div style="height: 214px;overflow-y: scroll;"> <!-- Play-by-play div -->
				<div class='pbp' id='pbp_14' style='display:none'>
					<p class='pbp_number'>14</p>
					<p class='pbp_text'></p>
				</div>				
				<div class='pbp' id='pbp_13' style='display:none'>
					<p class='pbp_number'>13</p>
					<p class='pbp_text'></p>
				</div>
				<div class='pbp' id='pbp_12' style='display:none'>
					<p class='pbp_number'>12</p>
					<p class='pbp_text'></p>
				</div>
				<div class='pbp' id='pbp_11' style='display:none'>
					<p class='pbp_number'>11</p>
					<p class='pbp_text'></p>
				</div>
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
	
	
	<script type="text/javascript"> <!-- Bases tooltips -->
$(document).ready(function() {
      $('#first').qtip(
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
		},
		api: {
			beforeShow: function() {
				var content = $('#first');
				if(content.length > 0) {
					this.updateContent(content.attr('alt'));
					return true;
				} else {
					return false;
				}
			}
		}
      });

      $('#second').qtip(
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
		},
		api: {
			beforeShow: function() {
				var content = $('#second');
				if(content.length > 0) {
					this.updateContent(content.attr('alt'));
					return true;
				} else {
					return false;
				}
			}
		}
      });
	  
	 
	 
      $('#third').qtip(
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
		},
		api: {
			beforeShow: function() {
				var content = $('#third');
				if(content.length > 0) {
					this.updateContent(content.attr('alt'));
					return true;
				} else {
					return false;
				}
			}
		}
      });	
  })
</script>

	 <script type="text/javascript"> <!-- youtube video highlights FLASH -->
	
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
				tip: { corner: 'topRight', color: 'rgba(0,0,0,0)'}, // Apply a tip at the default tooltip corner
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

	<script type="text/javascript"> <!-- HTML5 video -->
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

	<script>
			function update_tip() {
				if($('#first').attr('alt') == 'null') {
					$('#first').qtip("hide"); // hide and disable
					$('#first').qtip("disable");
				} else {
					$('#first').qtip("enable"); // enable, update
				}
				if($('#second').attr('alt') == 'null') {
					$('#second').qtip("hide"); // hide and disable
					$('#second').qtip("disable");
				} else {
					$('#second').qtip("enable"); // enable, update
				}
				if($('#third').attr('alt') == 'null') {
					$('#third').qtip("hide"); // hide and disable
					$('#third').qtip("disable");
				} else {
					$('#third').qtip("enable"); // enable, update
				}
			}

			var oldUpdate = 0;
			function check_update() {
				$.get("update"+'?'+Math.random(), function(data){
					console.log(data);
					if(data != oldUpdate) {
						oldUpdate = data;
						console.log('NEW UPDATE');
						update_all();
						update_tip();
					}
				});
			}
				
			function update_all(){
				$.ajax({
					type: "GET",
					url: "./iasas_softball.xml"+'?'+Math.random(),
					dataType: "xml",
					success: function(xml) {
						var val = 2;
						$(xml).find("runs").each(function() { // TEAM ONE
							//console.log($(this).text());
							$('#team_one th:eq(' + val++ + ')').html($(this).text());
						});
						val = 2;
						$(xml).find("runs_two").each(function() { // TEAM TWO
							//console.log($(this).text());
							$('#team_two th:eq(' + val++ + ')').html($(this).text());
						});
						
						/* RUNS */
						$('#team_one th:eq(9)').html($(xml).find("cumulative_runs").text());
						$('#team_two th:eq(9)').html($(xml).find("cumulative_runs_two").text());

						/* HITS */
						$('#team_one th:eq(10)').html($(xml).find("cumulative_hits").text());
						$('#team_two th:eq(10)').html($(xml).find("cumulative_hits_two").text());
						
						/* ERRORS */
						$('#team_one th:eq(11)').html($(xml).find("cumulative_errors").text());
						$('#team_two th:eq(11)').html($(xml).find("cumulative_errors_two").text());		

						/* BALLS */
						switch($(xml).find('realtime balls').text()) {
							case '0': $("#balls").css('background-position', '0px -0px'); break;
							case '1': $("#balls").css('background-position', '0px -15px'); break;
							case '2': $("#balls").css('background-position', '0px -30px'); break;
							case '3': $("#balls").css('background-position', '0px -45px'); break;
							case '4': $("#balls").css('background-position', '0px -60px'); break;
						}
						
						/* STRIKES */
						switch($(xml).find('realtime strikes').text()) {
							case '0': $("#strikes").css('background-position', '0px -0px'); break;
							case '1': $("#strikes").css('background-position', '0px -15px'); break;
							case '2': $("#strikes").css('background-position', '0px -30px'); break;
							case '3': $("#strikes").css('background-position', '0px -45px'); break;
						}	
						
						/* OUTS */
						switch($(xml).find('realtime outs').text()) {
							case '0': $("#outs").css('background-position', '0px -0px'); break;
							case '1': $("#outs").css('background-position', '0px -15px'); break;
							case '2': $("#outs").css('background-position', '0px -30px'); break;
							case '3': $("#outs").css('background-position', '0px -45px'); break;
						}	

						/* BASES QTIP */
						$("#first").attr('alt', $(xml).find('runner:eq(0)').text());
						$("#second").attr('alt', $(xml).find('runner:eq(1)').text());	
						$("#third").attr('alt', $(xml).find('runner:eq(2)').text());
					
						/* BASES GRAPHIC */
						var bases_graphic_url = '';
						if($("#first").attr('alt') == 'null') bases_graphic_url += '0'; else bases_graphic_url += '1';
						if($("#second").attr('alt') == 'null') bases_graphic_url += '0'; else bases_graphic_url += '1';
						if($("#third").attr('alt') == 'null') bases_graphic_url += '0'; else bases_graphic_url += '1';
						$('#bases').css('background', "url(img/"+bases_graphic_url+".png) 0px -0px");
						
						/* INNINGS CANVAS and PBP */
						update_inning($(xml).find('realtime inning_half').text(),  $(xml).find('realtime inning_number').text());
						
						switch($(xml).find('realtime inning_number').text()) {
						case '4':case '5':case '6':case '7':case '8':case '9': var pbp_inning_string = $(xml).find('realtime inning_number').text() + 'th'; break;
						case '1': var pbp_inning_string = $(xml).find('realtime inning_number').text() + 'st'; break;
						case '2': var pbp_inning_string = $(xml).find('realtime inning_number').text() + 'nd'; break;
						case '3': var pbp_inning_string = $(xml).find('realtime inning_number').text() + 'rd'; break;
						}
						switch($(xml).find('realtime inning_half').text()) {
						case '0': pbp_inning_string = 'Top ' + pbp_inning_string; break;
						case '1': pbp_inning_string = 'Bottom ' + pbp_inning_string; break;
						}
						$("#pbp_inning").html(pbp_inning_string);
						
						/* PBP COUNT and BATTER */
						var string = $(xml).find('realtime balls').text() + '-' + $(xml).find('realtime strikes').text() + '&nbsp;&nbsp;' + $(xml).find('realtime outs').text() + ' OUT'; // 0-0 1 OUT counts for play-by-play pbp
						$('#pbp_count_outs').html(string);
						$('#pbp_batter').html($(xml).find('batter').text() + ' ' + $(xml).find('batter_meta').text());
											
						if($(xml).find('realtime inning_half').text() == '0') {
							$("#pbp_image").attr('src', '../img/school_'+$(xml).find('teams team_one').text()+'.png');
						} else {
							$("#pbp_image").attr('src', '../img/school_'+$(xml).find('teams team_two').text()+'.png');
						}

						/* PLAY-BY-PLAY */
						$.ajax({
							type: "GET",
							url: "./xml/play_by_play.xml"+'?'+Math.random(),
							dataType: "xml",
							success: function(pbp) {
								var inning_words = ["0","one","two","three","four","five","six","seven","eight","nine","ten"];
								var half_words = ["t","b"];
								var pbp_tagName = inning_words[parseInt($(xml).find('realtime inning_number').text())]+'_';
								pbp_tagName = pbp_tagName + half_words[parseInt($(xml).find('realtime inning_half').text())];								
								
								for(i=0; i<$(pbp).find(pbp_tagName).length; i++) {
									var selector = '#pbp_'+(i+1)+' .pbp_text';
									var xml_selector = pbp_tagName + ':eq(' + i + ')';
									if($(pbp).find(xml_selector).text() == 'null') {
										$('#pbp_'+(i+1)).hide();
									} else {
										$('#pbp_'+(i+1)).show('fast');
									}
									$(selector).html($(pbp).find(xml_selector).text());
								}
							}
						});
			
			
					}
				});
				


								
			};
			

				

	</script>

	<script type="text/javascript"> <!-- 2500ms reload -->
		$(document).ready(function(){
			check_update();
			update_all();
			//update_tip();
			setInterval(function() {check_update();}, 2500);
		});
	</script>
	
</body>

</html>