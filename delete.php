<?php
 include_once('conn.php');

 $Query = "DELETE FROM `booking` WHERE `status`= 1 AND id=:bookId";
 $data= [
  'bookId' => $_GET['bookingId']
 ];
 $statement= $conn->prepare($Query);
 $statement->execute($data);

 if($statement == true) {
  header('location:adminhome.php');
 } else {
   echo('Can not delete');
 }


?>

<form action="delete.php?bookingId=<?php echo $row->b_id;?>" method="post">




















<form action="delete.php?bookingId=<?php echo $row->b_id;?>" method="post">
