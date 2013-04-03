<!DOCTYPE html>
<html lang="en-US" style="height: 100%;">
	<head>
		<title>Standings - IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="./standings_style.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap_css/bootstrap.css">
		

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="../js/tabify/jquery.tabify.js"></script>
		<script async src="../js/ga.js"></script>
		<script type="text/javascript">				
			$(document).ready(function(){var e=[-1,-1,-1,-1,-1,-1];var t=[-1,-1,-1,-1,-1,-1];$("#girls .points span").each(function(n){e[n]=$(this).html();t[n]=n});var n=[];for(var r=0;r<t.length;r++){n.push({A:e[r],B:t[r]})}n.sort(function(e,t){return e.A-t.A});e=[];t=[];for(var r=0;r<n.length;r++){e.push(n[r].A);t.push(n[r].B)}e.reverse();t.reverse();var i=[1,2,3,-1,-1,-1];for(x=0;x<6;x++){if(e[x]==e[x+1])i.splice(x,0,i[x])}$("#girls .points span").each(function(e){if($(this).html()=="")return true;if(i[t.indexOf(e)]==1)$(this).parent().append('<span class="badge badge-warning" style="position: absolute;margin-top: 2px;">1st</span>');if(i[t.indexOf(e)]==2)$(this).parent().append('<span class="badge badge-success" style="position: absolute;margin-top: 2px;">2nd</span>');if(i[t.indexOf(e)]==3)$(this).parent().append('<span class="badge badge-important" style="position: absolute;margin-top: 2px;">3rd</span>')});var e=[-1,-1,-1,-1,-1,-1];var t=[-1,-1,-1,-1,-1,-1];$("#boys .points span").each(function(n){e[n]=$(this).html();t[n]=n});var n=[];for(var r=0;r<t.length;r++){n.push({A:e[r],B:t[r]})}n.sort(function(e,t){return e.A-t.A});e=[];t=[];for(var r=0;r<n.length;r++){e.push(n[r].A);t.push(n[r].B)}e.reverse();t.reverse();var i=[1,2,3,-1,-1,-1];for(x=0;x<6;x++){if(e[x]==e[x+1])i.splice(x,0,i[x])}$("#boys .points span").each(function(e){if($(this).html()=="")return true;if(i[t.indexOf(e)]==1)$(this).parent().append('<span class="badge badge-warning" style="position: absolute;margin-top: 2px;">1st</span>');if(i[t.indexOf(e)]==2)$(this).parent().append('<span class="badge badge-success" style="position: absolute;margin-top: 2px;">2nd</span>');if(i[t.indexOf(e)]==3)$(this).parent().append('<span class="badge badge-important" style="position: absolute;margin-top: 2px;">3rd</span>')})})
		</script>
	</head>

	<body>		
		<?php include ("../header.php"); require_once('../js/parsecsv-0.3.2/parsecsv.lib.php');?>

		<div id='container' style='height: 950px;'>
			<?php include ("../navigation.php"); ?>
			<div style="width: 1000px;">
				<div style='height: 50px;'>
					<h2 id="subpage_h2" style='float:left'>Standings</h2>
					<h3 id="subheader_info">Rankings are for round-robin play only.</h3>
				</div>
				<h3 class='table_header'>Boys</h3>			
				<?php
					$row_order = array('TAS', 'SAS', 'ISB', 'ISM', 'ISKL', 'JIS', 'W', 'L', 'D', 'POINTS');				
					$csv = new parseCSV('boys.csv');
					$tas = array(); $sas = array(); $isb = array(); $ism = array(); $iskl = array(); $jis = array();
					for($x = 0; $x < 10; $x++) {
						array_push($tas, $csv->data[0][$row_order[$x]]);
						array_push($sas, $csv->data[1][$row_order[$x]]);
						array_push($isb, $csv->data[2][$row_order[$x]]);
						array_push($ism, $csv->data[3][$row_order[$x]]);
						array_push($iskl, $csv->data[4][$row_order[$x]]);
						array_push($jis, $csv->data[5][$row_order[$x]]);
					}
					
					function echo_row($array) {
						for($x = 0; $x < 10; $x++) {
							if($x == 9) { echo "<div class='cell points'><span>{$array[$x]}</span></div>"; continue; }
							if($x >= 7) { echo "<div class='cell wld'>{$array[$x]}</div>"; continue; }
							if($x == 6) { echo "<div class='cell wld' style='border-left:2px solid #888'>{$array[$x]}</div>"; continue; }
							if($array[$x] == 'null') { echo "<div class='cell fade'></div>"; continue;}
							echo "<div class='cell'>{$array[$x]}</div>";
						}
					}
					
				?>
				<div id="boys" class="table" style='margin-left:40px;margin-top:10px;margin-right: 40px;margin-bottom:20px;'>
					<div style='height:358px;width: 920px;margin-left: auto;margin-right: auto;background:rgba(255, 255, 255, 0.30);color:rgb(68,68,68);'>
						<div id='row_one' style='width:920px;height:51px;'>
							<div class="cell_one" style=''>Boys</div>
							<div class="cell_one" style=''>TAS</div>
							<div class="cell_one" style=''>SAS</div>
							<div class="cell_one" style=''>ISB</div>
							<div class="cell_one" style=''>ISM</div>
							<div class="cell_one" style=''>ISKL</div>
							<div class="cell_one" style=''>JIS</div>
							<div class="cell_one wld" style='border-left:2px solid #888'>W</div>
							<div class="cell_one wld" style=''>L</div>
							<div class="cell_one wld" style=''>D</div>
							<div class="cell_one points" style=''>Points</div>
						</div>
						<div id='row_two' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color:navy;'>TAS</div>
							<?php echo_row($tas); ?>
						</div>	
						<div id='row_three' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color:maroon;'>SAS</div>
							<?php echo_row($sas); ?>
						</div>	
						<div id='row_four' style='width:920px;height:51px;'>
							<div class="cell column_one" style=''>ISB</div>
							<?php echo_row($isb); ?>
						</div>	
						<div id='row_five' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color:green;'>ISM</div>
							<?php echo_row($ism); ?>
						</div>	
						<div id='row_six' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color: #B8B000;'>ISKL</div>
							<?php echo_row($iskl); ?>
						</div>	
						<div id='row_seven' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color: #00526D;'>JIS</div>
							<?php echo_row($jis); ?>
						</div>		
					</div>
				</div>
					
					
					
				<?php 
					$csv = new parseCSV('girls.csv');
					$tas = array(); $sas = array(); $isb = array(); $ism = array(); $iskl = array(); $jis = array();
					for($x = 0; $x < 10; $x++) {
						array_push($tas, $csv->data[0][$row_order[$x]]);
						array_push($sas, $csv->data[1][$row_order[$x]]);
						array_push($isb, $csv->data[2][$row_order[$x]]);
						array_push($ism, $csv->data[3][$row_order[$x]]);
						array_push($iskl, $csv->data[4][$row_order[$x]]);
						array_push($jis, $csv->data[5][$row_order[$x]]);
					}
				?>
				<h3 class='table_header' style='margin-top:15px;'>Girls</h3>
				<div id="girls" class="table" style='margin-left:40px;margin-top:10px;margin-right: 40px;'>
					<div style='height:358px;width: 920px;margin-left: auto;margin-right: auto;background:rgba(255, 255, 255, 0.30);color:rgb(68,68,68);'>
						<div id='row_one' style='width:920px;height:51px;'>
							<div class="cell_one" style=''>Girls</div>
							<div class="cell_one" style=''>TAS</div>
							<div class="cell_one" style=''>SAS</div>
							<div class="cell_one" style=''>ISB</div>
							<div class="cell_one" style=''>ISM</div>
							<div class="cell_one" style=''>ISKL</div>
							<div class="cell_one" style=''>JIS</div>
							<div class="cell_one wld" style='border-left:2px solid #888'>W</div>
							<div class="cell_one wld" style=''>L</div>
							<div class="cell_one wld" style=''>D</div>
							<div class="cell_one points" style=''>Points</div>
						</div>
						<div id='row_two' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color:navy;'>TAS</div>
							<?php echo_row($tas); ?>
						</div>	
						<div id='row_three' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color:maroon;'>SAS</div>
							<?php echo_row($sas); ?>
						</div>	
						<div id='row_four' style='width:920px;height:51px;'>
							<div class="cell column_one" style=''>ISB</div>
							<?php echo_row($isb); ?>
						</div>	
						<div id='row_five' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color:green;'>ISM</div>
							<?php echo_row($ism); ?>
						</div>	
						<div id='row_six' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color: #B8B000;'>ISKL</div>
							<?php echo_row($iskl); ?>
						</div>	
						<div id='row_seven' style='width:920px;height:51px;'>
							<div class="cell column_one" style='color: #00526D;'>JIS</div>
							<?php echo_row($jis); ?>
						</div>			
					</div>
				</div>
				
					
			</div>
				
				
			</div>

		</div>
		<script src="../js/prefixfree.min.js"></script>
	</body>
</html>
