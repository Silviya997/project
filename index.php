<?php
    session_start();

    include('conn.php');
    include_once('header.php');
    include_once('menu.php');

    $errors = [];

    if (isset($_GET['action'])) {
        $page = $_GET['action'] . ".php";
        if(file_exists($page)) {
            include_once($page);
        } else {
            array_push($errors, 'Page does not exist. Please turn back <a href= "index.php">Home</a>');
        } 
    } else {
?> 
    <div class="container">
        <h3>Vila Best</h3>
        <p>A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.A navigation bar is a navigation header that is placed at the top of the page.vvvvvvvvvvs</p>
        <br>
        <p>If you want to make a reservation, please <a href="login.php">login</a></p>
    </div>
<?php
    include_once('acommodation.php'); 
      }  

    include_once('footer.php');
  ?>
  
 