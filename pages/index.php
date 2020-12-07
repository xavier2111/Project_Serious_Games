<?php
	session_start();
	if($_SESSION['admin'] == false || !isset($_SESSION['admin']))
	{
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Project Serious Game</title>
		<link rel="stylesheet" type="text/css" href="../css/index.css">
	</head>
	<body>
		<header>
			<h2 style="opacity: 1 !important;">Project Serious Game</h2>
		</header>
		<br>
		<ul>
			<li><a href="#home">Rekenen</a></li>
			<li><a href="#news">Taal</a></li>
			<li><a href="functions/login_functions.php?mode=logout">Loguit</a></li>
		</ul>

		<div class="row">
		  <div class="column">Rekenspelletjes</div>
		  <div class="column">Taalspelletjes</div>
		</div>
	</body>
</html>