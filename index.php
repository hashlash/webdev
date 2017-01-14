<!DOCTYPE html>
<html>
<head>
	<title>BOOKit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<h1>BOOKit</h1>
	<h3>A simple tool for arranging meeting</h3>

	<div>
		<?php 
			for ($time=1; $time <= 12; $time++) { 
				echo "<div onClick:check('$time am') class=time><a>$time am</a></div>";
			}
			for ($time=1; $time <= 12; $time++) { 
				echo "<div onClick:check('$time pm') class=time><a>$time pm</a></div>";
			}
		?>
	</div>
</body>
</html>