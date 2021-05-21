<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_siswa = $_POST['id_siswa'];
$nis_siswa = $_POST['nis_siswa'];
$nisn_siswa = $_POST['nisn_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$id_kelas = $_POST['id_kelas'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$anak_ke = $_POST['anak_ke'];
$status_dlm_keluarga = $_POST['status_dlm_keluarga'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$tgl_diterima = $_POST['tgl_diterima'];
$diterima_kelas = $_POST['diterima_kelas'];
$sms_diterima = $_POST['sms_diterima'];
$asal_sklh = $_POST['asal_sklh'];
$almt_asal_sklh = $_POST['almt_asal_sklh'];
$no_ijzh_smp = $_POST['no_ijzh_smp'];
$thn_ijzh_smp = $_POST['thn_ijzh_smp'];
$no_skhun_smp = $_POST['no_skhun_smp'];
$thn_skhun_smp = $_POST['thn_skhun_smp'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat_orgtua = $_POST['alamat_orgtua'];
$no_hp_orgtua = $_POST['no_hp_orgtua'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$nama_wali = $_POST['nama_wali'];
$alamat_wali = $_POST['alamat_wali'];
$no_hp_wali = $_POST['no_hp_wali'];
$pekerjaan_wali = $_POST['pekerjaan_wali'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_siswa SET
        nis_siswa='$nis_siswa',
        nisn_siswa='$nisn_siswa',
        nama_siswa='$nama_siswa',
        id_kelas='$id_kelas',
        jk='$jk',
        tempat_lahir='$tempat_lahir',
        tgl_lahir='$tgl_lahir',
        agama='$agama',
        anak_ke='$anak_ke',
        status_dlm_keluarga='$status_dlm_keluarga',
        alamat='$alamat',
        no_hp='$no_hp',
        tgl_diterima='$tgl_diterima',
        diterima_kelas='$diterima_kelas',
        sms_diterima='$sms_diterima',
        asal_sklh='$asal_sklh',
        almt_asal_sklh='$almt_asal_sklh',
        no_ijzh_smp='$no_ijzh_smp',
        thn_ijzh_smp='$thn_ijzh_smp',
        no_skhun_smp='$no_skhun_smp',
        thn_skhun_smp='$thn_skhun_smp',
        nama_ayah='$nama_ayah',
        nama_ibu='$nama_ibu',
        alamat_orgtua='$alamat_orgtua',
        no_hp_orgtua='$no_hp_orgtua',
        pekerjaan_ayah='$pekerjaan_ayah',
        pekerjaan_ibu='$pekerjaan_ibu',
        nama_wali='$nama_wali',
        alamat_wali='$alamat_wali',
        no_hp_wali='$no_hp_wali',
        pekerjaan_wali='$pekerjaan_wali'
        where id_siswa='$id_siswa'
        ");


if ($cek_edit) {
  echo "edit berhasil";
    header("location:siswa_detail.php?id_siswa=$id_siswa&pesan=edit-berhasil");
} else {
  echo "edit gagal";
    header("location:siswa_detail.php?id_siswa=$id_siswa&pesan=edit-gagal");
}
