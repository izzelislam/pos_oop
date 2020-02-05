<?php
include_once "koneksi.php";

class table extends con
{
	public function read()
	{
		$data=mysqli_query($this->konek,"SELECT * FROM table_number");

		if (mysqli_num_rows($data)) {
			while ($result=mysqli_fetch_assoc($data)) {
				$hasil[]=$result;
			}
			return $hasil;
		}
	}
	public function create_table($table_number,$seat,$status)
	{
		$sql="INSERT INTO table_number (table_number,seat,status) VALUES ('$table_number','$seat','$status')";
		mysqli_query($this->konek,$sql);
	}
	public function delete_table($id)
	{
		$sql="DELETE FROM table_number WHERE id='$id'";
		mysqli_query($this->konek,$sql);
	}
	public function show($id)
	{
		$sql="SELECT * FROM table_number WHERE id='$id'";
		$data=mysqli_query($this->konek,$sql);
		return mysqli_fetch_assoc($data);
	}
	public function update_table($id,$table_number,$seat,$status)
	{
		$sql="UPDATE table_number SET table_number='$table_number',seat='$seat',status='$status' WHERE id='$id'";
		mysqli_query($this->konek,$sql);
		header('location:../table');
	}
} 