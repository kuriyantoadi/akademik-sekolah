<?php

//select kelas
function select_kelas(){
  include('koneksi.php');
  $data1 = mysqli_query($koneksi, "select * from tb_kelas");
  while ($d1 = mysqli_fetch_array($data1)) {
  ?>
      <option value="<?php echo $d1['id_kelas'] ?>"><?php echo $d1['tingkat']." ".$d1['jurusan']." ".$d1['kode_kelas'] ?></option>
  <?php }
}


function select_jurusan(){
  include('koneksi.php');
  $data2 = mysqli_query($koneksi, "select * from tb_jurusan");
  while ($d2 = mysqli_fetch_array($data2)) {
  ?>
      <option value="<?= $d2['nama_jurusan'] ?>"> <?= $d2['nama_jurusan'] ?> </option>
  <?php }
}

function s_industri(){
  include('koneksi.php');
  $db_ids = mysqli_query($koneksi, "select * from tb_industri");
  while ($s_ids = mysqli_fetch_array($db_ids)) {
  ?>
      <option value="<?= $s_ids['id_industri'] ?>"> <?= $s_ids['nama_industri'] ?> </option>
  <?php }
}

function select_kode_kelas(){
  for ($i=1; $i < 10; $i++) { ?>
    <option value="<?= $i ?>"> <?= $i ?> </option>

<?php  }
}

function jk(){
?>
<select class="form-control" name="jk" required>
  <option value="">Pilihan</option>
  <option value="Laki-laki">Laki-laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
<?php }

function edit_jk(){
?>
  <option value="Laki-laki">Laki-laki</option>
  <option value="Perempuan">Perempuan</option>
<?php }


function s_agama(){
?>
<select class="form-control" name="agama" required>
  <option value="">Pilih</option>
  <option value="Islam">Islam</option>
  <option value="Kristen">Kristen</option>
  <option value="Katolik">Katolik</option>
  <option value="Hindu">Hindu</option>
  <option value="budha">Budha</option>
</select>

<?php }

function edit_agama(){
  ?>
  <option value="Islam">Islam</option>
  <option value="Kristen">Kristen</option>
  <option value="Katolik">Katolik</option>
  <option value="Hindu">Hindu</option>
  <option value="budha">Budha</option>
<?php }

function s_guru(){
  include('koneksi.php');
  $data_g = mysqli_query($koneksi, "select * from tb_guru");
  while ($g = mysqli_fetch_array($data_g)) {
  ?>
      <option value="<?= $g['id_guru'] ?>"> <?= $g['nama_guru'] ?> </option>
  <?php }
}

function s_status(){ ?>
  <option value="admin">admin</option>
  <option value="guru">guru</option>
  <?php
}
 ?>
