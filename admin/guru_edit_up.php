<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_guru = $_POST['id_guru'];
$tgl_perubahan = $_POST['tgl_perubahan'];
$sinkron_terakhir = $_POST['sinkron_terakhir'];
$no_surat_tugas = $_POST['no_surat_tugas'];
$tgl_surat_tugas = $_POST['tgl_surat_tugas'];
$thn_ajaran = $_POST['thn_ajaran'];
$sklh_induk = $_POST['sklh_induk'];
$nama_guru = $_POST['nama_guru'];
$nik_guru = $_POST['nik_guru'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$nama_ibu_kandung = $_POST['nama_ibu_kandung'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$status_perkawinan = $_POST['status_perkawinan'];
$nama_pasangan = $_POST['nama_pasangan'];
$pekerjaan_pasangan = $_POST['pekerjaan_pasangan'];
$npwp = $_POST['npwp'];
$nama_wajib_pajak = $_POST['nama_wajib_pajak'];
$jenis_gtk = $_POST['jenis_gtk'];
$nuptk = $_POST['nuptk'];
$status_peg = $_POST['status_peg'];
$nip = $_POST['nip'];
$sk_cpns = $_POST['sk_cpns'];
$tmt_cpns = $_POST['tmt_cpns'];
$tmt_sk_pengangkatan = $_POST['tmt_sk_pengangkatan'];
$sumber_gaji = $_POST['sumber_gaji'];
$pangkat_gol = $_POST['pangkat_gol'];
$tmt_pangkat_gol = $_POST['tmt_pangkat_gol'];
$masa_kerja = $_POST['masa_kerja'];
$sk_pengangkatan = $_POST['sk_pengangkatan'];
$tmt_pengangkatan = $_POST['tmt_pengangkatan'];
$lembaga_pengangkatan = $_POST['lembaga_pengangkatan'];
$kartu_pegawai = $_POST['kartu_pegawai'];
$kartu_pasangan = $_POST['kartu_pasangan'];
$kompetensi = $_POST['kompetensi'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$status_kuliah = $_POST['status_kuliah'];
$email = $_POST['email'];
$tahun_pensiun = $_POST['tahun_pensiun'];
$tugas_tambahan = $_POST['tugas_tambahan'];
$tmt_tugas_tambahan = $_POST['tmt_tugas_tambahan'];
$jml_jam_tugas_tambahan = $_POST['jml_jam_tugas_tambahan'];
$jml_jam_mengajar = $_POST['jml_jam_mengajar'];
$jml_mengajar_tugas_tmbh = $_POST['jml_mengajar_tugas_tmbh'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_guru SET
        tgl_perubahan='$tgl_perubahan',
        sinkron_terakhir='$sinkron_terakhir',
        no_surat_tugas='$no_surat_tugas',
        tgl_surat_tugas='$tgl_surat_tugas',
        thn_ajaran='$thn_ajaran',
        sklh_induk='$sklh_induk',
        nama_guru='$nama_guru',
        nik_guru='$nik_guru',
        jk='$jk',
        tempat_lahir='$tempat_lahir',
        tgl_lahir='$tgl_lahir',
        nama_ibu_kandung='$nama_ibu_kandung',
        alamat='$alamat',
        status_perkawinan='$status_perkawinan',
        nama_pasangan='$nama_pasangan',
        pekerjaan_pasangan='$pekerjaan_pasangan',
        npwp='$npwp',
        nama_wajib_pajak='$nama_wajib_pajak',
        jenis_gtk='$jenis_gtk',
        nuptk='$nuptk',
        status_peg='$status_peg',
        nip='$nip',
        sk_cpns='$sk_cpns',
        tmt_cpns='$tmt_cpns',
        tmt_sk_pengangkatan='$tmt_sk_pengangkatan',
        sumber_gaji='$sumber_gaji',
        pangkat_gol='$pangkat_gol',
        tmt_pangkat_gol='$tmt_pangkat_gol',
        masa_kerja='$masa_kerja',
        sk_pengangkatan='$sk_pengangkatan',
        tmt_pengangkatan='$tmt_pengangkatan',
        lembaga_pengangkatan='$lembaga_pengangkatan',
        kartu_pegawai='$kartu_pegawai',
        kartu_pasangan='$kartu_pasangan',
        kompetensi='$kompetensi',
        pendidikan_terakhir='$pendidikan_terakhir',
        status_kuliah='$status_kuliah',
        email='$email',
        tahun_pensiun='$tahun_pensiun',
        tugas_tambahan='$tugas_tambahan',
        tmt_tugas_tambahan='$tmt_tugas_tambahan',
        jml_jam_tugas_tambahan='$jml_jam_tugas_tambahan',
        jml_jam_mengajar='$jml_jam_mengajar',
        jml_mengajar_tugas_tmbh='$jml_mengajar_tugas_tmbh'
        where id_guru='$id_guru'
        ");

if ($cek_edit) {
  echo "edit berhasil";
    header("location:guru.php?id_guru=$id_guru&pesan=edit-berhasil");
} else {
  echo "edit gagal";
    header("location:guru.php?id_guru=$id_guru&pesan=edit-gagal");
}
