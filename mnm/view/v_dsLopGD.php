<?php 
require_once 'model/Lop.php';
require_once 'model/HocSinh.php';
$ds=array();
$ds['ds']=array();
foreach ($arr as $key => $value) {
	$t=array();
	$l=new Lop();
	$arr1=$l->getLopGD($value);
	foreach ($arr1 as $key => $a) {
	$t['idlop']=$a->getIdLop();
	$hs=new HocSinh();
	$t['tongsohocsinh']=$hs->getTongHsLop($a->getIdLop());
	$t['tenlop']=$a->getTenLop();
	$t['sotinchi']=$a->getSoTinChi();
	$t['ketthucHp']=$a->getKetThucHP();
	$t['idgv']=$a->getIdGv();
	array_push($ds['ds'], $t);
	}
}
echo json_encode($ds);
 ?>