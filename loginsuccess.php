<?php
    session_start();

    include('conn.php');
    include_once('header.php');
    include_once('menu.php');
    

    if (!isset($_SESSION['is_admin'])) {
      header('location: index.php'); exit;
    } elseif($_SESSION['is_admin'] != 0) {
      header('location:adminhome.php?action=admin'); exit;
    } 

      if(isset($_POST['btn'])) {
        header('location:booking.php?action=book_now');
      }
?>
    
  <form method="post" action="loginsuccess.php?action=user">
  <div class="container">
    <h1>Welcome!</h1>
    <div style="display:flex;"> 
      <img src="img/1.jpg" alt="" style="witdh: 100%; height: 100% "> 
      <button name="btn" style="border-radius: 200px; width: 20%; height: 80%; background-color: rgb(0, 198, 250); padding: 5%">Book Online</button>
    </div>
  </div>

<?php  

  include_once('acommodation.php'); 

 
?> 


