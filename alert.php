<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "login-gagal") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Username dan Password Salah
          </div>
        </div>

        ";
    }elseif ($_GET['pesan'] == "belum_login") {
        echo "
        <div class='alert alert-warning alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Anda belum login
          </div>
        </div>

        ";
    }

    elseif ($_GET['pesan'] == "tambah-berhasil") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
         Tambah Data Berhasil
       </div>
       ";
    }

    elseif ($_GET['pesan'] == "edit-berhasil") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
         Edit Data Berhasil
       </div>
       ";
    }

    elseif ($_GET['pesan'] == "hapus-berhasil") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
         Hapus Data Berhasil
       </div>
       ";
    }

     elseif ($_GET['pesan'] == "peminjaman_ditolak") {
        echo "
        <div class='alert alert-warning alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Konfirmasi Tolak Peminjaman Ruangan Berhasil
          </div>
        </div>
        ";
    }
}
?>
