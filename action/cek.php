<?php 

session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['name']) && !isset($_SESSION['password'])) 
{
	header('location:http://localhost/master1/PosOop/login.php');
}
