<?php
session_start();
include_once('conn.php');
include_once('menu.php');
include_once('header.php');

if(!isset($_SESSION['is_admin'])) {
  header('location:index.php');
} 

if(isset($_POST['submit'])) {
    $errors = [];
    if (empty($_POST['checkin'])) {
        array_push($errors, 'You need to choose check in date');
    }
    

    if (empty($_POST['checkout'])) {
      array_push($errors, 'You need to choose check out date');
    }

    if (empty($errors)) {
      if ($_POST['checkout'] < $_POST['checkin']) {
        array_push($errors, 'Invalid checkout date');
      } else {
          $queryCheck= "SELECT * FROM `booking` WHERE checkin <= :check_in AND checkout >= :check_out";
          $d = [
          'check_in' => $_POST['checkin'],
          'check_out' => $_POST['checkout'],
          ];
          $stmt = $conn->prepare($queryCheck);
          $stmt->execute($d);
          $same_period = $stmt->fetch();

          if ($same_period) {
              array_push($errors, 'Selected period is alredy taken !'); 
          }
        
          $queryCheck= "SELECT * FROM `booking` WHERE checkin >= :check_in AND checkin < :check_out";
          $stmt = $conn->prepare($queryCheck);
          $stmt->execute($d);
          $same_period = $stmt->fetch();

          if ($same_period) {
              array_push($errors, 'Greska!');
          }
          $queryCheck= "SELECT * FROM `booking` WHERE checkout > :check_in AND checkout < :check_out";
          $stmt = $conn->prepare($queryCheck);
          $stmt->execute($d);
          $same_period = $stmt->fetch();

          if ($same_period) {
              array_push($errors, "Try again");
          }
        }
    }
 
    include_once('errors.php');

    if (empty($errors)) {
        $query = "INSERT INTO `booking` (user_id, checkin, checkout) VALUES (:userId, :checkin, :checkout)";
        $data = [
        'userId' => $_SESSION['user_id'],
        ':checkin' => $_POST['checkin'],
        ':checkout' => $_POST['checkout']
        ];
        $statement = $conn->prepare($query);
        $statement->execute($data);
        $result = $statement->fetch();
    }
}


?>


<form action="booking.php?action=book_now" method="post">
  <div class="container" style="border: 1px solid grey">
    <br>
      Check in: <input type="Date" name="checkin"></input> -  Check out: <input type="date" name="checkout"></input>
    <br>
    <br>
    <br>
      <button type="submit" name="submit" value="submit">Submit</button>

  </div>
</form>