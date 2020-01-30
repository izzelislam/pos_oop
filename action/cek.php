<?php 

session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['name']) && !isset($_SESSION['password']) && !isset($_SESSION['id'])) 
{
	header('/master1/PosOop/index.php');
}
