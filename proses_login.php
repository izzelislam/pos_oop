<?php
	session_start();

	include_once "./config/db_user.php";
	
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
		$_SESSION['id']=$result['id'];
		header('location:./dasboard/index.php');

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