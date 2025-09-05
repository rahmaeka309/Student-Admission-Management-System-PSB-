<?php 
  $a = $_GET['editing'];
  $b  = $_GET['id'];

    switch($a){
      case"edit-siswa";
        $SQL=$conn->query("SELECT*FROM siswa WHERE nisn = '$b'");
        $v = $SQL -> fetch_array();
?>
<!-- ===EDIT DATA SISWA === -->
<div class="panel panel-primary">
  <div class="panel-heading">EDIT DATA SISWA</div>
  <div class="panel-body">
    <form action="" enctype="multipart/form-data" method="POST">
      <div class="form-group">
        <label for="email">NISN</label>
        <input type="text" class="form-control" name="nisn" value="<?=$v['nisn']?>">
      </div>
      <div class="form-group">
        <label for="email">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" value="<?=$v['nama_lengkap']?>">
      </div>
      <div class="form-group">
        <label for="email">Tempat</label>
        <input type="text" class="form-control" name="tempat" value="<?=$v['tempat']?>">
      </div>
      <div class="form-group">
        <label for="email">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" value="<?=$v['tgl_lahir']?>">
      </div>
      <div class="form-group">
        <label for="email">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kel" value="Laki-Laki" <?if($v['jenis_kelamin']=='Laki-Laki') echo "checked";?>> Laki-Laki <br>
        <input type="radio" name="jenis_kel" value="Perempuan" <?if($v['jenis_kelamin']=='Perempuan') echo "checked";?>> Perempuan
      </div>
      <div class="form-group">
        <label for="email">Agama</label><br>
        <select name="agama">
          <?
            if($v['agama']=='Pilih'){
              echo "<option value="Pilih">--Pilih Agama--</option>";
            }else if($v['agama']=='Islam'){
              echo "<option value="Islam">Islam</option>";
            }else if($v['agama']=='Khatolik'){
              echo "<option value="Khatolik">Khatolik</option>";
            }else if($v['agama']=='Protestan'){
              echo "<option value="Protestan">Protestan</option>";
            }else if($v['agama']=='Hindu'){
              echo "<option value="Hindu">Hindu</option>";
            }else if($v['agama']=='Budha'){
              echo "<option value="Budha">Budha</option>";
            }else($v['agama']=='Konghucu'){
              echo "<option value="Konghucu">Konghucu</option>";
            }
          ?>     
        </select>
      </div>
      <div class="form-group">
        <label for="email">No HP</label>
        <input type="text" class="form-control" name="no_hp" value="<?=$v['no_hp']?>">
      </div>
      <div class="form-group">
        <label for="email">Nama Orang Tua</label>
        <input type="text" class="form-control" name="nama_ortu" value="<?=$v['nama_ortu']?>">
      </div>
      <div class="form-group">
        <label for="email">Alamat</label>
        <textarea id="alamat" class="form-control" name="alamat"><?=$v['alamat']?></textarea>
      </div>
      <button type="submit" name="btn" class="btn btn-default">Ubah</button>
    </form>
  </div>
</div>
<?php 
  if(isset($_POST['btn'])){

    $a=$_POST['nisn'];
    $b=$_POST['nama'];
    $c=$_POST['tempat'];
    $d=$_POST['tgl_lahir'];
    $e=$_POST['jenis_kel'];
    $f=$_POST['agama'];
    $g=$_POST['no_hp'];
    $h=$_POST['nama_ortu'];
    $i=$_POST['alamat'];

    $SQLi=$conn->query("UPDATE siswa SET nisn='$a', nama_lengkap='$b', tempat='$c', tgl_lahir='$d', jenis_kelamin='$e', agama='$f', no_hp='$g', nama_ortu='$h', alamat='$i'  WHERE nisn='$_POST[nisn]'");
    if($SQLi){
      echo "<script>alert('Data Berhasil Diubah');document.location.href='?page=siswa'</script>";
    }else{
      echo"<script>alert('Data Gagal Diubah');document.location.href='?page=siswa'</script>";
    }
  }
      break;
      case"edit-pendaftaran";
        $SQL=$conn->query("SELECT*FROM pendaftaran WHERE id_pendaftaran = '$b'");
        $v = $SQL -> fetch_array();
?>
<!-- ===EDIT DATA PENDAFTARAN === -->
<div class="panel panel-primary">
    <div class="panel-heading">EDIT DATA PENDAFTARAN</div>
    <div class="panel-body">
        <form action="" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="email">KODE PENDAFTARAN</label>
                <input type="text" class="form-control" name="kode" value="<?=$v['id_pendaftaran']?>">
            </div>
            <div class="form-group">
                <label for="email">NISN</label>
                <select name="nisn" class="form-control" value="<?=$v['nisn']?>">
                  <?php 
                    $SQLi = $conn->query("SELECT*FROM siswa");
                    while ($vie = $SQLi->fetch_array()) {
                    echo "<option value='$vie[nisn]'>".$vie['nisn']."</option>";
                    }
                  ?>          
                </select>
            </div>
            <div class="form-group">
                <label for="email">Nama Siswa</label>
                <select name="nama" class="form-control" value="<?=$v['nama_lengkap']?>">
                  <?php 
                    $SQLi = $conn->query("SELECT*FROM siswa");
                    while ($vie = $SQLi->fetch_array()) {
                    echo "<option value='$vie[nisn]'>".$vie['nama_lengkap']."</option>";
                    }
                  ?>          
                </select>
            </div>
            <div class="form-group">
                <label for="email">Tanggal Pendaftaran</label>
                <input type="date" class="form-control" name="tgl_daftar" value="<?=$v['tgl_pendaftaran']?>">
            </div>
            <div class="form-group">
                <label for="email">Jurusan</label><br>
                <select name="jurusan">
                  <?
                    if($v['jurusan']=='Pilih'){
                      echo "<option value="Pilih">--Pilih Jurusan--</option>";
                    }else if($v['jurusan']=='Desain Grafis Multimedia'){
                      echo "<option value="Desain Grafis Multimedia">Desain Grafis Multimedia</option>";
                    }else if($v['jurusan']=='Teknik Komputer dan Jaringan'){
                      echo "<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>";
                    }else if($v['jurusan']=='Rekayasa Perangkat Lunak'){
                      echo "<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>";
                    }else if($v['jurusan']=='Akutansi Komputer'){
                      echo "<option value="Akutansi Komputer">Akutansi Komputer</option>";
                    }else if($v['jurusan']=='Teknik Elektronika Industri'){
                      echo "<option value="Teknik Elektronika Industri">Teknkik Elektronika Industri</option>";
                    }else($v['jurusan']=='Animasi dan Broadcasting'){
                      echo "<option value="Animasi dan Broadcasting">Animasi dan Broadcasting</option>";
                    }
                  ?>   
                </select>
            </div>
            <button type="submit" name="btn" class="btn btn-default">Simpan</button>
        </form>
    </div>
  </div>
<?php 
  if(isset($_POST['btn'])){
            
    $a=$_POST['kode'];
    $b=$_POST['nisn'];
    $c=$_POST['nama'];
    $d=$_POST['tgl_daftar'];
    $e=$_POST['jurusan'];

    $SQLi=$conn->query("UPDATE pendaftaran SET id_pendaftaran='$a', nisn='$b', nama_lengkap='$c', tgl_pendaftaran='$d', jurusan='$e'  WHERE id_pendaftaran='$_POST[id_pendaftaran]'");
    printf($conn->error);
    if($SQLi){
      echo "<script>alert('Data Berhasil Diubah');document.location.href='?page=pendaftaran'</script>";
    }else{
      echo"<script>alert('Data Gagal Diubah');document.location.href='?page=pendaftaran'</script>";

    }
  }
      break;
    }       
?>
