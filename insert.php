<?php

  session_start();
  require ('conn.php');

// registration

  $errors = [];

  if (isset($_POST['reg_user'])) {
 
      $first_name = $_POST['first_name'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password_1 = $_POST['password_1'];
      $phone = $_POST['phone'];

      if(empty($first_name)) { 
          array_push($errors, "Name is required"); 
      }
      if (!empty($username)) { 
          $qUsername = "SELECT * FROM `user` WHERE Username = :potrebitelsko_ime";
          $stmuser = $conn->prepare($qUsername);
          $userData = [
            ':potrebitelsko_ime' => $_POST['username']
          ];
          $stmuser->execute($userData);
          if ($stmuser->rowCount()) {
            array_push($errors, 'Username already exist');
          } else {
            $potrebitelsko_ime = $_POST['username'];
          } 
      }
      if (empty($username)) { 
          array_push($errors, "Username is required"); 
      }
      if (!empty($email)) { 
          $qUsermail = "SELECT * FROM `user` WHERE Email = :poshta";
          $stmmail = $conn->prepare($qUsermail);
          $mailData = [
            ':poshta' => $_POST['email']
          ];
          $stmmail->execute($mailData);

          if ($stmmail->rowCount()) {
            array_push($errors, 'Email already exist');
          } else {
            $poshta = $_POST['email'];
          } 
      }
      if (empty($email)) { 
          array_push($errors, "Email is required"); 
          }
      if (empty($password_1)) {
          array_push($errors, "Password is required");
          }
      if (empty($phone)) { 
          array_push($errors, "Phone is required");
          }
      if ($password_1 != $_POST['password_2']) {
          array_push($errors, "The two passwords do not match");
          } 
      if (empty($errors)) {
            $salt = 'booking987';
            $password_1 = md5($salt . $_POST['password_1']);

            $query = "INSERT INTO  `user` ( Name, Username, Password, Phone, Email, Salt)
                                            VALUES (:first_name, :username, :password_1, :phone, :email, :salt)";
              
            $statement = $conn->prepare($query);

            $data = [
                'first_name' => $_POST['first_name'],
                'username' => $_POST['username'],
                'password_1' => $password_1,
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'salt' => $salt,
            ];
            $result = $statement->execute($data); 
            
            
        if ($result) {
            echo  '<h3> Acount created. Please <a href="login.php">log in</a></h3>';
        
        }
      }
  } 



























  



