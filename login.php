<?php 
	require ('conn.php');

	if (isset($_POST['login_user'])) {
		$errors = [];
		

		if (empty($_POST['user_name'])) {
			array_push($errors, 'Enter your username!');
		} 
		if (empty($_POST['pass'])) {
			array_push($errors, 'Enter your password!');
		}


		if (!empty($_POST['user_name']) && !empty($_POST['pass'])) {
			$salt = 'booking987';
				$password = md5($salt . $_POST['pass']);

				$qAcount = "SELECT * FROM `user`
				WHERE `Username`=:potrebitel AND `Password`= :parola";
				$data = [
					':potrebitel' => $_POST['user_name'],
					':parola' => $password,
				];

				$statement = $conn->prepare($qAcount);
				$statement->execute($data);
				$result = $statement->fetch();

		
				if ($statement->rowCount() == 1) {
					header('location: index.php'); 
				} else if ($statement->rowCount() >= 2) {
					array_push($errors, 'Something went wrong! Please, contact Admin!');
				} else {
					array_push($errors, 'Invalid username/password!');
				}
		}
		if (empty($errors)) {
			$loggedusers = $statement->fetchAll(PDO::FETCH_OBJ);
			foreach ($loggedusers as $loggeduser) {
				$loginacount = $loggeduser->Id;
			}
			$_SESSION['Id'] = $loginacount;
			header('location: loginsuccess.php'); 
		} else {
			include_once ('errors.php');
		}


		$query = "SELECT Id, Admin FROM `user`";
		$statement = $conn->prepare($query);
		$statement->execute();
		$adminResult = $statement->fetchAll(PDO::FETCH_KEY_PAIR);
		
		var_dump($adminResult); exit;
	
	
	}

	

	
?>






<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php?action=login">
  	<div >
  		<label>Username</label>
  		<input type="text" name="user_name" >
  	</div>
  	<div >
  		<label>Password</label>
  		<input type="password" name="pass">
  	</div>
  	<div>
  		<button type="submit" name="login_user" value="LOGIN">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="registration.php">Registration</a>
  	</p>
  </form>
</body>
</html>