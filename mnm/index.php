<?php 
if (isset($_POST['request'])) {
	$request=$_POST['request'];
	switch ($request) {
	case 'login':
		require 'controller/Login.php';
		break;
	case 'getDSLopHoc':
		require 'controller/DanhSachLop.php';
		break;
	case 'getDSLopGD':
		require 'controller/DanhSachLopGD.php';
		break;
	case 'getDSHocSinh':
		require 'controller/DanhSachHocSinh.php';
		break;
	case 'DoiPass':
		require 'controller/DoiPass.php';
		break;
	default:
		
		break;
	}
}
require 'controller/Login.php';echo '<br>';
require 'controller/DanhSachLop.php';echo '<br>';
//require 'controller/DanhSachLopGD.php';echo '<br>';
//require 'controller/DanhSachHocSinh.php';echo '<br>';
//require_once 'model/HocSinh.php';

 ?>