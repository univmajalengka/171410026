-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2019 pada 08.04
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rkptls_nilai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `nip` char(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`nip`, `nama`, `alamat`, `no_hp`, `jabatan`, `status`) VALUES
('1231', 'anita dewi', 'majalengka', '081222222', 'wali kelas', 'guru'),
('1232', 'budi', 'majalengka', '081333333', 'wali kelas', 'guru'),
('1233', 'nining', 'majalengka', '081444444', 'wali kelas', 'guru'),
('1234', 'elis', 'majalengka', '081555555', 'wali kelas', 'guru'),
('1235', 'memen', 'majalengka', '081666666', 'wali kelas', 'guru'),
('1236', 'iwan', 'majalengka', '081777777', 'wali kelas', 'guru'),
('1237', 'noviyanti', 'majalengka', '081888888', 'wali kelas', 'guru'),
('1238', 'septi', 'majalengka', '081999999', 'wali kelas', 'guru'),
('1239', 'zamzam', 'majalengka', '081000000', 'wali kelas', 'guru'),
('1240', 'tata tarna', 'majalengka', '081000001', 'wali kelas', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id_kelas` int(15) NOT NULL,
  `thn_ajar` varchar(10) NOT NULL,
  `tingkat` int(5) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL,
  `nis` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kelas`
--

INSERT INTO `data_kelas` (`id_kelas`, `thn_ajar`, `tingkat`, `nama_kelas`, `wali_kelas`, `nis`) VALUES
(1, '2005', 3, 'rpl 1', 'anita dewi', 1231),
(2, '2005', 3, 'rpl 2', 'budi', 1232),
(3, '2005', 3, 'rpl 3', 'nining', 1233),
(4, '2005', 3, 'tkr 1', 'elis', 1234),
(5, '2005', 3, 'tkr 2', 'memen', 1235),
(6, '2005', 3, 'tkr 3', 'iwan', 1236),
(7, '2005', 3, 'tkr 4', 'noviyanti', 1237),
(8, '2005', 3, 'tkr 5', 'septi', 1238),
(9, '2005', 3, 'tp 1', 'zamzam', 1239),
(10, '2005', 3, 'tp 2', 'tata tarna', 1240);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mata_diklat`
--

CREATE TABLE `data_mata_diklat` (
  `kode_md` char(15) NOT NULL,
  `tingkat` char(5) NOT NULL,
  `semester` char(2) NOT NULL,
  `jenis_md` varchar(30) NOT NULL,
  `mata_diklat` varchar(100) NOT NULL,
  `nip` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mata_diklat`
--

INSERT INTO `data_mata_diklat` (`kode_md`, `tingkat`, `semester`, `jenis_md`, `mata_diklat`, `nip`) VALUES
('101', '3', '2', 'materi', 'sejarah', '1231'),
('102', '3', '2', 'materi', 'matematika', '1232'),
('103', '3', '2', 'materi', 'bahasa inggris', '1233'),
('104', '3', '2', 'materi', 'bahasa indonesia', '1234'),
('105', '3', '2', 'praktek', 'olahraga', '1235'),
('106', '3', '2', 'materi', 'olahraga', '1236'),
('107', '3', '2', 'materi', 'pkn', '1237'),
('108', '3', '2', 'materi', 'pmrograman dasar', '1238'),
('109', '3', '2', 'praktek', 'olahraga', '1239'),
('110', '3', '2', 'materi', 'agama', '1240');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_nilai_mhs`
--

CREATE TABLE `data_nilai_mhs` (
  `id_nilai` char(15) NOT NULL,
  `thn_ajar` varchar(10) NOT NULL,
  `tingkat` char(2) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `kode_md` char(10) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_nilai_mhs`
--

INSERT INTO `data_nilai_mhs` (`id_nilai`, `thn_ajar`, `tingkat`, `nis`, `kode_md`, `nilai`) VALUES
('1111', '2005', '3', '111', '101', 85),
('1112', '2005', '3', '112', '102', 85),
('1113', '2005', '3', '113', '103', 90),
('1114', '2005', '3', '114', '104', 75),
('1115', '2005', '3', '115', '105', 78),
('1116', '2005', '3', '116', '106', 79),
('1117', '2005', '3', '117', '107', 85),
('1118', '2005', '3', '118', '108', 80),
('1119', '2005', '3', '119', '109', 77),
('1120', '2005', '3', '120', '110', 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nis` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` char(15) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` datetime NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jk` char(15) NOT NULL,
  `thn_masuk` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nis`, `nama`, `alamat`, `no_hp`, `tmp_lahir`, `tgl_lahir`, `agama`, `jk`, `thn_masuk`) VALUES
(111, 'alif', 'majalengka', '0811111111', 'majalengka', '1997-03-16 00:00:00', 'islam', 'laki-laki', '2005'),
(112, 'bella', 'majalengka', '082222222', 'ciamis', '1998-03-01 00:00:00', 'islam', 'perempuan', '2005'),
(113, 'cinta', 'majalengka', '083333333', 'cikijing', '1998-02-11 00:00:00', 'islam', 'perempuan', '2005'),
(114, 'denna', 'majalengka', '084444444', 'bandung', '1998-03-21 00:00:00', 'islam', 'perempuan', '2005'),
(115, 'eriska', 'majalengka', '085555555', 'bogor', '1998-07-01 00:00:00', 'islam', 'perempuan', '2005'),
(116, 'firman', 'majalengka', '086666666', 'majalengka', '1998-06-12 00:00:00', 'islam', 'laki-laki', '2005'),
(117, 'gugun', 'majalengka', '087777777', 'kuningan', '1999-03-21 00:00:00', 'islam', 'laki-laki', '2005'),
(118, 'heni', 'majalengka', '088888888', 'indramayu', '1997-03-02 00:00:00', 'islam', 'perempuan', '2005'),
(119, 'inda', 'majalengka', '089999999', 'cirebon', '1999-03-01 00:00:00', 'islam', 'perempuan', '2005'),
(120, 'jenni', 'majalengka', '081000000', 'majalengka', '1997-06-01 00:00:00', 'islam', 'laki-laki', '2005');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `data_mata_diklat`
--
ALTER TABLE `data_mata_diklat`
  ADD PRIMARY KEY (`kode_md`);

--
-- Indeks untuk tabel `data_nilai_mhs`
--
ALTER TABLE `data_nilai_mhs`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
