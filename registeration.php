<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
	header('Location: login.php');
	exit;
}
?>
<<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>WHO WANTS TO BE A MILLIONAIRE?</title>
      <link rel="stylesheet" href="sstyle.css">
   </head>


   <body>
	<div id=word>
   <h1 class="words">WHO WANTS TO BE MILLIONAIRE?</h1>
     </div> 
    <div id="contain1">
    <img src="million.png" width="350px" height="350px"><br />
      <div class="wrapper">
        
         <div class="title">
             Signup Form
         </div>
         <form action="register-submit.php" method="post">
            <div class="field">
               <input id="username" type="text" name="username" required="">
               <label>User Name</label>
            </div>
            <div class="field">
               <input id="reg_password" type="password" name="password1" required="">
               <label>Password</label>
            </div>
            <div class="field">
                <input id="reg_cpassword" type="password" name="password2" required="">
                <label>Confirm Password</label>
             </div><br><br>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            
             <a href="login.php">Already Signedup? login here</a>
            </div>
         </form>
         <br>
      </div>
    </div>
      <br><br>
   </body>
</html>