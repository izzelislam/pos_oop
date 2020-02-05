<?php
 
 include_once "../config/db_order_detail.php";
 $user=new order_detail();

 $proses= $_GET['action'];
 if ($proses == "create") 
 {
 	$user->create_categori($_POST['categori_name']);
 	header('location:../categories');
 }
 elseif ($proses == "showbycate") 
 {
 	$user->orderbycate($_POST['id_categori']);
 	header('location:../order_detail')
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