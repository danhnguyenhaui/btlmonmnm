<?php 

//if (isset($_POST['username']) && isset($_POST['password'])) {
	require_once 'model/Taikhoan.php';
	$login=new Taikhoan();
	$arr=array();
	$tk=$login->Login('tuannguyen','12345');
	require 'view/v_login.php'
//}
 ?>