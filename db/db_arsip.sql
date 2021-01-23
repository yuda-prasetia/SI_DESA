-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2021 pada 08.06
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` int(30) NOT NULL,
  `jenis_pelayanan` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `nama`, `nik`, `jenis_pelayanan`, `tanggal`, `keterangan`) VALUES
(1, 'Rudi Widodo', 873568728, 'Membuat surat keterangan', '2020-12-29', 'selesai'),
(7, 'Fitriani', 2147483647, 'membuat surat miskin dan ', '2020-12-30', 'selesai'),
(8, 'Jaya Kesuma', 2147483647, 'Membuat surat keterangan', '2020-12-29', 'selesai'),
(9, 'Mahmudin', 2147483647, 'membuat surat tidak mampu', '2020-12-29', 'selesai'),
(10, 'Suroto', 2147483647, 'membuat surat pindah', '2020-12-29', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_perkara` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_perkara`, `peminjam`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('01/PID.B/2018/PN.KIS', 'A. Nasution', '2018-12-14', '2018-12-16', 2, '-', 4),
('01/PDT.G/2018/PN.KIS', 'J. Siahaan', '2018-12-10', 'Belum Kembali', 0, '-', 5),
('02/PID.B/2018/PN.KIS', 'Bejo', '2018-12-11', 'Belum Kembali', 0, 'Input ke CTS', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelayanan`
--

CREATE TABLE `tb_pelayanan` (
  `nama` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `jenis_pelayanan` varchar(30) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelayanan`
--

INSERT INTO `tb_pelayanan` (`nama`, `nik`, `jenis_pelayanan`, `tanggal`, `keterangan`) VALUES
('Rudi Widodo', '0873568728', 'membuat surat miskin dan nikah', '2020-12-22', 'selesai'),
('Jaya Kesuma', '08735687281', 'membuat surat tidak mampu', '2020-12-28', 'selesai'),
('Makmur', '11122223333', 'Membuat surat keterangan', '2020-12-28', 'selesai'),
('Anwar', '2147483647', 'membuat surat miskin dan nikah', '2020-12-22', 'selesai'),
('Fitriani', '873568728', 'Membuat surat pindah', '2020-12-15', ' selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id` int(10) NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `nomor_kk` int(20) NOT NULL,
  `kepala_keluarga` varchar(25) NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id`, `nomor_surat`, `nomor_kk`, `kepala_keluarga`, `jumlah`) VALUES
(1, '00123', 1122334466, 'muhadi putra', '5 orang'),
(3, '00125', 1122443355, 'Suroto putra', '6 orang'),
(4, '00126', 2147483647, 'Sunarto Siregar', '4 orang'),
(5, '00127', 2147483647, 'Fikri Akbar ', '6 orang'),
(15, '001234', 2147483647, 'padli hasibuan', '4 orang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'veri prabowo', 1, 'Staff Pelayanan Desa'),
('admin2', 'admin2', 'yuda@gmail.com', 'yuda prasetia', 2, 'Staff Pelayanan Desa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
