<?php
include_once "koneksi.php";

class item extends con
{
	public function read()
	{
		$data=mysqli_query($this->konek,"SELECT *FROM item");

		if (mysqli_num_rows($data)) {
			while ($result=mysqli_fetch_assoc($data)) {
				$hasil[]=$result;
			}
			return $hasil;
		}
	}
	public function create_item($id_categori,$img,$name_item,$price,$stok,$status)
	{
		$sql="INSERT INTO item (id_categori,img,name_item,price,stok,status) VALUES ('$id_categori','$img','$name_item','$price','$stok','$status')";
		mysqli_query($this->konek,$sql);
	}
	public function itemCategori($id)
	{
		$data=mysqli_query($this->konek,"SELECT *FROM categori WHERE id='$id'");
		$result=mysqli_fetch_assoc($data);
		return $result['categori_name'];
	}
	public function delete_item($id)
	{
		$sql="DELETE FROM item WHERE id='$id'";
		mysqli_query($this->konek,$sql);
	}
	public function show($id)
	{
		$sql="SELECT * FROM item WHERE id='$id'";
		$data=mysqli_query($this->konek,$sql);
		return mysqli_fetch_assoc($data);
	}
	public function update_item($item_name,$id)
	{
		$sql="UPDATE item SET categori_name='$categori_name' WHERE id='$id'";
		mysqli_query($this->konek,$sql);
		header('location:../categoris');
	}
} 