<?php session_start();

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	}
	else{
		header('Location: login.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>WHO WANTS TO BE A MILLIONAIRE?</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div class = "background">
		<div class="heading">
			<h1 >WHO WANTS TO BE A MILLIONAIRE?</h1>
		</div>
		<img src="million.png" width="250px" height="250px"><br/>
		<div>
			<h1>WELCOME, <?php print $_SESSION["username"] ?></h1>
			<br><br>
			
			
			<div>
			     <button onclick="document.location='rules.php'">Rules</button> 
				<button onclick="document.location='question.php'">Questions</button> 
				<button onclick="document.location='leaderboard.php'">Leaderboard</button> 
				<button onclick="document.location='logout.php'">Log Out</button>
			</div>
		</div>
		<br>
	<b></b>
	</div>
</body>