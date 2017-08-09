<?php 

//if (isset($_POST['idLop'])) {
	require_once 'model/HocSinh.php';
	$hs=new HocSinh();
	$arr=array();
	$arr=$hs->GetAllHsLop(2);
	require 'view/v_DanhSachHocSinhLop.php';
//}
 ?>