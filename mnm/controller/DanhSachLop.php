<?php  
	//if (isset($_POST['idUser']) && isset($_POST['Quyen'])) {
		//if ($_POST['Quyen'] == 0 ) {
			require_once 'model/HocSinh.php';
			$hs=new HocSinh();
			$arr=$hs->getDanhSachLop(1);
			require_once 'view/v_dslop.php';
	//	}
		
	//}
?>