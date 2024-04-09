<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 4;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 5000;
?>

<html>

<head>
	<title>Question 4</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="million.png" width="250px" height="250px"><br />
	<h1>Correct!</h1>
	<h2>$10000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question5.php" method="post">
			<h3>What is the chemical symbol for gold?</h3>
			<br>
				<table>
					
					<tr>
						<td><input type="radio" name="answer" value="true"><span> A.</span> Au</td><!--Correct-->
						<td><input type="radio" name="answer" value="false"><span> B.</span> Hg</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false"><span>C.</span> Fe</td>
						<td><input type="radio" name="answer" value="false"><span>D.</span> Ag</td>
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