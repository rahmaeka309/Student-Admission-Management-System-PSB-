<?php 
	$a=$_GET['page'];
	switch($a){
		case"home";
		include"home.php";
		break;

		case"siswa";
		include"siswa.php";
		break;

		case"pendaftaran";
		include"pendaftaran.php";
		break;

		case"edit";
		include"edit.php";
		break;

		case"delete";
		include"delete.php";
		break;

		default;
		include"home.php";
		break;
	}

 ?>