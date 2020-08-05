
<?php

$Stud = "Student";
$Adm = "Admin";
$Lec = "Lecturer";
$msg= "";
session_start();

$connection = mysqli_connect ("localhost", "root","", "exam_mis");


if(isset($_POST['login_btn']))
{
	$UType = $_POST['UType'];
	$email_login = $_POST['email'];
	$password_login = $_POST['password_login'];

	if($UType == $Stud ){
		$query = "SELECT * FROM studlogin_view WHERE SSEmail = '$email_login' AND SSPassword= '$password_login'";
		$query_run = mysqli_query($connection, $query);
	}
	else if($UType == $Lec ){
		$query = "SELECT * FROM leclogin_view WHERE LLEmail = '$email_login' AND LLPassword='$password_login'";
		$query_run1 = mysqli_query($connection, $query);
	}
	else{
		$query = "SELECT * FROM admlogin_view WHERE AAEmail = '$email_login' AND AAPassword='$password_login'";
		$query_run2 = mysqli_query($connection, $query);
	}

	

	if(mysqli_fetch_array($query_run))
	{
		$_SESSION['username'] = $email_login;
		$_SESSION['role'] = $Stud;
		header('Location:student4.php');
	}
	else if(mysqli_fetch_array($query_run1)){
		$_SESSION['username'] = $email_login;
		$_SESSION['role'] = $Lec;
		header('Location:lecturer.php');
	}
	else if(mysqli_fetch_array($query_run2)){
		$_SESSION['username'] = $email_login;
		$_SESSION['role'] = $Admin;
		header('Location:admin.php');
	}
	else
	{
		$msg ="Invalid login or password";
		header('Location:index.php');
	}
}



?>