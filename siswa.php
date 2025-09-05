<div class="panel panel-primary">
    <div class="panel-heading">INPUT DATA SISWA</div>
    <div class="panel-body">
        <form action="" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="email">NISN</label>
                <input type="text" class="form-control" name="nisn">
            </div>
            <div class="form-group">
                <label for="email">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="email">Tempat</label>
                <input type="text" class="form-control" name="tempat">
            </div>
            <div class="form-group">
                <label for="email">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir">
            </div>
            <div class="form-group">
                <label for="email">Jenis Kelamin</label><br>
                <input type="radio" name="jenis_kel" value="Laki-Laki">Laki-Laki <br>
                <input type="radio" name="jenis_kel" value="Perempuan">Perempuan
            </div>
            <div class="form-group">
                <label for="email">Agama</label><br>
                <select name="agama">
                    <option value="pilih">--Pilih Agama--</option>
                    <option value="Islam">Islam</option>
                    <option value="Khatolik">Khatolik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">No HP</label>
                <input type="text" class="form-control" name="no_hp">
            </div>
            <div class="form-group">
                <label for="email">Nama Orang Tua</label>
                <input type="text" class="form-control" name="nama_ortu">
            </div>
            <div class="form-group">
                <label for="email">Alamat</label>
                <textarea id="alamat" class="form-control" name="alamat"></textarea>
            </div>
            <button type="submit" name="btn" class="btn btn-default">Simpan</button>
        </form>
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

            $q=$conn->query("INSERT INTO siswa VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')");

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
                <th>NISN</th>
                <th>Nama Lengkap</th>
                <th>Tempat</th>
                <th>Tanggal Lahir </th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>No HP</th>
                <th>Nama Orang Tua</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $no=1;
                $SQL=$conn->query("SELECT*FROM siswa");
                while($v=$SQL->fetch_array()){
            ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$v['nisn']?></td>
                    <td><?=$v['nama_lengkap']?></td>
                    <td><?=$v['tempat']?></td>
                    <td><?=$v['tgl_lahir']?></td>
                    <td><?=$v['jenis_kelamin']?></td>
                    <td><?=$v['agama']?></td>
                    <td><?=$v['no_hp']?></td>
                    <td><?=$v['nama_ortu']?></td>
                    <td><?=$v['alamat']?></td>
                    <td>
                        <a href="?page=edit&editing=edit-siswa&id=<?=$v['nisn']?>" 
                        class="btn-info btn">Edit
                            </a> |
                        <a href="?page=delete&deleting=del-siswa&id=<?=$v['nisn']?>" class="btn-danger btn">
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

