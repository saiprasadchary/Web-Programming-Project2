<!DOCTYPE html>
<?php
session_start();
include 'check.php';
$score = 1;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 500;
?>

<html>

<head>
	<title>Question 1</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>

	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="million.png" width="250px" height="250px"><br />
	<h1>Correct!</h1>
	<h2>$1000 Question!</h2>
	<br> <br>
	<div class=background>
		<section>
			<table>
				<form action="question2.php" method="post">
				<h3>Which of these is commonly used as a symbol of peace?</h3>
					
					<br>
					<tr>
						<td><input type="radio" name="answer" value="false"> <span>A.</span> Tank</td>
						<td><input type="radio" name="answer" value="false"> <span>B.</span> Sword</td>
					</tr>
					<tr>
						<td><input type="radio" name="answer"  value="true"><span>C.</span> Dove</td> <!--Correct-->
						<td><input type="radio" name="answer"  value="false"> <span> D.</span> Arrow</td>
					</tr>
			</table>
			<br>
			<input type="submit" value="Submit Answer" class="submit">
			</form>
		</section>
	</div>
</body>


</html>