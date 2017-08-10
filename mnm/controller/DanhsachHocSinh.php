<?php 

if (isset($_POST['idLop'])) {
	require_once 'model/HocSinh.php';
	$hs=new HocSinh();
	$arr=array();
	$arr=$hs->GetAllHsLop(2);
	$ds=array();
	$ds['ds']=array();
	foreach ($arr as $key => $value) {
	$arr1=array();
	$arr1["iD"]=$value->getIdHS();
	$arr1["ho"]=$value->getHo();
	$arr1["ten"]=$value->getTen();
	$arr1["ngaysinh"]=$value->getNgaySinh();
	$arr1["que"]=$value->getQueQuan();
	array_push($ds['ds'], $arr1);
}
	echo json_encode($ds);
}
 ?>