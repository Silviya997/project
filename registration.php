<?php
	include ('insert.php');
	include ('errors.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

</head>
<body>
    <div>
        <h2>Registration</h2>
    </div>
	<form action="registration.php?action=registration" method="POST" >
	
    <div>
        Name: <input type="text" name="first_name">
    </div>
    <div>
  	    Username: <input type="text" name="username">
  	</div>
  	<div>
  	    Email: <input type="email" name="email">
  	</div>
  	<div>
  	    Password: <input type="password" name="password_1">
  	</div>
  	<div>
      Confirm password: <input type="password" name="password_2">
  	</div>
    <div>
        Phone: <input type="text" name="phone">  
    </div>
  	<div>
  	  <button type="submit" class="btn" name="reg_user" value= "Register">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>

</body>
</html>