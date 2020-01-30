<?php
 
 include_once "../config/db_categori.php";
 $categori=new categori();

 $proses= $_GET['action'];
 if ($proses == "create") 
 {
 	$categori->create_categori($_POST['categori_name']);
 	header('location:../categories');
 }
 elseif ($proses=="delete")
 {
 	$categori->delete_categori($_GET['id']);
 	header('location:../categories');
 }
 elseif ($proses=="update") {
 	$categori->update_categori($_POST['categori_name'],$_POST['id']);
 	header('location:../categories');
 }