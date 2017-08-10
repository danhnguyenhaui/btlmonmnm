<?php 

	/**
	* 
	*/
	class DiemDanh
	{
		private $id_ngay;
		private $ngaydiemdanh;
		private $id_lop;
		function __construct()
		{
			# code...
		}

	function setIdNgay($id)
	{
		$this->id_ngay=$id;
	}
	function setNgayDiemDanh($ngay)
	{
		$this->ngaydiemdanh=$ngay;
	}

	function setIdLop($idlop)
	{
		$this->id_lop=$idlop;
	}

	function getIdNgay()
	{
		return $this->id_ngay;
	}
	function getNgayDiemDanh()
	{
		return $this->ngaydiemdanh;
	}

	function getIdLop()
	{
		return $this->id_lop;
	}

	function getsNgayDiemDanh($idlop)
	{
		require_once 'model/Connect.php';
		$kn=new Connect();
		$conn=$kn->KetNoi();
		$result=$conn->query("select * from diemdanh where id_lop=".$idlop);
		$arr=array();
		if ($result->num_rows > 0) {
			
			while ($row=$result->fetch_array()) {
				$d=new DiemDanh();
				$d->id_ngay=$row['id_ngay'];
				$d->ngaydiemdanh=$row['ngaydiemdanh'];
				$d->id_lop=$row['id_lop'];
				array_push($arr, $d);
			}
		}
		return $arr;
	}



	}

 ?>