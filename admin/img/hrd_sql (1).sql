-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2019 pada 05.44
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrd_sql`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `alasan` varchar(200) NOT NULL,
  `mulaicuti` varchar(200) NOT NULL,
  `selesaicuti` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `nama`, `tujuan`, `alasan`, `mulaicuti`, `selesaicuti`, `status`, `id_user`) VALUES
(1, 'Dosen', 'asd', 'asd', '01-01-2010', '01-01-2010', 'Di panggil', 5),
(2, 'Dosen', 'asd', 'asd', '01-05-2013', '01-01-2009', '', 5),
(3, 'Dosen', 'benar', 'mmmm', '01-01-2010', '01-01-2010', '', 5),
(4, 'Dosen', 'asd', 'asd', '01-01-2009', '01-01-2009', '', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nama`, `kategori`) VALUES
(1, 'Marthin Halomoan Tampubolon', 'dosen'),
(3, 'asd', 'dosen'),
(4, 'test last', 'asd'),
(5, 'test last', 'test2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1=Active,0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`file_id`, `name`, `file`, `kategori`) VALUES
(1, 'See-Full-Instructions-Call-of-Duty-Black-Ops4-V2', 'files/See-Full-Instructions-Call-of-Duty-Black-Ops4-V2.pdf', ''),
(2, 'Solutions3_1', 'files/Solutions3_1.pdf', ''),
(3, 'Middleware adalah aplikasi yang secara logis hidup (2)', 'files/Middleware adalah aplikasi yang secara logis hidup (2).docx', ''),
(4, 'ART_Partition', 'files/ART_Partition.pdf', ''),
(5, 'PhD Thesis Perbellini', 'files/PhD Thesis Perbellini.pdf', 'asdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id`, `keterangan`, `tanggal`) VALUES
(1, 'adsa', '2222-01-31'),
(2, 'asd', '2222-02-22'),
(5, 'SS', '1123-02-04'),
(6, 'SSADASDASDASD ASDASDASD', '2322-12-31'),
(10, 'TESt', '2222-02-22'),
(11, 'klk', '2019-05-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'dosen'),
(2, 'asd'),
(3, 'test2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `jabatan`, `total`) VALUES
(1, 'Dosen', 30),
(2, 'Pegawai Mantainance', 20),
(3, 'Pegawai Duktek', 67),
(4, 'Pegawai SDI', 72);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namalengkap` varchar(255) DEFAULT NULL,
  `tanggallahir` date NOT NULL,
  `jenis_kelamin` varchar(45) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomortelepon` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `pas_photo` varchar(45) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `namalengkap`, `tanggallahir`, `jenis_kelamin`, `alamat`, `nomortelepon`, `email`, `jabatan`, `pas_photo`, `username`, `password`, `role`) VALUES
(3, 'Test', '2019-04-19', 'Pria', 'Medan', '081377062114', 'marth@yahoo.co.od', 'satpam', 'marthin.jpg', 'mar', 'mar', 1),
(4, 'temanku', '2018-12-11', 'Wanita', 'Medan', '081377062114', 'marth@yahoo.co.od', 'dosen', 'teman.jpg', 'teman', 'teman', 1),
(5, 'Dosen', '2019-02-11', 'Pria', 'Medan', '312312312322', 'dosen@gmail.com', 'dosen', 'dosen.jpg', 'dosen', 'dosen', 2),
(5, 'Admin', '2019-04-19', 'Pria', 'Balige', '081377062114', 'marthin', 'HRD', 'marthin.jpg', 'admin', 'admin', 1),
(6, 'Mathin', '1998-04-25', 'Pria', 'silaen', '08221313199', 'tintin@gmail.com', 'Aktor', 'marthin.jpg', 'tintin', 'tintin', 1),
(7, 'Marthin Halomoan Tampubolon', '1552-01-02', 'Pria', 'asd', 'asd', 'asd', '', '', 'asd', 'asd', 2),
(8, 'asd', '0002-02-22', 'Pria', 'asd', 'asd', 'asd', 'asd', 'image/profil/asd.jpg', 'asd', 'asd', 2),
(9, 'www', '0002-02-22', 'Pria', 'ss', 'ss', 's', 's', 'image/profil/www.jpg', 's', 's', 2),
(10, 's', '0002-02-22', 'Pria', 'asd', '2123', 'asd', 'as', 's.jpg', 'as', 'as', 2),
(11, 'asd', '0222-12-21', 'Pria', 'asd', 'asdas', 'dasd', 'asd', '.jpg', 'as', 'as', 2),
(12, 'asd', '0000-00-00', '', '', '', '', '', '', '', '', 2),
(13, 'sss', '0000-00-00', '', '', '', '', '', '', '', '', 2),
(14, 'asd', '0021-02-12', 'Pria', 'asd', 'asd', 'asd', 'asd', 'asd.jpg', 'www', 'www', 2),
(15, 'Marthin Halomoan Tampubolon', '0222-02-22', '', 'as', 'ws', 'aw', 'aw', 'Marthin Halomoan Tampubolon.jpg', 'ww', 'aw', 2),
(16, 'dsfsdf', '1999-02-03', 'Pria', 'dsfsdf', 'fgdf', 'dsdfsd', 'fsdfsd', 'dsfsdf.jpg', 'mar', 'mar', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD KEY `id` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
