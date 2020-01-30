<?php
include_once "koneksi.php";

class user extends con
{
	public function read()
	{
		$data=mysqli_query($this->konek,"SELECT *FROM user");

		if (mysqli_num_rows($data)) {
			while ($result=mysqli_fetch_assoc($data)) {
				$hasil[]=$result;
			}
			return $hasil;
		}
	}
	public function create_categori($categori_name)
	{
		$sql="INSERT INTO categori (categori_name) VALUES ('$categori_name')";
		mysqli_query($this->konek,$sql);
	}
	public function delete_user($id)
	{
		$sql="DELETE FROM user WHERE id='$id'";
		mysqli_query($this->konek,$sql);
	}
	public function show($id)
	{
		$sql="SELECT * FROM user WHERE id='$id'";
		$data=mysqli_query($this->konek,$sql);
		return mysqli_fetch_assoc($data);
	}
	public function update_categori($categori_name,$id)
	{
		$sql="UPDATE categori SET categori_name='$categori_name' WHERE id='$id'";
		mysqli_query($this->konek,$sql);
		header('location:../categoris');
	}
	public function sort_email($email)
	{
		$sql="SELECT * FROM user WHERE email='$email'";
		$data=mysqli_query($this->konek,$sql);
		return mysqli_fetch_assoc($data);
	}
} 