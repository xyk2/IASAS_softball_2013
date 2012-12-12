<?php
function insert_row($time, $ampm, $side, $opponent, $text, $link) {
	echo "<tr id='row'>";
	echo "<td id='time'>";
	echo $time;
	echo "<span> " . $ampm . "</span>";
	echo "</td>
			<td id='game'>
			<span id='side'>" . $side . " </span>
			<span id='vs'>vs </span>
			<span style='font-weight: bold;'>";
	switch($opponent) {
		case 'TAS':
			$style = 'background:url(/img/sprite_combined_compressed.png) -72px 0;';
			break;
		case 'SAS':
			$style = 'background:url(/img/sprite_combined_compressed.png) -72px -19px;';
			break;
		case 'ISB':
			$style = 'background:url(/img/sprite_combined_compressed.png) -72px -38px;';
			break;
		case 'ISM':
			$style = 'background:url(/img/sprite_combined_compressed.png) -72px -57px;';
			break;
		case 'ISKL':
			$style = 'background:url(/img/sprite_combined_compressed.png) -72px -76px;';
			break;
		case 'JIS':
			$style = 'background:url(/img/sprite_combined_compressed.png) -72px -95px;';
			break;
			
	}
	
	echo "<img src='/img/blank.gif' " . "style='" . $style . "'>";
	echo $opponent;
	echo "</span>
		</td>
	  <td id='link'><a ";
	 if($link != '') {
	 	echo "href='" . $link; 
	 }
	echo "'>" . $text . "</a></td>
	</tr>";
}


function insert_row_all($time, $ampm, $opponent1, $opponent2, $text, $link) {
	echo "<tr id='row'>";
	echo "<td id='time'>";
	echo $time;
	echo "<span> " . $ampm . "</span>";
	echo "</td>";
	echo "<td id='game'>";
	echo "<span style='font-weight: bold;'>";
	//echo "<img src='../img/school_" . $opponent1 . ".png'>";
	echo $opponent1;
	echo "</span>";
	echo "<span id='vs'>vs </span>";
	echo "<span style='font-weight: bold;'>";
	//echo "<img src='../img/school_" . $opponent2 . ".png'>";
	echo $opponent2;
	echo "</span>
		</td>
	  <td id='link'><a ";
	 if($link != '') {
	 	echo "href='" . $link; 
	 }
	echo "'>" . $text . "</a></td>
	</tr>";
}
?>