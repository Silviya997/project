<?php
      ini_set('session.cookie_secure', '0');

      if(!isset($_SESSION)) {
        session_start();
      }

      require ('conn.php');
      

      if(!isset($_SESSION['is_admin'])) {
        header('location: index.php'); exit;
      } elseif($_SESSION['is_admin'] != 1) {
        header('location: loginsuccess.php?action=profile'); exit;
        } 

      include_once('admin_menu.php'); 

      $q="SELECT Name, Email, Phone, checkin, checkout, status FROM user u JOIN booking b ON u.Id=b.user_id WHERE checkout>=NOW() ORDER BY checkin ASC";
      $stm = $conn->prepare($q);
      $stm->execute();
        
?>


<div class="container">

<form action="adminhome.php?action=admin" method="post">

<table border = 1px solid black>
      <tr>
        <td>Name:      </td>
        <td>Phone:      </td>
        <td>Checkin:      </td>
        <td>Checkout:      </td>
        <td>Status:      </td>

      </tr>
  <?php
    while($row=$stm->fetch(PDO::FETCH_OBJ)) {
  ?>
        <tr>
          <td> <?php echo $row->Name;?></td>
          <td> <?php echo $row->Phone;?></td>
          <td> <?php echo $row->checkin;?></td>
          <td> <?php echo $row->checkout;?></td>
          <td> <?php echo $row->status;?></td>
          <td><button type="" name="delete" onclick="window.location.href='delete.php?bookingId=<?php echo $row->b_id;?>'">Delete</button> </td>

        </tr>
    <?php
    }
   ?>
</table>
</div>
</body>
</html>
