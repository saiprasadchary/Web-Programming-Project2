<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 9;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 500000;
?>

<html>

<head>
	<title>Question 9</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="million.png" width="250px" height="250px"><br />
	<h1>Correct!</h1>
	<h2>Last Question for $1000000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="winner.php" method="post">
			<h3>What is the mathematical term for a line that touches a curve at a single point, mirroring the slope of the curve at that point?</h3>
			<br>
				<table>
				
					<tr>
						<td><input type="radio" name="answer" value="False"><span>A.</span> Radius</td> 
						<td><input type="radio" name="answer" value="False"><span>B.</span> Chord</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="False"><span>C.</span> Secant</td>
						<td><input type="radio" name="answer" value="True"><span>D.</span> Tangent</td><!--Correct-->
					</tr>
				</table>
				<br>

				<input type="submit" value="Submit Answer" class="submit">

			</form>
		</section>
	</div>
</body>


</html>