<?php 
require_once 'model/Taikhoan.php';
$ds=array();
	$ds['ds']=array();
	foreach ($arr as $key => $value) {
	$id=$value->getIdUser();
	$a=new TaiKhoan();
	$tk=$a->getTK($id);
	$arr1=array();
	$arr1["iD"]=$tk->getId();
	$arr1["userName"]=$tk->getusername();
	$arr1["passWord"]=$tk->getPassWord();
	$arr1["ho"]=$tk->getHo();
	$arr1["ten"]=$tk->getTen();
	$arr1["ngaysinh"]=$tk->getNgaySinh();
	$arr1["que"]=$tk->getQueQuan();
	$arr1["quyen"]=$tk->getQuyen();
	array_push($ds['ds'], $arr1);
}
	echo json_encode($ds);
 ?>