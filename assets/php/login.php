<?php
session_start();
	if (isset($_POST['username']))

		require 'config.inc.php';

		//Zet form in variable
		$username = $_POST['username'];
		$password = $_POST['password'];

		//double check form ingevuld?
		if (strlen($username) > 0 && strlen($password) > 0) {

			//encrypt username AND password
			$username = md5($username);
			$password = md5($password);

			//check if login is valid
			$query = "SELECT * FROM GLR_login WHERE username = '{$username}' AND password = '{$password}'";

			//voer query uit
			$result = mysqli_query($mysqli, $query);

			//check if credentials are valid
			if (mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $username;

				//Stuur naar homepagina
				header("Location:teamuitlees.php");

			}
			else{
				header("Location:login.php");
				exit();
			}
		}
	else {
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h2>Inlog</h2>
<form action="login.php" method="post">
	<input type="text" name="username" placeholder="username" required><br>
	<input type="text" name="password" placeholder="password" required>
	<input type="submit" name="submit" value="submit">
</form>
<?php } ?>
</body>
</html>
