<?php 
/**
* 
*/
class Connect 
{
	private $conn;
	function __construct()
	{
		
	}

	function KetNoi()
	{
		require_once "config.php";
		$this->conn=new mysqli(host,user,pass,database);
		if ($this->conn->error) {
			die('Không thể kết nối');
		}
		return  $this->conn;
	}
	function DisConnect()
	{
		$this->conn->close();
	}
}
 ?>