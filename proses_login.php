<?php
	session_start();

	include "./config/db_user.php";
	
	$email=$_POST['email'];
	$pass =$_POST['password'];

if (isset($email)) 
{
	$data=new user();
	$result=$data->sort_email($email);
	if ($result['email']== $email && $result['password']== $pass) 
	{
		$_SESSION['email']=$result['email'];
		$_SESSION['password']=$result['password'];
		$_SESSION['name']=$result['name'];
		header('location:index.php');

	}
	else
	{
		echo "password salah";
	}
}
else
{
	echo "masukkan password !";
}