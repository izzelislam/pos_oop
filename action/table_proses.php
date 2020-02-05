<?php
 
 include_once "../config/db_table.php";
 $categori=new table();

 $proses= $_GET['action'];
 if ($proses == "create") 
 {
 	$table_number=$_POST['table_number'];
 	$seat		 =$_POST['seat'];
 	$status		 =$_POST['status'];
 	$categori->create_table($table_number,$seat,$status);
 	header('location:../table');
 }
 elseif ($proses=="delete")
 {
 	$categori->delete_table($_GET['id']);
 	header('location:../table');
 }
 elseif ($proses=="update") 
 {
 	$id 		 =$_POST['id'];
 	$table_number=$_POST['table_number'];
 	$seat		 =$_POST['seat'];
 	$status		 =$_POST['status'];
 	$categori->update_table($id,$table_number,$seat,$status);
 	header('location:../table');
 }