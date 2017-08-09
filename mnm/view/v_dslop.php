<?php 

$ds=array();
	$ds['ds']=array();
	foreach ($arr as $key => $value) {
		$arr=array();
		$arr["idlop"]=$value->getIdLop();
		$hs=new HocSinh();
		$arr['tongsohocsinh']=$hs->getTongHsLop($value->getIdLop());
		$arr["tenlop"]=$value->getTenLop();
		$arr["sotinchi"]=$value->getSoTinChi();
		$arr["ketthuchocphan"]=$value->getKetThucHP();
			require_once 'model/GV.php';
		$gv=new GV();
		$tam=$gv->getGv($value->getIdGv());
		$id_user=$tam->getIdTK();
		require_once 'model/Taikhoan.php';
		$tk=new Taikhoan();
		$t=$tk->getTk($id_user);
		$arr["ten"]=$t->getHo()." ".$t->getTen();
		
		
	}
	array_push($ds['ds'], $arr);
	echo json_encode($ds);
	
 ?>