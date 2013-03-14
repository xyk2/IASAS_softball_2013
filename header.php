<?php
	$http_host = $_SERVER['HTTP_HOST'];
	if($http_host == "localhost") $base_url = '/'; 
	if($http_host == "iasas.xyk2maker.com") $base_url = '/'; 
	if($http_host == "blogs.tas.edu.tw") $base_url = '/softball/'; 
?>
	
		<header id="title">
			<div id='internal_title'>
				<a id='title_link' href='<?php echo $base_url;?>'>
					<img src="<?php echo $base_url;?>img/tiger.png" alt="">
					<h1>IASAS<span> Softball 2013</span></h1>
				</a>
			</div>
		</header>