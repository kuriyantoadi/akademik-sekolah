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
    } elseif ($_GET['pesan'] == "peminjaman_ditolak") {
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
