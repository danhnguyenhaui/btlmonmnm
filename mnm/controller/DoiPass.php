<?php 

//if (isset($_POST['doipass'])) {
	require_once "model/TaiKhoan.php";
	$tk=new TaiKhoan();
	$kq=$tk->DoiPass(1,'tuannguyen','2','1');
	echo $kq;
//}

 ?>