<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 2;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 1000;
?>

<html>

<head>
	<title>Question 2</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="million.png" width="250px" height="250px"><br />
	<h1>Correct!</h1>
	<h2>$2500 Question!</h2>
	<br> <br>
	<div class=background>
		<section>
			<form action="question3.php" method="post">
			<h3>The human body has approximately how many bones?</h3>
			<br>
				<table>
					
					<tr>
						<td><input type="radio" name="answer" value="false"><span>A.</span> 152</td>
						<td><input type="radio" name="answer" value="true"><span> B.</span> 206</td><!--Correct-->
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false"><span> C.</span> 209</td>
						<td><input type="radio" name="answer" value="false"><span> D.</span> 380</td>
					</tr>
				</table>
				<br>
				<input type="submit" value="Submit Answer" class="submit">
			</form>
		</section>
	</div>
</body>


</html>