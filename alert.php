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
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <i class='fa fa-check-circle'></i>
          Login gagal, silahkan login lagi
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

    elseif ($_GET['pesan'] == "industri_dibuka") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
        Pengajuan Prakerin Berhasil dibuka
       </div>
       ";
    }

    elseif ($_GET['pesan'] == "industri_ditutup") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
        Pengajuan Prakerin Berhasil ditutup
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

    elseif ($_GET['pesan'] == "logout") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <div class='alert-message'>
           Anda Berhasil Logout
         </div>
       </div>
       ";
   }

   elseif ($_GET['pesan'] == "login-gagal") {
      echo "
      <div class='alert alert-danger alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <div class='alert-message'>
          Login Gagal, Silahkan Login Lagi
        </div>
      </div>
      ";
  }

    elseif ($_GET['pesan'] == "sudah_pkl") {
       echo "
       <div class='alert alert-danger alert-dismissible' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <div class='alert-message'>
            Maaf anda sudah mengajukan Prakerin Sebelumnya
         </div>
       </div>
       ";
   }

     elseif ($_GET['pesan'] == "pengajuan_berhasil") {
        echo "
        <div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <div class='alert-message'>
           Selamat, pengajuan Prakerin anda berhasil.
          </div>
        </div>
        ";
    }

    elseif ($_GET['pesan'] == "pengajuan_gagal") {
       echo "
       <div class='alert alert-danger alert-dismissible' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <div class='alert-message'>
          Maaf, pengajuan Prakerin anda gagal.
         </div>
       </div>
       ";
   }

   elseif ($_GET['pesan'] == "konfirmasi-diijinkan-berhasil") {
      echo "
      <div class='alert alert-success alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <div class='alert-message'>
          Konfirmasi diijinkan Prakerin Berhasil
        </div>
      </div>
      ";
  }

  elseif ($_GET['pesan'] == "konfirmasi-diijinkan-gagal") {
     echo "
     <div class='alert alert-danger alert-dismissible' role='alert'>
     <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
       <div class='alert-message'>
         Konfirmasi diijinkan Prakerin Gagal
       </div>
     </div>
     ";
 }

     elseif ($_GET['pesan'] == "konfirmasi-ditolak-berhasil") {
        echo "
        <div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <div class='alert-message'>
            Konfirmasi ditolak Prakerin Berhasil
          </div>
        </div>
        ";
    }


       elseif ($_GET['pesan'] == "konfirmasi-ditolak-gagal") {
          echo "
          <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <div class='alert-message'>
              Konfirmasi ditolak Prakerin Gagal
            </div>
          </div>
          ";
      }


     elseif ($_GET['pesan'] == "konfirmasi_password_salah") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <div class='alert-message'>
            Konfirmasi Passowrd Anda Salah
          </div>
        </div>
        ";
    }


         elseif ($_GET['pesan'] == "password_update") {
            echo "
            <div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
              <div class='alert-message'>
                Password telah diubah
              </div>
            </div>
            ";
        }

        elseif ($_GET['pesan'] == "password_update_gagal") {
           echo "
           <div class='alert alert-danger alert-dismissible' role='alert'>
           <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
             <div class='alert-message'>
              Perubahan Password Anda Gagal
             </div>
           </div>
           ";
       }

       elseif ($_GET['pesan'] == "rapot_hapus") {
          echo "
          <div class='alert alert-success alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <div class='alert-message'>
              Rapot Berhasil <b>Dihapus</b>
            </div>
          </div>
          ";
      }

      elseif ($_GET['pesan'] == "tambah_rapot_berhasil") {
         echo "
         <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
           <div class='alert-message'>
             Tambah Rapot Berhasil
           </div>
         </div>
         ";
     }


     elseif ($_GET['pesan'] == "tambah_materi_berhasil") {
        echo "
        <div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <div class='alert-message'>
            Tambah Materi Berhasil
          </div>
        </div>
        ";
    }

    elseif ($_GET['pesan'] == "tambah_materi_gagal") {
       echo "
       <div class='alert alert-danger alert-dismissible' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <div class='alert-message'>
           Tambah Materi Gagal
         </div>
       </div>
       ";
   }
   elseif ($_GET['pesan'] == "upload_prakerin_berhasil") {
      echo "
      <div class='alert alert-primary alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <div class='alert-message'>
          Upload File Prakerin Berhasil
        </div>
      </div>
      ";
  }
  elseif ($_GET['pesan'] == "upload_prakerin_gagal") {
     echo "
     <div class='alert alert-primary alert-dismissible' role='alert'>
     <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
       <div class='alert-message'>
         Upload File Prakerin Gagal
       </div>
     </div>
     ";
 }
}
?>
