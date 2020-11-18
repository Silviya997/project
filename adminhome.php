<?php
      session_start();

      require ('conn.php');
      var_dump($_SESSION); exit;


      if (!isset($_SESSION['is_admin'])) {
        header('location: index.php'); exit;
      } elseif($_SESSION['is_admin'] != 1) {
        header('location:loginsuccess.php'); exit;
      } 
        
      
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post" action="adminhome.php?action=admin">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Vila Best</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="adminhome.php">Home</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="booking.php">Book now</a></li>
      <li><a href="listOfbookings.php">Bookings</a></li>
      <li><a href="logout.php">Log out</a></li>

    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div>
</form>
</body>
</html>
