-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 09:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok_pse`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggaran`
--

CREATE TABLE `data_pelanggaran` (
  `id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `poin` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pelanggaran`
--

INSERT INTO `data_pelanggaran` (`id`, `nis`, `jenis`, `poin`, `tanggal`) VALUES
(1, '1255', 'membolos', 50, '2023-07-29'),
(2, '1255', 'membolos', 50, '2023-07-08'),
(3, '1212', 'membolos', 50, '2023-07-27'),
(4, '1212', 'membolos', 70, '2023-07-28'),
(5, '10221', 'membolos', 50, '2023-07-28'),
(6, '1212', 'membolos', 50, '2023-07-21');

--
-- Triggers `data_pelanggaran`
--
DELIMITER $$
CREATE TRIGGER `nama_trigger` AFTER INSERT ON `data_pelanggaran` FOR EACH ROW BEGIN
    DECLARE var1 VARCHAR(255);
    SELECT nis INTO var1 FROM pelanggaran WHERE nis = NEW.nis;

    IF var1 IS NULL THEN
        INSERT INTO pelanggaran (nis, total_poin) VALUES (NEW.nis,NEW.poin);
    ELSE
        UPDATE pelanggaran SET total_poin = new.poin + total_poin WHERE nis = NEW.nis;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dispensasi`
--

CREATE TABLE `dispensasi` (
  `kode_dispen` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispensasi`
--

INSERT INTO `dispensasi` (`kode_dispen`, `nis`, `tanggal`, `keterangan`) VALUES
(1, '10221', '2023-07-21', 'bolos');

-- --------------------------------------------------------

--
-- Table structure for table `guru_dan_staf`
--

CREATE TABLE `guru_dan_staf` (
  `id_guru` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jabatan` enum('Admin','Guru','karyawan') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `sk` varchar(100) NOT NULL,
  `status` enum('Honorer','PNS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru_dan_staf`
--

INSERT INTO `guru_dan_staf` (`id_guru`, `nama_guru`, `jenis_kelamin`, `alamat`, `no_hp`, `tempat_lahir`, `tgl_lahir`, `jabatan`, `foto`, `sk`, `status`) VALUES
('111', 'sumi', 'Laki-Laki', '', '', '', '0000-00-00', 'Guru', '', '', 'Honorer'),
('121', 'Guntur', 'Laki-Laki', 'batang', '345678', 'btg', '2023-03-02', 'Admin', '', '', 'Honorer'),
('123', 'Supriyanto', 'Laki-Laki', '', '', '', '0000-00-00', 'Guru', '1684981264_e5455e6d1adb2630d566.jpg', '1687397552_754d0128f5301123d2a7.png', 'PNS'),
('V23', 'view', 'Perempuan', '', '', '', '0000-00-00', 'Admin', '', '', 'Honorer');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(10) NOT NULL,
  `id_mapel` varchar(10) NOT NULL,
  `id_ruang` varchar(10) NOT NULL,
  `id_guru` varchar(20) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_mapel`, `id_ruang`, `id_guru`, `hari`, `jam_awal`, `jam_akhir`) VALUES
('I-12', 'C23', 'F13', '123', 'Rabu', '06:05:00', '06:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `kalender`
--

CREATE TABLE `kalender` (
  `id_kalender` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalender`
--

INSERT INTO `kalender` (`id_kalender`, `tanggal`, `keterangan`) VALUES
(1, '2023-07-28', 'Hari Raya Idul Adha');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
('10', '11'),
('11', '10'),
('12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `kelola_ujian`
--

CREATE TABLE `kelola_ujian` (
  `id` int(11) NOT NULL,
  `id_guru` varchar(20) DEFAULT NULL,
  `id_mapel` varchar(10) DEFAULT NULL,
  `id_ruang` varchar(10) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelola_ujian`
--

INSERT INTO `kelola_ujian` (`id`, `id_guru`, `id_mapel`, `id_ruang`, `tanggal`, `jam_masuk`, `jam_keluar`) VALUES
(1, '10250', 'C11', 'A12', '2023-07-05', '22:17:00', '16:23:00'),
(14, '10253', 'C22', 'A15', '2023-08-04', '16:36:00', '19:31:00'),
(15, '10254', 'C22', 'A16', '2023-07-07', '13:00:00', '13:30:00'),
(16, '10253', 'C11', 'A12', '2023-07-07', '14:30:00', '15:00:00'),
(17, '123', 'C23', 'A12', '2023-07-27', '12:40:00', '12:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `konseling`
--

CREATE TABLE `konseling` (
  `kode_konseling` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konseling`
--

INSERT INTO `konseling` (`kode_konseling`, `nis`, `tanggal`, `perihal`) VALUES
(1, '1212', '2023-07-29', 'masalah keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id_kurikulum` varchar(11) NOT NULL,
  `kompetensi_dasar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id_kurikulum`, `kompetensi_dasar`, `deskripsi`) VALUES
('KD-13', 'CI4', 'membuat cI4');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `pertemuan` varchar(100) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `id_guru` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`pertemuan`, `materi`, `id_guru`) VALUES
('Pertemuan 1', 'Membuat Crud', '123'),
('pertemuan 2', 'Uji hasil', '123');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
('C11', 'Simulasi dan Komunikasi Digital'),
('C12', 'Fisika dasar'),
('C13', 'Kimia'),
('C21', 'Sistem Komputer'),
('C22', 'Komputer dan Jaringan Dasar'),
('C23', 'Pemrograman Dasar'),
('C24', 'Dasar Desain Grafis'),
('C31', 'Teknologi Jaringan Berbasis Luas (WAN)'),
('C32', 'Administrasi Infrastruktur Jaringan'),
('C33', 'Administrasi Sistem Jaringan'),
('C34', 'Teknologi Layanan Jaringan'),
('C35', 'Produk Kreatif dan Kewirausahaan');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `semester`, `nilai`) VALUES
(1, '10242', 1, 6.38462),
(2, '1255', 2, 4.84615),
(3, '1212', 1, 0),
(4, '10221', 1, 0),
(5, '1121', 1, 2.69231);

--
-- Triggers `nilai`
--
DELIMITER $$
CREATE TRIGGER `tambah` AFTER INSERT ON `nilai` FOR EACH ROW INSERT INTO nilai_all_guru(nis,semester) VALUES(new.nis,new.semester)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_all_guru`
--

CREATE TABLE `nilai_all_guru` (
  `nis` varchar(10) NOT NULL,
  `semester` int(11) NOT NULL,
  `indonesia` int(11) NOT NULL,
  `inggris` int(11) NOT NULL,
  `pai` int(11) NOT NULL,
  `ppkn` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `kimia` int(11) NOT NULL,
  `fisika` int(11) NOT NULL,
  `jawa` int(11) NOT NULL,
  `kwu` int(11) NOT NULL,
  `penjas` int(11) NOT NULL,
  `jurusan_1` int(11) NOT NULL,
  `jurusan_2` int(11) NOT NULL,
  `jurusan_3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_all_guru`
--

INSERT INTO `nilai_all_guru` (`nis`, `semester`, `indonesia`, `inggris`, `pai`, `ppkn`, `mtk`, `kimia`, `fisika`, `jawa`, `kwu`, `penjas`, `jurusan_1`, `jurusan_2`, `jurusan_3`) VALUES
('10242', 1, 83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1255', 2, 63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1212', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('10221', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1121', 1, 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Triggers `nilai_all_guru`
--
DELIMITER $$
CREATE TRIGGER `rata` AFTER UPDATE ON `nilai_all_guru` FOR EACH ROW UPDATE nilai set nilai = ( NEW.indonesia+new.inggris+new.pai+new.ppkn+new.mtk+new.kimia+new.fisika+new.jawa+new.kwu+new.penjas+new.jurusan_1+new.jurusan_2+new.jurusan_3)/13  WHERE nis = NEW.nis && semester = new.semester
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mapel`
--

CREATE TABLE `nilai_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `id_guru` varchar(20) NOT NULL,
  `tugas1` int(11) NOT NULL,
  `tugas2` int(11) NOT NULL,
  `tugas3` int(11) NOT NULL,
  `tugas4` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `keterangan_rata` enum('Tidak Terpenuhi','Terpenuhi','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_mapel`
--

INSERT INTO `nilai_mapel` (`id_mapel`, `nis`, `id_guru`, `tugas1`, `tugas2`, `tugas3`, `tugas4`, `uts`, `uas`, `keterangan_rata`) VALUES
(1, '10242', '123', 70, 80, 80, 70, 100, 100, 'Terpenuhi'),
(2, '1255', '123', 90, 50, 60, 50, 90, 40, 'Tidak Terpenuhi'),
(3, '1212', '123', 0, 0, 0, 0, 0, 0, 'Tidak Terpenuhi'),
(4, '10221', '123', 0, 0, 0, 0, 0, 0, 'Tidak Terpenuhi'),
(5, '1121', '123', 70, 70, 70, 0, 0, 0, 'Tidak Terpenuhi');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `total_poin` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `nis`, `total_poin`) VALUES
(1, '1255', 100),
(2, '1212', 170),
(3, '10221', 50);

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `HADIR` int(11) NOT NULL,
  `IJIN` int(11) NOT NULL,
  `ALPHA` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `presentase` int(11) NOT NULL,
  `pertemuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `nis`, `HADIR`, `IJIN`, `ALPHA`, `total`, `presentase`, `pertemuan`) VALUES
(1, '10242', 1, 0, 0, 1, 100, 1),
(2, '1255', 1, 0, 0, 1, 100, 1),
(3, '1212', 1, 0, 0, 1, 100, 1),
(4, '10221', 1, 0, 0, 1, 100, 1),
(5, '1121', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `presensi_total`
--

CREATE TABLE `presensi_total` (
  `nis` varchar(100) NOT NULL,
  `keterangan` enum('hadir','ijin','alpha','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi_total`
--

INSERT INTO `presensi_total` (`nis`, `keterangan`) VALUES
('10242', 'hadir'),
('1255', 'hadir'),
('1212', 'hadir'),
('10221', 'hadir'),
('1121', 'hadir');

--
-- Triggers `presensi_total`
--
DELIMITER $$
CREATE TRIGGER `absen` AFTER UPDATE ON `presensi_total` FOR EACH ROW BEGIN
  IF new.keterangan = "hadir" THEN BEGIN
    UPDATE presensi SET HADIR = HADIR + 1 WHERE nis = old.nis;
     UPDATE presensi SET total = HADIR + IJIN WHERE nis = old.nis;
      UPDATE presensi SET pertemuan = pertemuan + 1 WHERE nis = old.nis;
       UPDATE presensi SET presentase = total / pertemuan * 100 WHERE nis = old.nis;
  END; END IF;
    IF new.keterangan = "ijin" THEN
    BEGIN
    UPDATE presensi SET IJIN = IJIN + 1 WHERE nis = old.nis;
     UPDATE presensi SET total = HADIR + IJIN WHERE nis = old.nis;
      UPDATE presensi SET pertemuan = pertemuan + 1 WHERE nis = old.nis;
       UPDATE presensi SET presentase = total / pertemuan * 100 WHERE nis = old.nis;
  END; END IF;
    IF new.keterangan = "alpha" THEN BEGIN
    UPDATE presensi SET ALPHA = ALPHA + 1 WHERE nis = old.nis;
     UPDATE presensi SET pertemuan = pertemuan + 1 WHERE nis = old.nis;
       UPDATE presensi SET presentase = total / pertemuan * 100 WHERE nis = old.nis;
  END; END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `regalisir`
--

CREATE TABLE `regalisir` (
  `id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` enum('BELUM REGALISIR','SUDAH REGALISIR') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regalisir`
--

INSERT INTO `regalisir` (`id`, `nis`, `file`, `status`) VALUES
(1, '1212', '1688767375_162e9efa79783b98def9.png', 'SUDAH REGALISIR'),
(2, '1255', '1688767402_073e54804888bf0c001a.png', 'SUDAH REGALISIR'),
(3, '10242', '1688767412_8d5af43a62ee6151e4ae.png', 'SUDAH REGALISIR'),
(4, '10221', '', 'BELUM REGALISIR');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` varchar(10) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`) VALUES
('A12', 'Ruang teori '),
('A19', 'Ruang teori '),
('F13', 'Lab Tkj'),
('F14', 'Lab Tkj'),
('F24', 'Ruang Teori'),
('F25', 'Ruang Teori');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `agama` enum('Islam','Kristen','Budha','Hindu','Konghucu','Lainya') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jurusan` enum('TKJ','AK','PM','BDP','MM','PBS') NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `jurusan`, `no_hp`, `id_kelas`) VALUES
('10221', 'Dewi', 'batang', '2023-07-08', 'Laki-Laki', 'Kristen', 'werfg', 'PM', '123456789p', '10'),
('10242', 'GUNTUR', 'Batang', '2023-07-07', 'Laki-Laki', 'Islam', 'Lawangaji', 'TKJ', '0987654321', '10'),
('1121', 'apep', 'Batang', '2023-07-09', 'Perempuan', 'Konghucu', 'pjhfsfghj.', 'TKJ', '123456789p', '10'),
('1212', 'Riska', 'Batang', '2023-07-07', 'Laki-Laki', 'Islam', 'Batang', 'AK', '098765432122', '10'),
('1255', 'Antok', 'batang', '2023-07-07', 'Perempuan', 'Islam', 'subah', 'TKJ', '098765432122', '11');

--
-- Triggers `siswa`
--
DELIMITER $$
CREATE TRIGGER `nilai` AFTER INSERT ON `siswa` FOR EACH ROW INSERT INTO nilai(nis,semester) VALUES (new.nis,new.id_kelas-9)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `nilai mapel` AFTER INSERT ON `siswa` FOR EACH ROW INSERT INTO nilai_mapel(nis,id_guru) VALUES (new.nis,"123")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `presensi` AFTER INSERT ON `siswa` FOR EACH ROW INSERT INTO presensi(nis) VALUES (new.nis)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `presensi_total` AFTER INSERT ON `siswa` FOR EACH ROW INSERT INTO presensi_total(nis) VALUES (new.nis)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `no_surat` varchar(50) NOT NULL,
  `hal` text NOT NULL,
  `nis` varchar(10) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `keperluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`no_surat`, `hal`, `nis`, `hari`, `tanggal`, `waktu`, `keperluan`) VALUES
('ss-12-12', 'sanksi berat', '1255', 'selasa', '2023-07-09', 'jam 6', 'keperluan tindak lanjut DO');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `prihal` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` enum('Menunggu Disposisi','Sudah Disposisi','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat`, `no_surat`, `pengirim`, `prihal`, `tgl_keluar`, `file`, `status`) VALUES
(6, '11/ABC/X/2023', 'DINAS PENDIDIKAN ', 'PERMOHONAN hahha', '2023-06-15', '1687170499_f7415220ac4573ef3de8.jpg', 'Menunggu Disposisi');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `prihal` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` enum('Menunggu Disposisi','Sudah Disposisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `no_surat`, `pengirim`, `prihal`, `tgl_masuk`, `file`, `status`) VALUES
(1, '11/ABC/X/2023', 'DINAS PENDIDIKAN', 'UNDANGAN\\', '2012-02-11', '1688765534_c5925a3c26e12fac193e.png', 'Sudah Disposisi'),
(3, '12/DIL/II/2023', 'UKM PK', 'PROGRES 10', '2023-06-21', '1687321690_2eb710283166a54d0898.png', 'Menunggu Disposisi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_guru` varchar(20) NOT NULL,
  `akses` enum('guru','admin','kepsek','bk','kurikulum') NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `id_guru`, `akses`, `nama`, `created_at`, `updated_at`) VALUES
('bk', '123', 'V23', 'bk', 'bk_new', '2023-07-08 21:33:03', '2023-07-08 21:41:18'),
('guntur', '123', '121', 'admin', 'guntur', '2023-05-24 12:46:07', '2023-05-24 12:46:07'),
('guru', '123', '123', 'guru', 'Supriyanto', '2023-05-24 12:46:31', '2023-05-24 12:46:31'),
('kepsek', '123', '111', 'kepsek', 'kepsek', '2023-06-10 10:24:39', '2023-06-10 10:24:39'),
('kurikulum', '123', '111', 'kurikulum', 'Asih', '2023-07-09 05:35:23', '2023-07-09 05:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pelanggaran`
--
ALTER TABLE `data_pelanggaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `dispensasi`
--
ALTER TABLE `dispensasi`
  ADD PRIMARY KEY (`kode_dispen`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `guru_dan_staf`
--
ALTER TABLE `guru_dan_staf`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id_kalender`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelola_ujian`
--
ALTER TABLE `kelola_ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indexes for table `konseling`
--
ALTER TABLE `konseling`
  ADD PRIMARY KEY (`kode_konseling`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `nilai_all_guru`
--
ALTER TABLE `nilai_all_guru`
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `nilai_mapel`
--
ALTER TABLE `nilai_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `presensi_total`
--
ALTER TABLE `presensi_total`
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `regalisir`
--
ALTER TABLE `regalisir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_guru` (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pelanggaran`
--
ALTER TABLE `data_pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dispensasi`
--
ALTER TABLE `dispensasi`
  MODIFY `kode_dispen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id_kalender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelola_ujian`
--
ALTER TABLE `kelola_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `konseling`
--
ALTER TABLE `konseling`
  MODIFY `kode_konseling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai_mapel`
--
ALTER TABLE `nilai_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regalisir`
--
ALTER TABLE `regalisir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pelanggaran`
--
ALTER TABLE `data_pelanggaran`
  ADD CONSTRAINT `data_pelanggaran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `dispensasi`
--
ALTER TABLE `dispensasi`
  ADD CONSTRAINT `dispensasi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru_dan_staf` (`id_guru`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Constraints for table `konseling`
--
ALTER TABLE `konseling`
  ADD CONSTRAINT `konseling_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru_dan_staf` (`id_guru`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `nilai_all_guru`
--
ALTER TABLE `nilai_all_guru`
  ADD CONSTRAINT `nilai_all_guru_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `nilai_mapel`
--
ALTER TABLE `nilai_mapel`
  ADD CONSTRAINT `nilai_mapel_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `nilai_mapel_ibfk_4` FOREIGN KEY (`id_guru`) REFERENCES `guru_dan_staf` (`id_guru`);

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `presensi_total`
--
ALTER TABLE `presensi_total`
  ADD CONSTRAINT `presensi_total_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `presensi` (`nis`);

--
-- Constraints for table `regalisir`
--
ALTER TABLE `regalisir`
  ADD CONSTRAINT `regalisir_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru_dan_staf` (`id_guru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
