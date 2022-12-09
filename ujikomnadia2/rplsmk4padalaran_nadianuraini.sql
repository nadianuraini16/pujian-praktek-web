-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2022 pada 16.37
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnilai_nadia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `kode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `jabatan`, `kode`) VALUES
('00234567', 'BU TIKA', 'GURU MATEMATIKA', '01'),
('0433224', 'JAEHYUN', 'Guru', '05'),
('09732645', 'PA ANGGA', 'KURIKULUM', '02'),
('355667778', 'BAEKHYUN', 'KESISWAAN', '05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kode` varchar(5) NOT NULL,
  `namamapel` varchar(12) NOT NULL,
  `guru` varchar(20) NOT NULL,
  `GURU_nip` varchar(20) NOT NULL,
  `NILAI_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kode`, `namamapel`, `guru`, `GURU_nip`, `NILAI_id`) VALUES
('01', 'MTK', 'IBU TIKAA', '00234567', 1),
('02', 'INDO', 'PA ANGGA ', '09732645', 2),
('03', 'inggris', 'BU WINDA', '09753321', 3),
('04', 'Agama', 'PA DAYAT', '00456345', 4),
('05', 'B.KOREA', 'BAEKHYUN', '355667778', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `mapel` varchar(7) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `nillai2` int(11) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `SISWA_nisn` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nisn`, `mapel`, `nilai1`, `nillai2`, `nilai3`, `SISWA_nisn`) VALUES
(0, '121522167', 'mandari', 90, 90, 83, '121522167'),
(1, '0052259888', 'MTK', 86, 80, 85, '0052259888'),
(2, '0057448172', 'MTK', 80, 90, 85, '0057448172'),
(3, '121522167', 'mandari', 90, 90, 90, '121522167'),
(5, '0069663064', 'inggris', 88, 89, 91, '0069663064'),
(6, '0055217321', 'Bahasa ', 100, 100, 100, '0055217321'),
(7, '534522322', 'INDO', 90, 90, 90, '534522322'),
(8, '667573567', 'mandari', 80, 80, 90, '667573567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(7) NOT NULL,
  `tanggallahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `kelas`, `tanggallahir`) VALUES
('0052259888', 'MUTIARA RAHAYU', 'XI RPL', '2005-11-12'),
('0053939591', 'RAMDAN RAMADANI', 'XI RPL', '2005-12-01'),
('0054377560', 'NANDA APRILIYANI', 'XI RPL', '2005-04-26'),
('0069663064', 'NADIA NUR AINI', 'XI RPL', '2006-01-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin2', '123', 'admin'),
(2, 'nadia', '1234', 'siswa'),
(3, 'guru', '12345', 'guru');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vnilaisiswa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vnilaisiswa` (
`nisn` varchar(12)
,`nama` varchar(30)
,`kelas` varchar(7)
,`mapel` varchar(7)
,`nilai1` int(11)
,`nillai2` int(11)
,`nilai3` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vnilaisiswa1`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vnilaisiswa1` (
`nisn` varchar(12)
,`nama` varchar(30)
,`kelas` varchar(7)
,`mapel` varchar(7)
,`rata_rata` decimal(16,4)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vnilaisiswa2`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vnilaisiswa2` (
`nisn` varchar(12)
,`nama` varchar(30)
,`kelas` varchar(7)
,`mapel` varchar(7)
,`nilai1` int(11)
,`nillai2` int(11)
,`nilai3` int(11)
,`rata_rata` decimal(16,4)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vnilaisiswa3`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vnilaisiswa3` (
`nisn` varchar(12)
,`nama` varchar(30)
,`kelas` varchar(7)
,`mapel` varchar(7)
,`rata_rata` decimal(16,4)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vnilaisiswa`
--
DROP TABLE IF EXISTS `vnilaisiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnilaisiswa`  AS SELECT `nilai`.`nisn` AS `nisn`, `siswa`.`nama` AS `nama`, `siswa`.`kelas` AS `kelas`, `nilai`.`mapel` AS `mapel`, `nilai`.`nilai1` AS `nilai1`, `nilai`.`nillai2` AS `nillai2`, `nilai`.`nilai3` AS `nilai3` FROM (`nilai` join `siswa` on(`nilai`.`nisn` = `siswa`.`nisn`))  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vnilaisiswa1`
--
DROP TABLE IF EXISTS `vnilaisiswa1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnilaisiswa1`  AS SELECT `nilai`.`nisn` AS `nisn`, `siswa`.`nama` AS `nama`, `siswa`.`kelas` AS `kelas`, `nilai`.`mapel` AS `mapel`, (`nilai`.`nilai1` + `nilai`.`nillai2` + `nilai`.`nilai3`) / 3 AS `rata_rata` FROM (`nilai` left join `siswa` on(`nilai`.`nisn` = `siswa`.`nisn`))  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vnilaisiswa2`
--
DROP TABLE IF EXISTS `vnilaisiswa2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnilaisiswa2`  AS SELECT `siswa`.`nisn` AS `nisn`, `siswa`.`nama` AS `nama`, `siswa`.`kelas` AS `kelas`, `nilai`.`mapel` AS `mapel`, `nilai`.`nilai1` AS `nilai1`, `nilai`.`nillai2` AS `nillai2`, `nilai`.`nilai3` AS `nilai3`, (`nilai`.`nilai1` + `nilai`.`nillai2` + `nilai`.`nilai3`) / 3 AS `rata_rata` FROM (`siswa` left join `nilai` on(`nilai`.`nisn` = `siswa`.`nisn`))  ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vnilaisiswa3`
--
DROP TABLE IF EXISTS `vnilaisiswa3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnilaisiswa3`  AS SELECT `nilai`.`nisn` AS `nisn`, `siswa`.`nama` AS `nama`, `siswa`.`kelas` AS `kelas`, `nilai`.`mapel` AS `mapel`, (`nilai`.`nilai1` + `nilai`.`nillai2` + `nilai`.`nilai3`) / 3 AS `rata_rata` FROM (`nilai` left join `siswa` on(`nilai`.`nisn` = `siswa`.`nisn`))  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `GURU_nip` (`GURU_nip`),
  ADD UNIQUE KEY `NILAI_id` (`NILAI_id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
