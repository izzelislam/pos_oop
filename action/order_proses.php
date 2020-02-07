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
 	$id 			 =$_POST['id'];
 	$id_user		 =$_POST['id_user'];
 	$id_table_number =$_POST['id_table_number'];
 	$status			 =$_POST['status'];
 	$datee			 =$_POST['datee'];
 	$order->update_order($id,$id_user,$id_table_number,$status,$datee);
 	if ($status == 0) 
 	{
 		$data_order=$order->show($id);
 		$show_table=$table->show($data_order['id_table_number']);
 		$status=1;
 		$order->changetable($data_order['id_table_number'],$show_table['table_number'],$show_table['seat'],$status);
 	}
 	else if($status == 1)
 	{
 		$data_order=$order->show($id);
 		$show_table=$table->show($data_order['id_table_number']);
 		$status=0;
 		$order->changetable($data_order['id_table_number'],$show_table['table_number'],$show_table['seat'],$status);
 	}
 	else if($status == 2)
 	{
 		$data_order=$order->show($id);
 		$show_table=$table->show($data_order['id_table_number']);
 		$status=0;
 		$order->changetable($data_order['id_table_number'],$show_table['table_number'],$show_table['seat'],$status);
 	}
 	
 	header('location:../orders');
 }
 elseif ($proses=="bayar") {
 	$bayar=$order->show($_GET['id']);
 	$status=3;
 	$order->update_order($bayar['id'],$bayar['id_user'],$bayar['id_table_number'],$status,$bayar['datee']);

 	$data_order=$order->show($_GET['id']);
 	$show_table=$table->show($data_order['id_table_number']);
 	$status=1;
 	$order->changetable($data_order['id_table_number'],$show_table['table_number'],$show_table['seat'],$status);
 	
 	header('location:../orders');
 }