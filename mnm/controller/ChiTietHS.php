<?php 

require_once 'model/DiemDanh.php';
require_once 'model/HocSinhNghi.php';
$ds=array();
$ds['ds']=array();
$d=new DiemDanh();
$arr=$d->getsNgayDiemDanh(2);
foreach ($arr as $key => $value) {
	$t=array();
	$hsn=new HocSinhNghi();
	$t['ngaydiemdanh']=$value->getNgayDiemDanh();
	$n=$hsn->getHocSinhNghi($value->getIdNgay());
	$dem=0;
	foreach ($n as $key => $item) {
		$t[$dem]=$item->getMahs();
		$dem++;
	}
	$dem=0;
	array_push($ds['ds'], $t);

}
echo json_encode($ds);
 ?>