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
		 	$result=$conn->query("select * from hocsinh inner join lophoc on 
		 	hocsinh.id_lop=lophoc.id_lop where id_user=".$iduser);
		 	$arr=array();
		 	if ($result->num_rows >0 ) {
		 		while ($row = $result->fetch_array()) {
		 			$t=array();
		 			$t['id_lop']=$row['id_lop'];
		 			$t['tongsohocsinh']=$this->getTongHsLop($row['id_lop']);
		 			$t['tenlop']=$row['tenlop'];
		 			$t['sotinchi']=$row['sotinchi'];
		 			$t['ketthuchp']=$row['ketthucHP'];
		 			$t['id_gv']=$row['id_gv'];
		 			$gv=new GV();
		 			$t['tengv']=$gv->getTenGv($row['id_gv']);
		 			array_push($arr, $t);
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
		 	$result=$conn->query("select id_hs,id_lop,hocsinh.id_user,hodem,ten,ngaysinh,quequan from hocsinh inner join taikhoan 
		 		on hocsinh.id_user=taikhoan.id_user where id_lop=".$idlop);
		 	$arr=array();
		 	$hs=null;
		 	if ($result->num_rows > 0) {
		 		while($row=$result->fetch_array())
		 		{
		 			$t=array();
		 			$t['idHs']=$row['id_hs'];
		 			
		 			array_push($arr,$hs);
		 		}
		 	}
		 	return $arr;
		 }



	}

 ?>