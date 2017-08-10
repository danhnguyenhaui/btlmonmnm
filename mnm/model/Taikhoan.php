<?php 
/**
* 
*/
class TaiKhoan
{
	
	private $iD;
	private $userName;
	private $passWord;
	private $ho;
	private $ten;
	private $ngaySinh;
	private $queQuan;
	private $quyen;

	function __construct()
	{

	}
	function setId($id)
	{
		$this->iD=$id;
	}
	function setUserName($username)
	{
		$this->userName=$username;
	}

	function setPassWord($password)
	{
		$this->passWord=$password;
	}
	function setHo($ho)
	{
		$this->ho=$ho;
	}

	function setTen($ten)
	{
		$this->ten=$ten;
	}
	function setNgaySinh($ngaysinh)
	{
		$this->ngaySinh=$ngaysinh;
	}
	function setQueQuan($quequan)
	{
		$this->queQuan=$quequan;
	}
	function setQuyen($quyen)
	{
		$this->quyen=$quyen;
	}

  function getId()
	{
		return $this->iD;
	}
	function getUserName()
	{
		return $this->userName;
	}

	function getPassWord()
	{
		return $this->passWord;
	}
	function getHo()
	{
		return $this->ho;
	}

	function getTen()
	{
		return $this->ten;
	}
	function getNgaySinh()
	{
		return $this->ngaySinh;
	}
	function getQueQuan()
	{
		return $this->queQuan;
	}
	function getQuyen()
	{
		return $this->quyen;
	}

	function Login($username,$password)
	{
		require_once "model/Connect.php";
		$kn=new Connect();
		$conn=$kn->KetNoi();
		$result=$conn->query("select * from taikhoan where username='".$username."' and matkhau='".$password."'");
		$tk=new TaiKhoan();
		if ($result->num_rows > 0) {
			while ($row=$result->fetch_array()) {
				$tk->iD=$row['id_user'];
				$tk->userName=$row['username'];
				$tk->passWord=$row['matkhau'];
				$tk->ho=$row['hodem'];
				$tk->ten=$row['ten'];
				$tk->ngaySinh=$row['ngaysinh'];
				$tk->queQuan=$row['quequan'];
				$tk->quyen=$row['quyen'];
			}
		}
		$kn->DisConnect();
		return $tk;
	}

	/*function getTk($id)
	{
		require_once "model/Connect.php";
		$kn=new Connect();
		$conn=$kn->KetNoi();
		$result=$conn->query("select * from taikhoan where id_user=".$id);
		$tk=new TaiKhoan();
		if ($result->num_rows > 0) {
			while ($row=$result->fetch_array()) {
				$tk->iD=$row['id_user'];
				$tk->userName=$row['username'];
				$tk->passWord=$row['matkhau'];
				$tk->ho=$row['hodem'];
				$tk->ten=$row['ten'];
				$tk->ngaySinh=$row['ngaysinh'];
				$tk->queQuan=$row['quequan'];
				$tk->quyen=$row['quyen'];
			}
		}
		$kn->DisConnect();
		return $tk;
	}*/

	function DoiPass($idUser,$username,$password,$passmoi)
	{
		require_once "model/Connect.php";
		$kn=new Connect();
		$conn=$kn->KetNoi();
		$result=$conn->query("select * from taikhoan where username='".$username."' and matkhau='".$password."'");
		$tb="";
		if ($result->num_rows > 0) {
			$kq=$conn->query("update taikhoan set matkhau='".$passmoi."' where 
				id_user=".$idUser);
			if ($kq===true) {
				$tb="1";
			}
			else
			{
				$tb="0";
			}
		}
		$kn->DisConnect();
		return $tb;
	}



}
 ?>