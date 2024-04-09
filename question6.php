<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 6;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 50000;
?>

<html>

<head>
	<title>Question 6</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="million.png" width="250px" height="250px"><br />
	<h1>Correct!</h1>
	<h2>$100000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question7.php" method="post">
			<h3>In Greek mythology, who was the god of the sea?</h3>
			<br>
				<table>
					
					<tr>
						<td><input type="radio" name="answer" value="false"><span> A.</span> Zeus</td>
						<td><input type="radio" name="answer" value="false"> <span> B.</span> Ares</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="true"><span> C.</span> Poseidon</td> <!--Correct-->
						<td><input type="radio" name="answer" value="false"><span> D.</span> Hades</td>
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