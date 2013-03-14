<?php
function insert_row($time, $ampm, $side, $opponent, $text, $link) {	
	$id = strtolower($opponent) . '_19px';
	echo "
									<tr id='row'>
										<td id='time'>{$time}<span> {$ampm}</span></td>
										<td id='game'>
											<span id='side'>{$side}</span>
											<span id='vs'>vs </span>
											<span style='font-weight: bold;'><img src='../img/blank.gif' id='{$id}'>{$opponent}</span>
										</td>
										<td id='link'><a href='{$link}'>{$text}</a></td>
									</tr>
		";
}


function insert_row_all($time, $ampm, $opponent1, $opponent2, $text, $link) {
	$tabs = "\t\t\t\t\t\t\t\t\t";
	echo "
{$tabs}<tr id='row'>
{$tabs}	<td id='time'>{$time}<span> {$ampm}</span></td>
{$tabs}	<td id='game'>
{$tabs}		<span style='font-weight: bold;'>{$opponent1}</span>
{$tabs}		<span id='vs'>vs </span>
{$tabs}		<span style='font-weight: bold;'>{$opponent2}</span>
{$tabs}	</td>
{$tabs}	<td id='link'>
{$tabs}		<a href='{$link}'>{$text}</a>
{$tabs}	</td>
{$tabs}</tr>
";
}

function start_table() {
	echo "<table border='0' class='schedule_table'>
								<tbody>";
}
function end_table() {
 echo "						</tbody>
							</table>\n";
}

function insert_championship($time, $ampm, $round, $text, $link) {
	$tabs = "\t\t\t\t\t\t\t\t\t";
	echo "
{$tabs}<tr id='row'>
{$tabs}	<td id='time'>{$time}<span> {$ampm}</span></td>
{$tabs}	<td id='game'>
{$tabs}		<span style='font-weight: bold;'>{$round}</span>
{$tabs}	</td>
{$tabs}	<td id='link'>
{$tabs}		<a href='{$link}'>{$text}</a>
{$tabs}	</td>
{$tabs}</tr>
";
}
?>