<?php
 include_once "../action/cek.php";
 include_once "../config/db_order.php";
 include_once "../config/db_table.php";
 $order=new order();
 $table=new table();

 $proses= $_GET['action'];
 $id_user		=$_POST['id_user'];
 $id_table_number=$_POST['id_table_number'];
 $status		 =$_POST['status'];
 $date 			 =date("y-m-d");
 $data_table=$table->show($id_table_number);

 if ($proses == "create") 
 {

 	
 	$order->create_order($id_user,$id_table_number,$status,$date);
 	// update table status
 	$status=0;
 	$order->table_update($id_table_number,$data_table['table_number'],$data_table['seat'],$status);
 	header('location:../order_detail');
 }
 elseif ($proses=="delete")
 {
 	$data_order=$order->show($_GET['id']);
 	$show_table=$table->show($data_order['id_table_number']);
 	$status=1;
 	$order->delete_order($_GET['id']);
 	$order->changetable($data_order['id_table_number'],$show_table['table_number'],$show_table['seat'],$status);
 	header('location:../orders');
 }
 elseif ($proses=="update") {
 	$id 		=$_POST['id'];
 	$id_categori=$_POST['id_categori'];
 	$img		=$_POST['img'];
 	$name_item	=$_POST['name_item'];
 	$price		=$_POST['price'];
 	$stok		=$_POST['stok'];
 	$status		=$_POST['status'];
 	$order->update_item($id,$id_categori,$img,$name_item,$price,$stok,$status);
 	
 	// header('location:../items');
 }