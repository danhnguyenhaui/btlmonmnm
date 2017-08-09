<?php 

	
	class HocSinh 
	{
		private $idHs;
		private $idLopHoc;
		function __construct()
		{
			
		}

		 function setIdHS($id)
		 {
		 	$this->idHs=$id;
		 }

		 function getIdHS()
		 {
		 	return $this->idHs;
		 }

		  function setIdLopHoc($id)
		 {
		 	$this->idLopHoc=$id;
		 }

		 function getIdLopHoc()
		 {
		 	return $this->idLopHoc;
		 }

		 function getDanhSachLop($iduser)
		 {
		 	require_once 'model/Connect.php';
		 	require_once 'model/Lop.php';
		 	$kn=new Connect();
		 	$conn=$kn->KetNoi();
		 	$result=$conn->query("select * from hocsinh where id_user=".$iduser);
		 	$arr=array();
		 	if ($result->num_rows >0) {
		 		while($row=$result->fetch_array())
		 		{
		 			array_push($arr,$row['id_lop']);
		 		}
		 	}
		 	$lop=array();
		 	foreach ($arr as $key => $value) {
		 		$l=new Lop();
		 		$tam=$l->getLop($value);
		 		array_push($lop, $tam);
		 	}
		 	$kn->DisConnect();
		 	return $lop;
		 }

		 function getTongHsLop($idlop)
		 {
		 	require_once 'model/Connect.php';
		 	$kn=new Connect();
		 	$conn=$kn->KetNoi();
		 	$result=$conn->query("select count(*) as tong from hocsinh where id_lop=".$idlop);
		 	$tong=0;
		 	if ($result->num_rows > 0) {
		 		while($row=$result->fetch_array())
		 		{
		 			$tong=$row['tong'];
		 		}
		 	}
		 	return $tong;
		 }



	}

 ?>