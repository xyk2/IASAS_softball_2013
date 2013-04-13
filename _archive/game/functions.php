<?php
	function play_by_play($path, $inning_selector, $inning_number, $inning_half) {
		$xml = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . $path);
		$total = $xml->inning[$inning_number-1]->$inning_half->{$inning_selector}->count();
		$flag = 0;
		for($x = 0; $x < $total; $x++) {
			$string = $xml->inning[$inning_number-1]->$inning_half->{$inning_selector}[$x];	
			if($string != 'null') {
				echo "<li>";
				echo "<p style='float:left;font-weight:bold;margin-left:3px;'>" . strval($x+1) . "</p>";
				echo "<p style='margin-left:20px;'>" . $string . "</p>";
				echo "</li>";
				$flag = 1;
			}
		}
		if($flag != 1) {
			echo "<li>";
			echo "No play-by-play information available for this inning.";
			echo "</li>";
		}
	}
	
?>