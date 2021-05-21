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

function rapot1(){
  if (empty($rapot1)) {
    ?>
    rapot Tidak Tersedia
    <input type="file" name="rapot_sms1" accept="application/pdf" class="form-control-file" >
  <?php  }else { ?>
    Rapot Tersedia
    <br><a class="btn btn-success btn-sm" href="../assets/rapot-sms1/<?= $rapot1 ?>">Download Rapot</a>
  <?php
  }
}

function rapot2(){
  if (empty($rapot2)) {
    ?>
    rapot Tidak Tersedia
    <input type="file" name="rapot_sms2" accept="application/pdf" class="form-control-file" >
  <?php  }else { ?>
    Rapot Tersedia
    <br><a class="btn btn-success btn-sm" href="../assets/rapot-sms1/<?= $rapot2 ?>">Download Rapot</a>
  <?php
  }
}

function rapot3(){
  if (empty($rapot3)) {
    ?>
    rapot Tidak Tersedia
    <input type="file" name="rapot_sms3" accept="application/pdf" class="form-control-file" >
  <?php  }else { ?>
    Rapot Tersedia
    <br><a class="btn btn-success btn-sm" href="../assets/rapot-sms3/<?= $rapot3 ?>">Download Rapot</a>
  <?php
  }
}

function rapot4(){
  if (empty($rapot4)) {
    ?>
    rapot Tidak Tersedia
    <input type="file" name="rapot_sms4" accept="application/pdf" class="form-control-file" >
  <?php  }else { ?>
    Rapot Tersedia
    <br><a class="btn btn-success btn-sm" href="../assets/rapot-sms4/<?= $rapot4 ?>">Download Rapot</a>
  <?php
  }
}

function rapot5(){
  if (empty($rapot5)) {
    ?>
    rapot Tidak Tersedia
    <input type="file" name="rapot_sms5" accept="application/pdf" class="form-control-file" >
  <?php  }else { ?>
    Rapot Tersedia
    <br><a class="btn btn-success btn-sm" href="../assets/rapot-sms5/<?= $rapot5 ?>">Download Rapot</a>
  <?php
  }
}

function rapot6(){
  if (empty($rapot6)) {
    ?>
    rapot Tidak Tersedia
    <input type="file" name="rapot_sms6" accept="application/pdf" class="form-control-file" >
  <?php  }else { ?>
    Rapot Tersedia
    <br><a class="btn btn-success btn-sm" href="../assets/rapot-sms6/<?= $rapot6 ?>">Download Rapot</a>
  <?php
  }
}
 ?>
