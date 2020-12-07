<DOCTYPE html>
<html lang="nl"> 
	<head> 
		<meta charset="utf-8"> 

		<title> toevoeg/update </title>
		<link rel="stylesheet" type="text/css" href="css/toevoeg_update.css" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script> 
	    $(function(){
	      $("#sidebar").load("sidenav.php"); 
	    });
    </script>
					
	</head>
	<body>
		<div id="sidebar"></div>
<?php
include './functions/db_connect.php';
$mode = $_GET["mode"];

if ($mode == "update"){
	$user_id = $_GET["user_id"];

		$sql = "SELECT user_id, username, password, admin
	        	FROM users
	        	WHERE user_id = $user_id";
		$result = $conn->query($sql);

		$row = $result->fetch();

		$checkID = $row["user_id"];
		$checkUsername = $row["username"];
		$checkPassword = $row["password"];
		$checkAdmin = $row["admin"];
		$toevoeg_update = "functions/crud_functions.php?mode=wijzigen";
}
		else{
			$checkID= "";
			$checkUsername = "";
			$checkPassword = "";
			$checkAdmin = "";
			$toevoeg_update = "functions/login_functions.php?mode=signup";
		}

	?>
		<form action= "<?=$toevoeg_update?>" method="post">
			ID:<input type="text" name="user_id" value="<?=$checkID?>" placeholder="id" readonly><br>
			Gebruikersnaam:<input type="text" name="username" value="<?=$checkUsername?>" placeholder="Gebruikersnaam"><br>
			Wachtwoord:<input type="text" name="password" value="<?=$checkPassword?>" placeholder="Wachtwoord" readonly ><br>
			Admin:<input type="number" min="0" max="1" name="admin" value="<?=$checkAdmin?>" placeholder="Admin(0/1)"><br>
			<input type="submit">
		</form>
	</body>