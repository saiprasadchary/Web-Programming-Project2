<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 5;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 10000;
?>

<html>

<head>
	<title>Question 5</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="million.png" width="250px" height="250px"><br />
	<h1>Correct!</h1>
	<h2>$50000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question6.php" method="post">
			<h3>Which planet in our solar system is known for its prominent rings?</h3>
			<br>
				<table>
					<tr>
						<td><input type="radio" name="answer" value="false"><span> A.</span> Mars</td>
						<td><input type="radio" name="answer" value="false"><span>B.</span> Jupiter</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true"><span>C.</span> Saturn</td> <!--Correct-->
						<td><input type="radio" name="answer" value="false"><span>D.</span> Uranus</td>
					</tr>
				</table>
				<br>

				<input type="submit" value="Submit Answer" class="submit">

			</form>
		</section>
	</div>
</body>


</html>