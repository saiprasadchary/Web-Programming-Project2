<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 8;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 250000;
?>

<html>

<head>
	<title>Question 8</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="million.png" width="250px" height="250px"><br />
	<h1>Correct!</h1>
	<h2>$500000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question9.php" method="post">
			<h3>The Hundred Years' War was fought between which two countries?</h3>
			<br>
			<table>
					<tr style="height:100px">
						
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true"><span>A.</span> England and France</td> <!--Correct-->
						<td><input type="radio" name="answer" value="False"><span>B.</span> Germany and Poland</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="False"><span>C.</span> Spain and Portugal</td>
						<td><input type="radio" name="answer" value="False"><span>D.</span> Russia and Sweden</td>
					</tr>
				</table>
				<br>
				<input type="submit" value="Submit Answer" class="submit">
				</p>
			</form>
		</section>
	</div>
</body>


</html>