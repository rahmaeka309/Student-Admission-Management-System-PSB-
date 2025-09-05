<?php
error_reporting(0);
session_start();
	include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: #E6E6FA;">
<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
		  <div class="panel panel-primary">
		  <div class="panel-heading">Menu Utama</div>
		  <div class="panel-body">
        <div>
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation"><a href="?page=pendaftaran">Data Pendaftaran</a></li>
            <li role="presentation"><a href="?page=siswa">Data Siswa</a></li>
          </ul>
        </div>
      </div>
	</div>
    </div>
    <div class="col-md-12">
      <?php 
        include"incl.php";
       ?>
   </div>
  </div>
  </div>
</body>
</html>