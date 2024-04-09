<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 3;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 2500;
?>

<html>

<head>
	<title>Question 3</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="million.png" width="250px" height="250px"><br />
	<h1>Correct!</h1>
	<h2>$5000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question4.php" method="post">
			<h3>Who painted the famous artwork "The Mona Lisa"?</h3>
			<br>
				<table>
					
					<tr>
						<td><input type="radio" name="answer" value="false"><span> A.</span> Pablo Picasso</td>
						<td><input type="radio" name="answer" value="true"><span> B.</span> Leonardo da Vinci</td><!--Correct-->
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false"><span> C.</span> Michelangelo</td>
						<td><input type="radio" name="answer" value="false"><span> D.</span> Vincent van Gogh</td>
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