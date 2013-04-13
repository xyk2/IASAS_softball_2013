<?php
	$http_host = $_SERVER['HTTP_HOST'];
	if($http_host == "localhost") $base_url = '/'; 
	if($http_host == "iasas.xyk2maker.com") $base_url = '/'; 
	if($http_host == "blogs.tas.edu.tw") $base_url = '/softball/'; 
?>
<nav id='navigation'>
				<ul>
					<li style="color:#C13A27;"><a href="<?php echo $base_url;?>schedule/">Schedule</a></li>
					<li style="color:#C68028;"><a href="<?php echo $base_url;?>scores/">Scores</a></li>
					<li style="color:#D7C229;"><a href="<?php echo $base_url;?>standings/">Standings</a></li>
					<li style="color:#9AC51E;"><a href="<?php echo $base_url;?>teams/">Teams</a></li>
					<li style="color:#87C21C;"><a href="<?php echo $base_url;?>finals/">Finals</a></li>
					<li style="color:#55B48A;"><a href="<?php echo $base_url;?>photos/">Photos</a></li>
					<li style="color:#4EB6BF;"><a href="<?php echo $base_url;?>stream/">Stream</a></li>
					<li style="color:#2972B7;"><a href="<?php echo $base_url;?>gamechanger/">GameChanger</a></li>
				</ul>
			</nav>