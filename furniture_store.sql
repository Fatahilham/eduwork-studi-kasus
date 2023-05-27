-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2023 pada 10.24
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture_store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'lemari'),
(2, 'meja'),
(3, 'kursi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `id_kategori`, `gambar`, `keterangan`) VALUES
(32, 'Kursi Retro Cafe', 1500000, 15, 2, 'pexels-esteban-santiago-gonzalez-12269761.jpg', ' Kursi kecil retro dengan kaki kayu dan kulit warna coklat tua adalah perpaduan yang menawan antara gaya vintage dan sentuhan alami. Dengan desain kompak dan kaki kayu yang memberikan sentuhan alami, kursi ini menciptakan nuansa retro yang menggemaskan.'),
(33, 'Meja Industrial Minimalis', 1200000, 10, 2, 'pexels-ksenia-chernaya-11112740.jpg', 'Meja industrial minimalis adalah gabungan sempurna antara desain yang bersih dan karakter kuat. Dengan bahan logam yang kokoh dan garis-garis yang sederhana, meja ini menampilkan gaya industri yang modern. Cocok untuk segala jenis ruangan, meja ini memberikan sentuhan minimalis yang elegan tanpa mengorbankan kekuatan dan fungsionalitas.'),
(34, 'Kabinet Kayu', 2500000, 7, 1, 'pexels-ksenia-chernaya-11112748.jpg', 'Kabinet kayu industrial adalah perpaduan menarik antara keindahan kayu alami dan kekuatan gaya industri. Dengan desain yang tangguh dan tekstur kayu yang khas, kabinet ini memberikan sentuhan rustic yang unik. Ideal untuk penyimpanan dan tampilan, kabinet kayu industrial menjadi pilihan yang sempurna untuk menciptakan suasana yang hangat dan tahan lama di ruang Anda.'),
(35, 'Lemari Baju Retro', 8000000, 5, 1, 'pexels-ksenia-chernaya-11112749.jpg', 'Lemari baju retro kayu adalah perpaduan sempurna antara keindahan alami kayu dan gaya klasik yang abadi. Dengan bentuk yang elegan dan detail vintage yang indah, lemari ini memberikan sentuhan nostalgia yang memikat. Ideal untuk menyimpan dan menampilkan pakaian Anda, lemari baju retro kayu akan menjadi pusat perhatian yang anggun di ruang tidur atau ruang pakaian Anda.'),
(36, 'Kursi Retro Santai', 1250000, 30, 3, 'pexels-ksenia-chernaya-11112733.jpg', ' Kursi retro santai adalah perpaduan nyaman antara desain retro yang menawan dan kenyamanan yang tak tertandingi. Dengan bahan yang berkualitas dan desain ergonomis, kursi ini mengundang Anda untuk bersantai dengan gaya. Dengan tampilan yang mengesankan dan nuansa vintage yang menggemaskan, kursi retro santai akan menjadi tambahan yang sempurna untuk ruang keluarga atau ruang santai Anda.'),
(37, 'Sofa Singgle Retro', 3500000, 6, 3, 'pexels-ksenia-chernaya-11112727.jpg', 'Sofa Singgle Retro adalah kombinasi sempurna antara gaya retro yang menawan dan kenyamanan modern. Dengan desain yang elegan dan proporsi yang proporsional, sofa ini menjadi pusat perhatian yang memikat dalam ruangan. Dibuat dengan bahan berkualitas tinggi dan balutan kain dengan motif retro yang klasik, sofa ini akan menjadi tempat yang nyaman untuk duduk dan bersantai dengan gaya yang timeless.'),
(38, 'Meja Belajar Vintage', 4000000, 8, 2, 'pexels-ksenia-chernaya-11112745.jpg', 'Meja Belajar Vintage adalah meja yang menghadirkan gaya klasik dan nuansa retro ke area belajar Anda. Dengan desain yang anggun dan sentuhan nostalgia, meja ini menambahkan keindahan dan keunikan ke ruang belajar atau kantor Anda. Dibuat dengan bahan berkualitas dan perhatian terhadap detail, meja belajar vintage memberikan tampilan yang elegan serta fungsionalitas yang tinggi untuk mendukung produktivitas Anda'),
(39, 'Kursi Besi Industrial', 1100000, 7, 3, 'pexels-hormel-2762247.jpg', 'Kursi Besi Industrial adalah kursi yang memadukan kekuatan besi dengan gaya industrial yang tangguh. Dengan bingkai besi yang kokoh dan desain yang sederhana, kursi ini menawarkan daya tahan yang luar biasa. Cocok untuk digunakan di dalam ruangan maupun di luar ruangan, kursi besi industrial memberikan sentuhan urban yang kasar dan modern ke dalam ruang Anda.'),
(40, 'Rak Kapal Industrial', 6000000, 4, 1, 'pexels-ksenia-chernaya-11112736.jpg', 'Rak Kapal Industrial adalah rak yang terinspirasi oleh estetika kapal-kapal klasik dengan gaya industrial yang kuat. Dibuat dengan menggunakan material yang kokoh dan tahan lama, rak ini menampilkan desain yang unik dengan sentuhan vintage.'),
(41, 'Meja Kayu Biasa', 700000, 9, 2, 'pexels-ksenia-chernaya-11112739.jpg', 'Meja Kayu Biasa adalah meja yang sederhana namun fungsional, dirancang dengan bahan kayu berkualitas untuk memberikan tampilan alami dan hangat dalam ruangan Anda. Dengan desain yang minimalis, meja ini cocok untuk berbagai keperluan seperti meja makan, meja kerja, atau meja samping.'),
(42, 'Kursi Malas Retro', 3500000, 12, 3, 'pexels-ksenia-chernaya-11112735.jpg', 'Kursi Malas Retro adalah kursi santai yang mengusung gaya retro dengan kenyamanan yang luar biasa. Dengan desain yang bergaya dan detail vintage yang menarik, kursi malas ini mengundang Anda untuk bersantai dan melepaskan lelah dengan gaya yang timeless. Tambahkan sentuhan retro yang menggemaskan ke ruang santai atau ruang tidur Anda dengan kursi malas retro ini.'),
(43, 'Kursi Malas Retro 2', 3200000, 14, 3, 'pexels-esteban-santiago-gonzalez-12269764.jpg', 'Kursi Malas Retro adalah kursi santai yang menghadirkan nuansa retro yang menawan dan kenyamanan yang tak tertandingi. Dengan desain yang bergaya dan bentuk yang ergonomis, kursi ini menjadi tempat yang sempurna untuk bersantai dan bersantai dengan gaya yang timeless. Tambahkan sentuhan vintage yang elegan ke ruang keluarga atau sudut santai Anda dengan kursi malas retro ini.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_produk` (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
