<?php 

	
	class HocSinh extends Taikhoan
	{
		private $idHs;
		private $idLopHoc;
		private $idUser;
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

		  function setIdUser($id)
		 {
		 	$this->idUser=$id;
		 }

		 function getIdUser()
		 {
		 	return $this->idUser;
		 }
		 function getDanhSachLop($iduser)
		 {
		 	require_once 'model/Connect.php';
		 	require_once 'model/Lop.php';
		 	require_once 'model/GV.php';
		 	$kn=new Connect();
		 	$conn=$kn->KetNoi();
		 	$result=$conn->query("select * from hocsinh where id_user=".$iduser);
		 	$arr=array();
		 	if ($result->num_rows >0 ) {
		 		while ($row = $result->fetch_array()) {
		 			$hs=new HocSinh();
		 			$hs->setIdLopHoc($row['id_lop']);
		 			$hs->setIdHS($row['id_hs']);
		 			array_push($arr, $hs);
		 		}
		 	}
		 	return $arr;
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

		 function GetAllHsLop($idlop)
		 {
		 	require_once 'model/Connect.php';
		 	$kn=new Connect();
		 	$conn=$kn->KetNoi();
		 	$result=$conn->query("select id_hs,hodem,ten,ngaysinh,quequan from hocsinh inner join taikhoan on hocsinh.id_user=taikhoan.id_user where id_lop=".$idlop);
		 	$arr=array();
		 	$hs=null;
		 	if ($result->num_rows > 0) {
		 		while($row=$result->fetch_array())
		 		{
		 			$hs=new HocSinh();
		 			$hs->setIdHS($row["id_hs"]);
		 			$hs->setHo($row["hodem"]);
		 			$hs->setTen($row["ten"]);
		 			$hs->setNgaySinh($row["ngaysinh"]);
		 			$hs->setQuequan($row["quequan"]);
		 			array_push($arr,$hs);
		 		}
		 	}
		 	return $arr;
		 }



	}

 ?>