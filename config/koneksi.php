<?php

class con
{
	protected $server ="localhost",
			  $user	  ="root",
			  $pass	  ="1234",
			  $db	  ="pos",
			  $konek  ="";

	public function __construct()
	{
		$this->konek=mysqli_connect($this->server,$this->user,$this->pass,$this->db);
	}
}