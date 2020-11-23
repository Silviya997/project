<?php
include_once('conn.php');
include_once('header.php');
include_once('loggedusers.php');
include_once('errors.php');
$errors= [];

if(isset($_SESSION['is_admin'])) {
    header('location:booking.php');
} else {
    array_push($errors, "You need to be logged in");
}
?>



<h1>Hello</h1>


