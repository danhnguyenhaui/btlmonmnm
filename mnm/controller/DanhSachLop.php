<?php  
	//if (isset($_POST['idUser']) && isset($_POST['Quyen'])) {
		//if ($_POST['Quyen'] == 0 ) {
			require_once 'model/HocSinh.php';
			require_once 'model/Lop.php';
			require_once 'model/GV.php';
			$ds=array();
			$ds['ds']=array();
			$hs=new HocSinh();
			$arr=$hs->getDanhSachLop(1);
			foreach ($arr as $key => $value) {
			$t=array();
			$lop=new Lop();
			$l=$lop->getLop($value->getIdLopHoc());
			$t['idlop']=$l->getIdLop();
			$t['tenlop']=$l->getTenLop();
			$t['sotinchi']=$l->getSoTinChi();
			$t['ketthuchocphan']=$l->getKetThucHP();
			$gv=new GV();
			$t['tegv']=$gv->getTenGv($l->getIdGv());
			array_push($ds['ds'], $t);
			
	}
	echo json_encode($ds);
	
	//	}
		
	//}
?>