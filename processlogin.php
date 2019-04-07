<?php
session_start();
include('config/config.php');
//define variable
$username = !empty($_POST['username']);
$password = !empty($_POST['password']);

//checking if empty variable
if($username && $password) {
	$db = mysqli_connect(SERVER, USER, PASS, DB);
	//change encoding to utf8
	mysqli_set_charset($db, "utf8");

	//select secure username
	$sql = sprintf("SELECT * FROM users WHERE username='%s'", mysqli_real_escape_string($db, $_POST['username'])
);
	//checking password
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_assoc($result);
	if($row) {
		$hash = $row['password'];
	//selecting rows from database
if (password_verify($_POST['password'], $hash)){
	$message = 'Login successful.';

	$_SESSION['username'] = $row['username'];
	$_SESSION['userId'] = $row['userId'];
	$_SESSION['firstName'] = $row['firstName'];
	$_SESSION['lastName'] = $row['lastName'];
	$_SESSION['image'] = $row['image'];

	header('Location: dashboard.php');
	//setting up the cookies
} else {
  		setcookie("cookieMsg", "Pogresna lozinka", time() + (86400), "/");
        header ('Location: index.php');
}
	}else {
        setcookie("cookieMsg", "Pogresni podaci", time() + (86400), "/");
        header ('Location: index.php');
    }
    mysqli_close($db);
} else {
    setcookie("cookieMsg", "Niste popunili sva polja", time() + (86400), "/");
    header ('Location: index.php');
}



?>