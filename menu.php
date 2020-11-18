
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Vila Best</a>
    </div>
    <ul class="nav navbar-nav">
      <li <?php 
      if(!isset($_GET['action'])) {
        echo 'class="active"';
      }
      
      ?>><a href="index.php">Home</a></li>
      <li <?php  
        if(isset($_GET['action']) && $_GET['action'] == 'gallery') {
          echo 'class ="active"';
        }
      
      ?>>
       <a href="index.php?action=gallery">Gallery</a></li>

      <li <?php  
        if(isset($_GET['action']) && $_GET['action'] == 'contact') {
          echo 'class ="active"';
        }
      
      ?>>
      <a href="index.php?action=contact">Contact</a></li>

       <li <?php  
        if(isset($_GET['action']) && $_GET['action'] == 'registration') {
          echo 'class ="active"';
        }
      ?>>
      <a href="index.php?action=registration">Register</a></li> 
      
      
      <li <?php  
        if(isset($_GET['action']) && $_GET['action'] == 'login') {
          echo 'class ="active"';
        }
      
      ?>>
      <a href="index.php?action=login">Login</a></li>
      <li <?php  
        if(isset($_GET['action']) && $_GET['action'] == 'booking') {
          echo 'class ="active"';
        }
      
      ?>> <a href="index.php?action=booking">Book now</a></li>
      
    </ul>
  </div>
</nav>