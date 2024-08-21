<?php 

$showAlert = false;
$showError = false;


if($_SERVER['REQUEST_METHOD'] == "POST"){
	include 'partials/_dbconnect.php';
	$username = $_POST["username"];
	$password = $_POST['password'];

	$sql = "Select * from users where username='$username' AND password='$password'";
	$result = mysqli_query($con, $sql);
	$num = mysqli_num_rows($result);
	if{
		$sum == 1{
			$login = true;
			$_SESSION['loggedin'] = true;
            $_SESSION["username"] = $username;
		}

		else{
			$showError = "Invalid credentials"
		}
	}
}

?>