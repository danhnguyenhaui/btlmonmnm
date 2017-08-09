<?php 


	/**
	* 
	*/
	class Lop
	{
		private $idLop;
		private $tenLop;
		private $soTinChi;
		private $ketthucHp;
		private $idGv;
		function __construct()
		{
			# code...
		}

		function setIdLop($id)
		{
			$this->idLop=$id;
		}

		function setTenLop($name)
		{
			$this->tenLop=$name;
		}

		function setSoTinChi($num)
		{
			$this->soTinChi=$num;
		}
		function setKetThucHP($bol)
		{
			$this->ketthucHp=$bol;
		}
		function setIdGv($idgv)
		{
			$this->idGv=$idgv;
		}

		function getIdLop()
		{
			return $this->idLop;
		}

		function getTenLop()
		{
			return $this->tenLop;
		}

		function getSoTinChi()
		{
			return $this->soTinChi;
		}
		function getKetThucHP()
		{
			return $this->ketthucHp;
		}
		function getIdGv()
		{
			return $this->idGv;
		}

		function getLop($idlop)
		{
			require_once 'model/Connect.php';
		 	$kn=new Connect();
		 	$conn=$kn->KetNoi();
		 	$result=$conn->query("select * from lophoc where id_lop=".$idlop);
		 	$lop=null;
		 	if ($result->num_rows >0) {
		 		
		 		while($row=$result->fetch_array())
		 		{
		 			$lop=new Lop();
		 			$lop->idLop=$row['id_lop'];
		 			$lop->tenLop=$row['tenlop'];
		 			$lop->soTinChi=$row['sotinchi'];
		 			$lop->ketthucHp=$row['ketthucHP'];
		 			$lop->idGv=$row['id_gv'];
		 		}
		 	}
		 	$kn->DisConnect();
		 	return $lop;
		}

		function getLopGD($idgv)
		{
			require_once 'model/Connect.php';
		 	$kn=new Connect();
		 	$conn=$kn->KetNoi();
		 	$result=$conn->query("select * from lophoc where id_gv=".$idgv);
		 	$lop=null;
		 	$arr=array();
		 	if ($result->num_rows >0) {
		 		
		 		while($row=$result->fetch_array())
		 		{
		 			$lop=new Lop();
		 			$lop->idLop=$row['id_lop'];
		 			$lop->tenLop=$row['tenlop'];
		 			$lop->soTinChi=$row['sotinchi'];
		 			$lop->ketthucHp=$row['ketthucHP'];
		 			$lop->idGv=$row['id_gv'];
		 			array_push($arr, $lop);
		 		}
		 	}
		 	$kn->DisConnect();
		 	return $arr;
		}

		
	}

 ?>