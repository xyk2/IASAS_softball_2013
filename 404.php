<!DOCTYPE html>

<?php
	$http_host = $_SERVER['HTTP_HOST'];
	if($http_host == "localhost") $base_url = '/'; 
	if($http_host == "iasas.xyk2maker.com") $base_url = '/'; 
	if($http_host == "blogs.tas.edu.tw") $base_url = '/softball/'; 
?>

<html lang="en-US" style="height: 100%;">
	<head>
		<title>404 - IASAS Softball 2013</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="<?php echo $base_url;?>img/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	</head>

	<body>
		<?php include_once("./js/analytics.php") ?>
		<?php include ("./header.php"); ?>
		
		<div id='container'>
			<?php include ("./navigation.php"); ?>
	

			<div style="width: 1000px;position: relative;top: 50%;margin-top: -200px;">
				<h2 style="text-align: center;font-family: leagueGothicRegular;font-size: 150px;color: rgba(21, 121, 89, 0.64);">Error 404</h2>
				<h3 style="font-family: leagueGothicRegular;text-align: center;font-size: 30px;color: gray;">The page you were looking for does not exist.</h3>			
			</div>
		</div>
	</body>
</html>
