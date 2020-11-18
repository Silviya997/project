<?php
    include('conn.php');
    include_once('header.php');
    session_start();

    if (!isset($_SESSION['is_admin'])) {
      header('location: index.php'); exit;
    } elseif($_SESSION['is_admin'] != 0) {
      header('location:adminhome.php'); exit;
    } 
      
    
      
?>
    

<form method="post" action="loginsuccess.php?action=user">


<?php
include_once('acommodation.php');
?>

