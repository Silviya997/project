<?php
 include_once('conn.php');
 

 $query= "UPDATE `booking` SET `status`= 1 WHERE id=:bookId";
  $data= [
   'bookId' => $_GET['bookingId']
  ];
 $statement= $conn->prepare($query);
 $statement->execute($data);

 if ($statement == true) {
     header('location:loginsuccess.php?action=reservation');
 }


?>

<form action="cancel.php?bookingId=<?php echo $row->b_id;?>" method="post">


</form>