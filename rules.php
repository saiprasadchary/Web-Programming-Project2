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
		<div class="heading">
			<h1 >WHO WANTS TO BE A MILLIONAIRE?</h1>
		</div>
		
		<div>
		<img  src="million.png" width="250px" height="250px"><br/>
			<h1>RULES</h1>
			
		</div>
		<br>
		<div id="rules1">
		<h1>Who Wants to Be a Millionaire?</h1>
    <ul>
        <li>Contestants must answer 10 questions to progress, with each question having a specific money value.</li><br>
        <li>No time limit is placed on answering questions, and contestants have three Lifelines for assistance.</li><br>
        <li>Questions are grouped into five levels, each with increasing difficulty and containing three questions.</li><br>
        <li>Levels range from easy to difficult, with the final level posing the most challenging questions.</li><br>
        <li> Incorrect answers you will lose all the substantial amount of money you gained from correct answers.</li>
    </ul>
	</div>
	<br>
	<div>   
				<button onclick="document.location='question.php'">Go to the Game</button> 
			</div>
			<br><br>

	
</body>