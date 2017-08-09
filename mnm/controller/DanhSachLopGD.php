<?php 

//if (isset($_POST['idUser']) && isset($_POST['Quyen'])) {
	//	if ($_POST['Quyen'] == 1 ) {
			require_once 'model/GV.php';
			$gv=new GV();
			$arr=$gv->getAll(5);
			
			require_once 'view/v_dslopGD.php';
		//}
	//}

 ?>