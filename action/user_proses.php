<?php
 
 include "../config/db_user.php";
 $user=new user();

 $proses= $_GET['action'];
 if ($proses == "create") 
 {
 	$user->create_categori($_POST['categori_name']);
 	header('location:../categories');
 }
 elseif ($proses=="delete")
 {
 	$user->delete_user($_GET['id']);
 	header('location:../users');
 }
 elseif ($proses=="update") {
 	$user->update_categori($_POST['categori_name'],$_POST['id']);
 	header('location:../categories');
 }