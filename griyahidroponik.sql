-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2021 pada 06.36
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `griyahidroponik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(255) NOT NULL,
  `noHp` varchar(12) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `alamatMedsos` varchar(500) NOT NULL,
  `deskripsi` blob NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama`, `noHp`, `foto`, `alamatMedsos`, `deskripsi`, `alamat`) VALUES
('Siti Jamilah', '082123123123', 'Background.jpg', '@alamatMedsos', 0x73617961206164616c61682070656e6a75616c, 'Jl Jawa 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idProduct` int(11) NOT NULL,
  `titleProduct` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idProduct`, `titleProduct`, `harga`, `foto`, `stok`, `deskripsi`) VALUES
(1, 'Red Oak', 20000, 'Product1.jpg', 44, 0x6465736b72697073692070726f64756b),
(2, 'Baby Kailan', 30000, 'Product2.png', 46, 0x4465736b72697073692042616279204b61696c616e),
(3, 'sawi sambong', 40000, 'Product3.jpg', 49, 0x6465736b72697073692070726f64756b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `idDetailPesanan` int(11) NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `idPesanan` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`idDetailPesanan`, `totalHarga`, `kuantitas`, `idPesanan`, `idProduct`) VALUES
(1, 60000, 2, 1, 2),
(2, 40000, 1, 1, 3),
(3, 60000, 3, 1, 1),
(4, 60000, 3, 2, 1),
(5, 60000, 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `edukasi`
--

CREATE TABLE `edukasi` (
  `idEdukasi` int(11) NOT NULL,
  `judulEdukasi` varchar(255) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `deskripsi` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `edukasi`
--

INSERT INTO `edukasi` (`idEdukasi`, `judulEdukasi`, `gambar`, `deskripsi`) VALUES
(3, 'Edukasi ajah 1', 'Edukasi1.jpg', 0x546573206973692062617275),
(4, 'Edukasi tambah', 'Edukasi4.png', 0x313233),
(5, 'tes ubah edit', 'EdukasiEdukasi5.jpg.png', 0x7465732065646974),
(6, 'haloo', 'Edukasi6.jpg', 0x68616c6f6f0d0a),
(7, 'adsad', 'Edukasi7.png', 0x647361646173),
(8, 'edukasi baru', 'Edukasi8.png', 0x6465736b7269707369206564756b617369),
(9, 'tes ubah ubah edit', 'Edukasi9.png', 0x7177717765717765),
(10, 'dasdasd', 'Edukasi10.png', 0x64617364617364),
(11, 'test 123', 'Edukasi11.JPG', 0x696e69206465736b7269707369);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_bank`
--

CREATE TABLE `m_bank` (
  `idBank` int(11) NOT NULL,
  `namaBank` varchar(255) NOT NULL,
  `noRekening` varchar(15) NOT NULL,
  `atasNama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `m_bank`
--

INSERT INTO `m_bank` (`idBank`, `namaBank`, `noRekening`, `atasNama`) VALUES
(1, 'BCA', '123456789012345', 'pegawai toko'),
(2, 'BRI', '111222333444555', 'pegawai toko'),
(3, 'Mandiri', '98765432112345', 'pegawai toko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noHp` varchar(12) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`username`, `password`, `email`, `noHp`, `idUser`) VALUES
('dhika', '123', 'dhika@email.com', '085123123123', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembukuan`
--

CREATE TABLE `pembukuan` (
  `idPembukuan` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembukuan`
--

INSERT INTO `pembukuan` (`idPembukuan`, `bulan`, `tanggal`, `keterangan`, `nominal`) VALUES
(8, '2021-11', 0, 'tes', 40000),
(9, '2021-11', 10, 'qwe', 12000),
(10, '2021-12', 0, 'qwe', 30000),
(11, '2021-09', 1, 'pengeluaran 1', 12000),
(12, '2021-09', 12, 'pengeluaran 2', 30000),
(13, '2021-09', 6, 'pengeluaran 3', 12000),
(14, '2021-09', 13, 'pengeluaran 4 ', 23000),
(15, '2021-11', 10, 'pupuk', 20000),
(16, '2021-11', 7, 'bensin', 10000),
(17, '2021-12', 1, 'pupuk', 20000),
(18, '2021-12', 17, 'bensin', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `idPembeli` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `idBank` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `buktiPembayaran` varchar(500) NOT NULL,
  `waktuPengiriman` varchar(10) NOT NULL,
  `varifikasiPembayaran` int(11) DEFAULT NULL,
  `totalHarga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`idPesanan`, `tanggal`, `idPembeli`, `nama`, `idBank`, `alamat`, `buktiPembayaran`, `waktuPengiriman`, `varifikasiPembayaran`, `totalHarga`) VALUES
(1, '2021-11-07', 1, 'Siti Jamilah', 1, 'Jember, Jl Riau', 'belum upload bukti', 'Pagi', 1, 168000),
(2, '2021-11-18', 1, 'Siti Jamilah', 1, 'Jember, Jalan Riau', 'belum upload bukti', 'Pagi', 1, 128000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`idDetailPesanan`);

--
-- Indeks untuk tabel `edukasi`
--
ALTER TABLE `edukasi`
  ADD PRIMARY KEY (`idEdukasi`);

--
-- Indeks untuk tabel `m_bank`
--
ALTER TABLE `m_bank`
  ADD PRIMARY KEY (`idBank`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`idUser`);

--
-- Indeks untuk tabel `pembukuan`
--
ALTER TABLE `pembukuan`
  ADD PRIMARY KEY (`idPembukuan`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `idDetailPesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `edukasi`
--
ALTER TABLE `edukasi`
  MODIFY `idEdukasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `m_bank`
--
ALTER TABLE `m_bank`
  MODIFY `idBank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembukuan`
--
ALTER TABLE `pembukuan`
  MODIFY `idPembukuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
