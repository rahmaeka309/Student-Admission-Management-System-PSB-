<?php 
	$a=$_GET['deleting'];
	$b=$_GET['id'];
	switch ($a) {
		case 'del-siswa':
			$SQL=$conn->query("DELETE FROM siswa WHERE nisn='$b'") or die ($conn->error);
			if($SQL){
					echo "<script>alert('Data Berhasil Dihapus')</script>";
					echo"<script>document.location.href='?page=siswa'</script>";
				}else{
					echo"gagal";
				}
			break;
		case 'del-pendaftaran':
			$SQL=$conn->query("DELETE FROM pendaftaran WHERE id_pendaftaran='$b'") or die ($conn->error);
			if($SQL){
					echo "<script>alert('Data Berhasil Dihapus')</script>";
					echo"<script>document.location.href='?page=pendaftaran'</script>";
				}else{
					echo"gagal";
				}
			break;	
	}
 ?>