<?php 

/**
* 
*/
class GV 
{
	private $idGv;
	private $idTk;	
	function __construct()
	{
		
	}
		function setIdGv($id)
		 {
		 	$this->idGv=$id;
		 }

		 function getIdGv()
		 {
		 	return $this->idGv;
		 }

		  function setIdTK($id)
		 {
		 	$this->idTk=$id;
		 }

		 function getIdTK()
		 {
		 	return $this->idTk;
		 }

		function getGv($id)
		{
		require_once "model/Connect.php";
		$kn=new Connect();
		$conn=$kn->KetNoi();
		$result=$conn->query("select * from giaovien where id_gv=".$id);
		$gv=new GV();
		if ($result->num_rows > 0) {
			while ($row=$result->fetch_array()) {
				$gv->iD=$id;
				$gv->idTk=$row['id_user'];
			}
		}
		$kn->DisConnect();
		return $gv;
		}
		function getAll($id_user)
		{
		require_once "model/Connect.php";
		$kn=new Connect();
		$conn=$kn->KetNoi();
		$result=$conn->query("select * from giaovien where id_user=".$id_user);
		$arr=array();
		if ($result->num_rows > 0) {
			$gv=new GV();
			while ($row=$result->fetch_array()) {
				$gv->iD=$row['id_gv'];
				$arr[]=$gv->iD;
			}
		}
		$kn->DisConnect();
		return $arr;
		}
}
 ?>