<?php
 
 include_once "../config/db_item.php";
 $item=new item();

 $proses= $_GET['action'];
 if ($proses == "create") 
 {
 	$id_categori=$_POST['id_categori'];
 	$img		=$_POST['img'];
 	$name_item	=$_POST['name_item'];
 	$price		=$_POST['price'];
 	$stok		=$_POST['stok'];
 	$status		=$_POST['status'];
 	$item->create_item($id_categori,$img,$name_item,$price,$stok,$status);
 	header('location:../items');
 }
 elseif ($proses=="delete")
 {
 	$item->delete_item($_GET['id']);
 	header('location:../items');
 }
 elseif ($proses=="update") {
 	$id 		=$_POST['id'];
 	$id_categori=$_POST['id_categori'];
 	$img		=$_POST['img'];
 	$name_item	=$_POST['name_item'];
 	$price		=$_POST['price'];
 	$stok		=$_POST['stok'];
 	$status		=$_POST['status'];
 	$item->update_item($id,$id_categori,$img,$name_item,$price,$stok,$status);
 	
 	// header('location:../items');
 }