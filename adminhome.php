<?php
      ini_set('session.cookie_secure', '0');

      if(!isset($_SESSION)) {
        session_start();

      }
      require ('conn.php');
      include_once('loggedadmin.php');

      if (!isset($_SESSION['is_admin'])) {
        header('location: index.php'); exit;
      } elseif($_SESSION['is_admin'] != 1) {
        header('location:loginsuccess.php?action=user'); exit;
      } 
        
      
        
?>



<form method="post" action="adminhome.php?action=admin">
</form>
</body>
</html>
