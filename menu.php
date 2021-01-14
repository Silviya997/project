<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="loginsuccess.php">Vila Best</a>
    </div>
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION['is_admin'])) {
        ?>
        <li <?php
      if (!isset($_GET['action'])) {
          echo 'class="active"';
      }
      
            ?>><a href="index.php">Home</a></li>
       <?php     
        }
      ?>
        <?php if(isset($_SESSION['is_admin'])) {
        ?>
        <li <?php
      if (!isset($_GET['action'])) {
          echo 'class="active"';
      }
      
            ?>><a href="loginsuccess.php">Home</a></li>
       <?php     
        }
      ?>
      
      <li <?php
        if (isset($_GET['action']) && $_GET['action'] == 'gallery') {
            echo 'class ="active"';
        }
      
      ?>>
        <a href="index.php?action=gallery">Gallery</a>
      </li>

      <li <?php
        if (isset($_GET['action']) && $_GET['action'] == 'contact') {
            echo 'class ="active"';
        }
      
      ?>>
        <a href="index.php?action=contact">Contact</a>
      </li>
      <?php
            if (isset($_SESSION['is_admin'])) {
                ?>
      <li <?php
              if (isset($_GET['action']) && $_GET['action'] == 'book_now') {
                  echo 'class ="active"';
              } ?>>
        <a href="booking.php?action=book_now">Book now</a>
      </li>

      <?php
            }
            if (!isset($_SESSION['is_admin'])) {
                ?>
      <li <?php
              if (isset($_GET['action']) && $_GET['action'] == 'registration') {
                  echo 'class ="active"';
              } ?>>
        <a href="index.php?action=registration">Register</a>
      </li>
      <li <?php
              if (isset($_GET['action']) && $_GET['action'] == 'login') {
                  echo 'class ="active"';
              } ?>>
        <a href="index.php?action=login">Login</a>
      </li>
      <?php
            }
             ?>
             

      <?php
              if (isset($_SESSION['is_admin'])) {
              ?>
      <li <?php
                  if (isset($_GET['action']) && $_GET['action'] == 'reservation') {
                      echo 'class ="active"';
                  } ?>>
        <a href="loginsuccess.php?action=reservation">See your reservation</a>
      </li>

      <?php
                }
              ?>
          
      <?php
                if (isset($_SESSION['is_admin'])) {
                    ?> <li> <a href="logout.php">Logout</a></li>
      <?php
                }
              
              
                
              ?>


    </ul>
  </div>
</nav>
