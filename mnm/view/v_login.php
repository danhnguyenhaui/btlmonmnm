<?php 
	$ds=array();
	$ds['ds']=array();
	$arr=array();
	$arr["iD"]=$tk->getId();
	$arr["userName"]=$tk->getusername();
	$arr["passWord"]=$tk->getPassWord();
	$arr["ho"]=$tk->getHo();
	$arr["ten"]=$tk->getTen();
	$arr["ngaysinh"]=$tk->getNgaySinh();
	$arr["que"]=$tk->getQueQuan();
	$arr["quyen"]=$tk->getQuyen();
	array_push($ds['ds'], $arr);
	echo json_encode($ds);
	
 ?>