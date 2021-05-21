-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2021 at 07:59 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem-pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
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

INSERT INTO `tb_guru` (`id_guru`, `tgl_perubahan`, `sinkron_terakhir`, `no_surat_tugas`, `tgl_surat_tugas`, `thn_ajaran`, `sklh_induk`, `nama_guru`, `nik_guru`, `jk`, `tempat_lahir`, `tgl_lahir`, `nama_ibu_kandung`, `alamat`, `agama`, `status_perkawinan`, `nama_pasangan`, `pekerjaan_pasangan`, `npwp`, `nama_wajib_pajak`, `jenis_gtk`, `nuptk`, `status_peg`, `nip`, `sk_cpns`, `tmt_cpns`, `tmt_sk_pengangkatan`, `sumber_gaji`, `pangkat_gol`, `tmt_pangkat_gol`, `masa_kerja`, `sk_pengangkatan`, `tmt_pengangkatan`, `lembaga_pengangkatan`, `kartu_pegawai`, `kartu_pasangan`, `kompetensi`, `pendidikan_terakhir`, `status_kuliah`, `email`, `tahun_pensiun`, `tugas_tambahan`, `tmt_tugas_tambahan`, `jml_jam_tugas_tambahan`, `jml_jam_mengajar`, `jml_mengajar_tugas_tmbh`) VALUES
(1, '', '', '', '', '', '', 'Aji aji tanpo pengaji', '123', '123', '123', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '09-05-2021', '1', '1', '09-05-2021', '1', '1', '1', '1', '', '1', '', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

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
(2, 'Rekayasa Perangkat Lunak'),
(3, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkat` varchar(2) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kode_kelas` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `tingkat`, `jurusan`, `kode_kelas`) VALUES
(1, 'X', 'Teknik Kendaraan Ringan Otomotif', '1'),
(10, 'X', 'Rekayasa Perangkat Lunak', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_prakterin` varchar(100) NOT NULL,
  `nis_siswa` varchar(100) NOT NULL,
  `tgl_pengajuan` varchar(100) NOT NULL,
  `tgl_acc_pengajuan` varchar(20) NOT NULL,
  `mulai_pkl` varchar(20) NOT NULL,
  `selesai_pkl` varchar(20) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_prakerin`
--

CREATE TABLE `tb_prakerin` (
  `id_prakerin` int(11) NOT NULL,
  `nama_industri` varchar(100) NOT NULL,
  `jenis_industri` varchar(100) NOT NULL,
  `link_industri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis_siswa` int(11) NOT NULL,
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
  `pekerjaan_wali` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis_siswa`, `nisn_siswa`, `nama_siswa`, `id_kelas`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `anak_ke`, `status_dlm_keluarga`, `alamat`, `no_hp`, `tgl_diterima`, `diterima_kelas`, `sms_diterima`, `asal_sklh`, `almt_asal_sklh`, `no_ijzh_smp`, `thn_ijzh_smp`, `no_skhun_smp`, `thn_skhun_smp`, `nama_ayah`, `nama_ibu`, `alamat_orgtua`, `no_hp_orgtua`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `alamat_wali`, `no_hp_wali`, `pekerjaan_wali`) VALUES
(3, 0, 0, '', '', 'Perempuan', '', '', 'Islam', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1111, 2, '2', '10', 'Perempuan', '2', '2', 'Katolik', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2'),
(5, 0, 0, '', '', 'Laki-laki', '1', '13-05-2021', 'Islam', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 0, 0, '', '', 'Laki-laki', '1', '', 'Islam', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

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
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_prakerin`
--
ALTER TABLE `tb_prakerin`
  ADD PRIMARY KEY (`id_prakerin`);

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
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_prakerin`
--
ALTER TABLE `tb_prakerin`
  MODIFY `id_prakerin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
