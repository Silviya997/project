<?php

include_once('header.php');

if(!isset($_SESSION['is_admin'])) {
  header('location:index.php');
} 
if (isset($_SESSION['user_id'])) {
 $q="SELECT Name, Email, Phone, checkin, checkout, status, b.Id as b_id FROM user u JOIN booking b ON u.Id=b.user_id WHERE checkout>=NOW() AND user_id=:userId";
 $stm = $conn->prepare($q);

 $data = [
   ':userId' => $_SESSION['user_id'],
 ];
 $stm->execute($data);
}
 
?>
 <body>
 <form action="loginsuccess.php?action=reservation" method="post">
  <div class="container">
   <table border = 1px solid black>
   <tr>
   <td>Name:      </td>
   <td>Phone:      </td>
   <td>Checkin:      </td>
   <td>Checkout:      </td>
   <td>Status:      </td>
   </tr>
<?php
 while($row= $stm->fetch(PDO::FETCH_OBJ)) {
?>
 <tr>
   <td> <?php echo $row->Name;?></td>
   <td> <?php echo $row->Phone;?></td>
   <td> <?php echo $row->checkin;?></td>
   <td> <?php echo $row->checkout;?></td>

   <?php if($row->status == 1) {
     ?>
     <td> <?php echo('This reservation is canceled');
     } ?></td>

   <?php if($row->status == 0) {
    ?>
      <td> <?php echo ('This reservation is active'); ?> </td>
       <td><button type="button" name="cancel" onclick="window.location.href='cancel.php?bookingId=<?php echo $row->b_id;?>'">Cancel</button> </td>
    <?php
         }
   ?>
 </tr>
<?php
 }
?>
  </table>
 </div>
</form>
</body>
<!-- // to do nova stranica cancel.php include conn i da update statusa i da redirectna kum reservation.php -->