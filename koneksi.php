<?php 
define('url_temp',"http://localhost/katalog/asset/");
$conn = new mysqli('localhost','root','','psb');
if($conn){
	//echo"Berhasil terhubung dengan database";
}else{
	echo"Terjadi kesalahan, silahkan analisa sendiri";
}
 ?>