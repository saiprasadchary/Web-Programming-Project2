<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
	header('Location: home.php');
	exit;
}
?>

<<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="sstyle.css">
   </head>
   <body>
    <div id="contain1">
    <img src="million.png" width="350px" height="350px"><br />
      <div class="wrapper">
        
         <div class="title">
             Login Form
         </div>
         <form action="login-submit.php" method="post">
            <div class="field">
               <input id="username" type="text" name="username" required="">
               <label>User Name</label>
            </div>
            <div class="field">
               <input id="password" type="password" name="password" required="">
               <label>Password</label>
            </div><br><br>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="registeration.php">Signup now</a>
            </div>
         </form>
         <br>
      </div>
    </div>
      <br><br>
   </body>
</html>