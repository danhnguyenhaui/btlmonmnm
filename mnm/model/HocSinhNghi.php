<?php 

/**
* 
*/
class HocSinhNghi
{
	private $iD;
	private $maHs;
	private $idNgay;
	function __construct()
	{
		# code...
	}

	function setId($id)
	{
		$this->iD=$id;
	}
	function setmaHs($mahs)
	{
		$this->maHs=$mahs;
	}

	function setIdNgay($idNgay)
	{
		$this->idNgay=$idNgay;
	}

	function getId()
	{
		return $this->iD;
	}
	function getMahs()
	{
		return $this->maHs;
	}

	function getIdNgay()
	{
		return $this->idNgay;
	}

	function getHocSinhNghi($idngay)
	{
		require_once 'model/Connect.php';
		$kn=new Connect();
		$conn=$kn->KetNoi();
		$result=$conn->query("select * from hsnghi where id_ngay=".$idngay);
		$hsnghi=null;
		$arr=array();
		if ($result->num_rows > 0) {
			while ($row=$result->fetch_array()) {
				$hsnghi=new HocSinhnghi();
				$hsnghi->iD=$row['id'];
				$hsnghi->maHs=$row['mahsnghi'];
				$hsnghi->id_Ngay=$row['id_ngay'];
				array_push($arr, $hsnghi);
			}
		}
		return $arr;
	}
}
 ?>