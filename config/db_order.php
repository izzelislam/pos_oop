<?php
include_once "koneksi.php";

class order extends con
{
	public function read()
	{
		$data=mysqli_query($this->konek,"SELECT * FROM order_item ORDER BY datee ASC");

		if (mysqli_num_rows($data)) {
			while ($result=mysqli_fetch_assoc($data)) {
				$hasil[]=$result;
			}
			return $hasil;
		}
	}
	public function create_order($id_user,$id_table_number,$status,$date)
	{
		$sql_order="INSERT INTO order_item (id_user,id_table_number,status,datee) VALUES ('$id_user','$id_table_number','$status','$date')";
		
		mysqli_query($this->konek,$sql_order);
	}
	public function table_update($id,$table_number,$seat,$status)
	{
		$sql_table="UPDATE table_number SET table_number='$table_number',seat='$seat',status='$status' WHERE id='$id'";
		mysqli_query($this->konek,$sql_table);
	}
	public function delete_order($id)
	{
		$sql="DELETE FROM order_item WHERE id='$id'";
		mysqli_query($this->konek,$sql);
	}
	public function changetable($id,$table_number,$seat,$status)
	{
		$sql_table="UPDATE table_number SET table_number='$table_number',seat='$seat',status='$status' WHERE id='$id'";
		mysqli_query($this->konek,$sql_table);
	}
	public function show($id)
	{
		$sql="SELECT * FROM order_item WHERE id='$id'";
		$data=mysqli_query($this->konek,$sql);

		return mysqli_fetch_assoc($data);

	}
	public function update_order($id,$id_user,$id_table_number,$status,$datee)
	{
		$sql="UPDATE order_item SET id_user='$id_user',id_table_number='$id_table_number',status='$status',datee='$datee' WHERE id='$id'";
		mysqli_query($this->konek,$sql);
	}
	public function userorder($id)
	{
		$sql="SELECT * FROM user WHERE id='$id'";
		$data=mysqli_query($this->konek,$sql);
		$data_user=mysqli_fetch_assoc($data);
		return $data_user['name'];
	}
	public function usertable($id)
	{
		$sql="SELECT * FROM table_number WHERE id='$id'";
		$data=mysqli_query($this->konek,$sql);
		$data_user=mysqli_fetch_assoc($data);
		return $data_user['table_number'];
	}
	public function tableactiv($status)
	{
		$sql="SELECT * FROM table_number WHERE status='$status'";
		$data=mysqli_query($this->konek,$sql);
		if (mysqli_num_rows($data)) 
		{
			while($data_table_activ=mysqli_fetch_assoc($data))
			{
				$table_activ[]=$data_table_activ;
			}
			return $table_activ;
		}
		
	}
} 