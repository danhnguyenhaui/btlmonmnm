<?php 

//if (isset($_POST['idUser']) && isset($_POST['Quyen'])) {
	//	if ($_POST['Quyen'] == 1 ) {
			require_once 'model/GV.php';
						require_once 'model/Lop.php';
require_once 'model/HocSinh.php';
			$gv=new GV();
			$arr=$gv->getAll(5);
			

$ds=array();
$ds['ds']=array();
	foreach ($arr as $key => $value) {
	$lop=new Lop();
	$l=$lop->getLopGD($value);
	foreach ($l as $key => $lopitem) {
		$t=array();
	$t['idlop']=$lopitem->getIdLop();
	$hs=new HocSinh();
	$t['tongsohocsinh']=$hs->getTongHsLop($lopitem->getIdLop());
	$t['tenlop']=$lopitem->getTenLop();
	$t['sotinchi']=$lopitem->getSoTinChi();
	array_push($ds['ds'], $t);
		}
	}echo json_encode($ds);
		//}
	//}

 ?>