-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2021 at 03:11 PM
-- Server version: 10.2.38-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccum3985_sistem-pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_perubahan` varchar(30) NOT NULL,
  `sinkron_terakhir` varchar(30) NOT NULL,
  `no_surat_tugas` varchar(50) NOT NULL,
  `tgl_surat_tugas` varchar(30) NOT NULL,
  `thn_ajaran` varchar(20) NOT NULL,
  `sklh_induk` varchar(8) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `nik_guru` varchar(20) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `nama_ibu_kandung` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `nama_pasangan` varchar(100) NOT NULL,
  `pekerjaan_pasangan` varchar(100) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `nama_wajib_pajak` varchar(30) NOT NULL,
  `jenis_gtk` varchar(20) NOT NULL,
  `nuptk` varchar(30) NOT NULL,
  `status_peg` varchar(20) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `sk_cpns` varchar(50) NOT NULL,
  `tmt_cpns` varchar(20) NOT NULL,
  `tmt_sk_pengangkatan` varchar(20) NOT NULL,
  `sumber_gaji` varchar(30) NOT NULL,
  `pangkat_gol` varchar(30) NOT NULL,
  `tmt_pangkat_gol` varchar(20) NOT NULL,
  `masa_kerja` varchar(20) NOT NULL,
  `sk_pengangkatan` varchar(50) NOT NULL,
  `tmt_pengangkatan` varchar(20) NOT NULL,
  `lembaga_pengangkatan` varchar(100) NOT NULL,
  `kartu_pegawai` varchar(30) NOT NULL,
  `kartu_pasangan` varchar(30) NOT NULL,
  `kompetensi` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `status_kuliah` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tahun_pensiun` varchar(10) NOT NULL,
  `tugas_tambahan` varchar(100) NOT NULL,
  `tmt_tugas_tambahan` varchar(30) NOT NULL,
  `jml_jam_tugas_tambahan` varchar(30) NOT NULL,
  `jml_jam_mengajar` varchar(30) NOT NULL,
  `jml_mengajar_tugas_tmbh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `username`, `password`, `status`, `tgl_perubahan`, `sinkron_terakhir`, `no_surat_tugas`, `tgl_surat_tugas`, `thn_ajaran`, `sklh_induk`, `nama_guru`, `nik_guru`, `jk`, `tempat_lahir`, `tgl_lahir`, `nama_ibu_kandung`, `alamat`, `agama`, `status_perkawinan`, `nama_pasangan`, `pekerjaan_pasangan`, `npwp`, `nama_wajib_pajak`, `jenis_gtk`, `nuptk`, `status_peg`, `nip`, `sk_cpns`, `tmt_cpns`, `tmt_sk_pengangkatan`, `sumber_gaji`, `pangkat_gol`, `tmt_pangkat_gol`, `masa_kerja`, `sk_pengangkatan`, `tmt_pengangkatan`, `lembaga_pengangkatan`, `kartu_pegawai`, `kartu_pasangan`, `kompetensi`, `pendidikan_terakhir`, `status_kuliah`, `email`, `tahun_pensiun`, `tugas_tambahan`, `tmt_tugas_tambahan`, `jml_jam_tugas_tambahan`, `jml_jam_mengajar`, `jml_mengajar_tugas_tmbh`) VALUES
(1, 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru', '29-04-2021', '06-05-2021', '1', '26-05-2021', '1', '1', 'Aji Santo', '1', 'Laki-laki', '123', '26-05-2021', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(7, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '16-05-2021', '22', '2', '16-05-2021', '22', '2', 'admin', '2', 'Perempuan', '2', '02-05-2021', '2', '22', 'Kristen', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(8, 'guruuu', '202cb962ac59075b964b07152d234b70', 'guru', '28-05-2021', '28-05-2021', '1', '28-05-2021', '2021', '1', 'guru', '12', 'Laki-laki', 'Serang', '28-05-2021', 'Muneni', 'Kom. PU Air Kemang', 'Islam', 'kawin', 'guru', 'kerja', '123', 'pajak', 'produktif', 'nuptk', 'PNS', '1234567', '123', '13', '31', 'APBD', '1a', '1a', '5', '2021', '2021', 'sekolah', 'ada', 'ada', 'keahlian', 'sarjana', 'tidak', 'email', '2031', 'tidak', 'tidak', '0', '12', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_industri`
--

CREATE TABLE `tb_industri` (
  `id_industri` int(11) NOT NULL,
  `nama_industri` varchar(100) NOT NULL,
  `jenis_industri` varchar(100) NOT NULL,
  `link_industri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_industri`
--

INSERT INTO `tb_industri` (`id_industri`, `nama_industri`, `jenis_industri`, `link_industri`) VALUES
(7, 'PT. Lima Putra Contrindo', 'Industri Kendaraan Bermotor', 'lpc-ind.com'),
(8, 'PT. YASUNAGA', 'Industri Kendaraan Bermotor', 'www.fine-yasunaga.co.jp/english'),
(9, 'PT. YOOSIN INDONESIA', 'Industri Furniture', 'yooshinindonesia.com'),
(10, 'PT.SORINI CARGILL INDONESIA', 'Industri Perikanan', 'cargill.co.id'),
(11, 'PT. Prima Plast ', 'Industri Karet dan Plastik', 'primastraw.com'),
(12, 'PT. SAKURA NUSANTARA ', 'Industri Pengolahan Lainnya', 'sakura-nusantara.com'),
(13, 'BNI Syariah', 'Jasa Keuangan', 'www.bankbsi.co.id'),
(14, 'PT. DEIN', 'Industri Kendaraan Bermotor', 'deinindonesia.co.id'),
(15, 'STIE Dwi Mulya ', 'Jasa Administrasi Kantor', 'stiedwimulya.ac.id'),
(16, 'PT.CHAROEN POKHPHAND ', 'Industri Makanan', 'cp.co.id'),
(17, 'PT. Indah Kiat Pulp And Paper', 'Industri Kertas dan Barang dari Kertas ', 'www.ikserang.com/iks/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_pkl`
--

CREATE TABLE `tb_jadwal_pkl` (
  `id_jadwal_pkl` int(11) NOT NULL,
  `id_industri` varchar(20) NOT NULL,
  `tgl_mulai` varchar(20) NOT NULL,
  `tgl_selesai` varchar(20) NOT NULL,
  `kuota` varchar(5) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_pkl`
--

INSERT INTO `tb_jadwal_pkl` (`id_jadwal_pkl`, `id_industri`, `tgl_mulai`, `tgl_selesai`, `kuota`, `status`) VALUES
(4, '2', '14-10-2020', '26-11-2020', '10', 'buka'),
(6, '5', '01-05-2021', '01-05-2021', '1', 'buka'),
(7, '6', '16-05-2021', '17-05-2021', '20', 'buka'),
(8, '7', '27-05-2021', '27-06-2021', '3', 'buka');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Kendaraan Ringan Otomotif'),
(4, 'Teknik Pemesinan'),
(5, 'Teknik Instalasi Tenaga Listrik'),
(6, 'Otomasi Tata Kelola Perkantoran'),
(7, 'Akutansi Dan Keungan Lembaga');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkat` varchar(4) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kode_kelas` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `tingkat`, `jurusan`, `kode_kelas`) VALUES
(1, 'X', 'Teknik Kendaraan Ringan Otomotif', '1'),
(12, 'X', 'Teknik Kendaraan Ringan Otomotif', '2'),
(13, 'XI', 'Teknik Kendaraan Ringan Otomotif', '1'),
(14, 'XII', 'Teknik Kendaraan Ringan Otomotif', '1'),
(15, 'X', 'Teknik Pemesinan', '1'),
(16, 'X', 'Teknik Pemesinan', '2'),
(17, 'XI', 'Teknik Pemesinan', '1'),
(18, 'XI', 'Teknik Pemesinan', '2'),
(19, 'XII', 'Teknik Pemesinan', '1'),
(20, 'XII', 'Teknik Pemesinan', '2'),
(21, 'X', 'Teknik Instalasi Tenaga Listrik', '1'),
(22, 'XI', 'Teknik Instalasi Tenaga Listrik', '1'),
(23, 'XII', 'Teknik Instalasi Tenaga Listrik', '1'),
(24, 'X', 'Otomasi Tata Kelola Perkantoran', '1'),
(25, 'X', 'Otomasi Tata Kelola Perkantoran', '2'),
(26, 'XI', 'Otomasi Tata Kelola Perkantoran', '1'),
(28, 'XII', 'Otomasi Tata Kelola Perkantoran', '1'),
(29, 'XII', 'Otomasi Tata Kelola Perkantoran', '2'),
(30, 'X', 'Akutansi Dan Keungan Lembaga', '1'),
(31, 'X', 'Akutansi Dan Keungan Lembaga', '2'),
(32, 'XI', 'Akutansi Dan Keungan Lembaga', '1'),
(33, 'XI', 'Akutansi Dan Keungan Lembaga', '2'),
(35, 'XII', 'Akutansi Dan Keungan Lembaga', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `id_guru` varchar(100) NOT NULL,
  `id_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`, `id_guru`, `id_kelas`) VALUES
(1, 'Bahasa Indonesia', '7', '10'),
(4, 'Sejarah', '1', '10'),
(6, 'Bahasa Inggris', '1', '11'),
(7, 'Matematika', '7', '11'),
(8, 'mtk', '1', '15'),
(9, 'mtk', '1', '13'),
(10, 'otomotif', '8', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `id_mapel` varchar(50) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `file_materi` varchar(150) NOT NULL,
  `tgl_upload` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `id_mapel`, `nama_materi`, `file_materi`, `tgl_upload`) VALUES
(11, '6', 'Sejarah_Inggris', 'file_materi-Aji_Santo-Sejarah_Inggris.pdf', '26-05-2021  23:57'),
(12, '8', 'x', 'file_materi-Aji_Santo-x.pdf', '27-05-2021  18:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi_1`
--

CREATE TABLE `tb_materi_1` (
  `id_materi` int(11) NOT NULL,
  `id_mapel` varchar(50) NOT NULL,
  `id_guru` varchar(50) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `file_materi` varchar(150) NOT NULL,
  `tgl_upload` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi_1`
--

INSERT INTO `tb_materi_1` (`id_materi`, `id_mapel`, `id_guru`, `id_kelas`, `nama_materi`, `file_materi`, `tgl_upload`) VALUES
(7, '6', '1', '10', 'aaaa', 'file_materi-Aji aji tanpo pengaji-a.pdf', '23-05-2021  22:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_industri` varchar(15) NOT NULL,
  `nisn_siswa` varchar(15) NOT NULL,
  `tgl_pengajuan` varchar(15) NOT NULL,
  `tgl_mulai` varchar(15) NOT NULL,
  `tgl_selesai` varchar(15) NOT NULL,
  `tgl_konfirmasi` varchar(15) NOT NULL,
  `kondisi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `id_industri`, `nisn_siswa`, `tgl_pengajuan`, `tgl_mulai`, `tgl_selesai`, `tgl_konfirmasi`, `kondisi`) VALUES
(1, '2', '123', '26-05-2021', '14-10-2020', '26-11-2020', '', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis_siswa` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nisn_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `id_kelas` varchar(30) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `anak_ke` varchar(5) NOT NULL,
  `status_dlm_keluarga` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tgl_diterima` varchar(20) NOT NULL,
  `diterima_kelas` varchar(30) NOT NULL,
  `sms_diterima` varchar(2) NOT NULL,
  `asal_sklh` varchar(100) NOT NULL,
  `almt_asal_sklh` varchar(100) NOT NULL,
  `no_ijzh_smp` varchar(25) NOT NULL,
  `thn_ijzh_smp` varchar(5) NOT NULL,
  `no_skhun_smp` varchar(25) NOT NULL,
  `thn_skhun_smp` varchar(5) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat_orgtua` varchar(100) NOT NULL,
  `no_hp_orgtua` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `no_hp_wali` varchar(20) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `rapot_sms1` varchar(100) NOT NULL,
  `rapot_sms2` varchar(100) NOT NULL,
  `rapot_sms3` varchar(100) NOT NULL,
  `rapot_sms4` varchar(100) NOT NULL,
  `rapot_sms5` varchar(100) NOT NULL,
  `rapot_sms6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis_siswa`, `password`, `status`, `nisn_siswa`, `nama_siswa`, `id_kelas`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `anak_ke`, `status_dlm_keluarga`, `alamat`, `no_hp`, `tgl_diterima`, `diterima_kelas`, `sms_diterima`, `asal_sklh`, `almt_asal_sklh`, `no_ijzh_smp`, `thn_ijzh_smp`, `no_skhun_smp`, `thn_skhun_smp`, `nama_ayah`, `nama_ibu`, `alamat_orgtua`, `no_hp_orgtua`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `alamat_wali`, `no_hp_wali`, `pekerjaan_wali`, `rapot_sms1`, `rapot_sms2`, `rapot_sms3`, `rapot_sms4`, `rapot_sms5`, `rapot_sms6`) VALUES
(7, 3, 'c4ca4238a0b923820dcc509a6f75849b', 'siswa', 123, 'Santo', '11', 'Laki-laki', '3', '16-05-2021', 'Kristen', '3', '3', '3', '3', '16-05-2021', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '', '', 'rapot_sms3-id-7-123.pdf', 'rapot_sms4-id-7-123.pdf', 'rapot_sms5-id-7-123.pdf', 'rapot_sms6-id-7-123.pdf'),
(8, 3, 'c4ca4238a0b923820dcc509a6f75849b', 'siswa', 111, 'Agus', '10', 'Laki-laki', '3', '16-05-2021', 'Kristen', '3', '3', '3', '3', '16-05-2021', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '', '', 'rapot_sms3-id-7-123.pdf', 'rapot_sms4-id-7-123.pdf', 'rapot_sms5-id-7-123.pdf', 'rapot_sms6-id-7-123.pdf'),
(9, 11, '81dc9bdb52d04dc20036dbd8313ed055', 'siswa', 1234, 'budi', '1', 'Laki-laki', 'Serang', '10-07-2017', 'Islam', '2', 'kandung', 'Kom. PU Air Kemang', '0888', '27-05-2021', 'x', '1', 'smp', 'serang', '1', '2021', '2', '2021', 'ayah', 'ibu', 'serang', '0999', 'kerja', 'irt', '-', '-', '-', '-', '', '', '', '', '', ''),
(10, 12345, '827ccb0eea8a706c4c34a16891f84e7b', 'siswa', 12345, 'Santi', '13', 'Laki-laki', 'Serang', '27-05-2021', 'Islam', '1', 'Anak', 'Serang', '089', '27-05-2021', '1', '1', '1', 'Serang', '1', '1', '1', '1', 'ayah', 'ibu', 'serang', '089', 'serang', 'usaha', 'ayah', 'serang', '1', '1', '', '', '', '', '', ''),
(12, 123456, 'e10adc3949ba59abbe56e057f20f883e', 'siswa', 123456, 'aku', '15', 'Laki-laki', 'Serang', '28-05-2021', 'Islam', '1', 'kandung', 'Kom. PU Air Kemang', '1', '28-05-2021', 'x', '1', 'smp', 'serang', '1', '2021', '2', '2021', 'ayah', 'ibu', 'serang', '0999', 'kerja', 'irt', '-', '-', '-', '-', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_industri`
--
ALTER TABLE `tb_industri`
  ADD PRIMARY KEY (`id_industri`);

--
-- Indexes for table `tb_jadwal_pkl`
--
ALTER TABLE `tb_jadwal_pkl`
  ADD PRIMARY KEY (`id_jadwal_pkl`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tb_materi_1`
--
ALTER TABLE `tb_materi_1`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_industri`
--
ALTER TABLE `tb_industri`
  MODIFY `id_industri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_jadwal_pkl`
--
ALTER TABLE `tb_jadwal_pkl`
  MODIFY `id_jadwal_pkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_materi_1`
--
ALTER TABLE `tb_materi_1`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
