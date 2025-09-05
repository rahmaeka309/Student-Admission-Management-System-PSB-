<div class="panel panel-primary">
    <div class="panel-heading">INPUT DATA PENDAFTARAN</div>
    <div class="panel-body">
        <form action="" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="email">KODE PENDAFTARAN</label>
                <input type="text" class="form-control" name="kode">
            </div>
            <div class="form-group">
                <label for="email">NISN</label>
                <select name="nisn" class="form-control">
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
                <select name="nama" class="form-control">
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
                <input type="date" class="form-control" name="tgl_daftar">
            </div>
            <div class="form-group">
                <label for="email">Jurusan</label><br>
                <select name="jurusan">
                    <option value="Pilih">--Pilih Jurusan--</option>
                    <option value="Desain Grafis Multimedia">Desain Grafis Multimedia</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Akutansi Komputer">Akutansi Komputer</option>
                    <option value="Teknik Elektronika Industri">Teknkik Elektronika Industri</option>
                    <option value="Animasi dan Broadcasting">Animasi dan Broadcasting</option>
                </select>
            </div>
            <button type="submit" name="btn" class="btn btn-default">Simpan</button>
        </form>
    </div>
    <?php 
        if(isset($_POST['btn'])){
            
            $a=$_POST['kode'];
            $b=$_POST['nisn'];
            $c=$_POST['nama'];
            $d=$_POST['tgl_daftar'];
            $e=$_POST['jurusan'];

            $q=$conn->query("INSERT INTO pendaftaran VALUES ('$a','$b','$c','$d','$e')");

            if($q){
                echo"<script>alert('Data Masuk')</script>";
            }

        }
    ?>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">DATA SISWA</div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Pendaftaran</th>
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Pendaftaran</th>
                <th>Jurusan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $no=1;
                $SQL=$conn->query("SELECT*FROM pendaftaran a, siswa b WHERE a.nisn=b.nisn");
                while($v=$SQL->fetch_array()){
            ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$v['id_pendaftaran']?></td>
                    <td><?=$v['nisn']?></td>
                    <td><?=$v['nama_lengkap']?></td>
                    <td><?=$v['tgl_pendaftaran']?></td>
                    <td><?=$v['jurusan']?></td>
                    <td>
                        <a href="?page=edit&editing=edit-pendaftaran&id=<?=$v['id_pendaftaran']?>" 
                        class="btn-info btn">
                            Edit
                            </a> |
                        <a href="?page=delete&deleting=del-pendaftaran&id=<?=$v['id_pendaftaran']?>" class="btn-danger btn">
                            Hapus
                        </a>
                    </td>
                </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

