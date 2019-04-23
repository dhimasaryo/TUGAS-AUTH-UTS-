<?php
session_start();

$username = $_POST['user'];
$password = $_POST['pass'];

	if ($username == "aryoxx" && $password == "ggyoxx") 
	{
		echo "Login sukses";
		$_SESSION['is_login'] = true;
		header('Location: http://localhost/tugasauth/Home.php');
	}
	else
	{
		echo "Login gagal";
		header('Location: http://localhost/tugasauth/form_login2.php');
	}
?>