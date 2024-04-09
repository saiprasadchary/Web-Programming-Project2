<!DOCTYPE html>
<?php
session_start();
$score = 0;
$_SESSION["score"] = $score;
$_SESSION["amount"] = 0;
?>
<html>

<head>
	<title>Question</title>
	<link href="question.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div class=background>
		<section>
			<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
			<img src="million.png" width="250px" height="250px">
			<h2>$500 Question!</h2>
			<br><br>
			<form action="question1.php" method="post">
				
			<h3>Who discovered penicillin?</h3>
			<br>
			<label class="container">
				<table>
					
					
					<tr>
						<td><input type="radio" name="answer" value="true"><span> A.</span> Alexander Fleming</td> <!--Correct Answer-->
						<td><input type="radio" name="answer" value="false"><span> B.</span> Sword</td>					</tr>
					<tr>
						<td><input type="radio" name="answer" value="false"><span> C.</span> Marie Curie</td>
						<td><input type="radio" name="answer" value="false"><span> D.</span>  Albert Einstein</td>
					</tr>
				</table>
				<br>
				<div class="checkmark"></div>
				</label>


				<input type="submit" value="Submit Answer" class="submit">
			</form>
		</section>
	</div>
</body>


</html>