-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Des 2018 pada 14.28
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_cuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cuti`
--

CREATE TABLE `tbl_cuti` (
  `id_cuti` int(5) NOT NULL,
  `id_karyawan` int(15) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cuti`
--

INSERT INTO `tbl_cuti` (`id_cuti`, `id_karyawan`, `nama_user`, `tgl_mulai`, `tgl_selesai`, `keterangan`, `status`) VALUES
(4, 234234, 'fadillah', '2018-12-17', '2018-12-31', 'hfghfghfgh', 'ditolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_karyawan` int(15) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `level` varchar(10) NOT NULL,
  `no_ktp` int(35) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_karyawan`, `nama_user`, `username`, `password`, `alamat`, `jenis_kelamin`, `email`, `jabatan`, `level`, `no_ktp`, `foto`) VALUES
(134, 'saber', 'rem', '1c38fdda510562e4a0a14964f5f8315f', 'qwer', 'laki-laki', 'sad', 'asdf', 'pimpinan', 1231, '1545370964aax4oNdR_700w_0.jpg'),
(234234, 'alvi fadillah', 'alvi', '48e6c963581059f1fd775cc5a485ade3', 'graha prima baru blok t3a no 23a tambun selatan bekasi', 'laki-laki', 'user@app.com', 'user', 'admin', 1234, '1544944558aGj7y65_460s.jpg'),
(1123123, 'alvi fadiullah', 'rem', '0dc62c02f5ea9467243814140cd549af', 'qwer', 'perempuan', 'dfsa', 'user', 'user', 1234, '1545370987aer0Wq5_460s.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `fk_cuti` (`id_karyawan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD UNIQUE KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  MODIFY `id_cuti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_cuti`
--
ALTER TABLE `tbl_cuti`
  ADD CONSTRAINT `fk_cuti` FOREIGN KEY (`id_karyawan`) REFERENCES `tbl_user` (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
