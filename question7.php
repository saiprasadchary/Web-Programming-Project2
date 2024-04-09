<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 7;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 100000;
?>

<html>

<head>
	<title>Question 7</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="million.png" width="250px" height="250px"><br />
	<h1>Correct!</h1>
	<h2>$250000 Question!</h2>
	<br><br>
	<div class=background>
		<section>
			<form action="question8.php" method="post">
			<h3>What is the name of the economic principle that states when supply exceeds demand, prices generally fall?</h3>
			<br>
				<table>
				
					<tr>
						<td><input type="radio" name="answer" value="false"><span> A.</span> Keynesian Economics</td>
						<td><input type="radio" name="answer" value="true"><span> B.</span> Law of Supply and Demand </td><!--Correct-->
					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false"><span> C.</span> Diminishing Returns</td> 
						<td><input type="radio" name="answer" value="false"><span> D.</span> Comparative Advantage</td>
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