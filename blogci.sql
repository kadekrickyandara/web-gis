-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jun 2019 pada 10.29
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(8, 6, 'Kopi Kemasan', '2019-05-11 05:18:10'),
(9, 6, 'Biji Kopi', '2019-05-11 05:28:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 40, 'bhatti', 'xpro@test.com', 'Great Post!!!', '2017-12-02 09:25:32'),
(2, 40, 'shadow', 'shadow@test.com', 'akheer bava g', '2017-12-02 11:02:00'),
(3, 42, 'hfjfg', 'andara.putra@yahoo.com', 'gdgjsgadg', '2019-04-22 20:04:12'),
(4, 48, 'Blikadek', 'andara.putra@yahoo.com', 'xzcz', '2019-05-13 04:35:59'),
(5, 49, 'ade', 'dedegmail.com', 'Lengkapkan lagi', '2019-05-15 04:39:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `graphic`
--

CREATE TABLE `graphic` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(55) NOT NULL,
  `waktu_panen` varchar(50) NOT NULL,
  `tahun` int(50) NOT NULL,
  `hasil` int(50) NOT NULL,
  `prediksi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `graphic`
--

INSERT INTO `graphic` (`id`, `kelurahan`, `waktu_panen`, `tahun`, `hasil`, `prediksi`) VALUES
(1, 'Penjalang', 'Triwulan 1', 2019, 500, 392),
(2, 'Pelang Kenidai', 'Triwulan 1', 2019, 230, 304),
(3, 'Basemah Serasan', 'Triwulan 1', 2019, 300, 190);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(51, 8, 6, 'Kopi Robusta', 'Kopi-Robusta', 'Pagar Alam terletak di lereng Gunung Dempo, sekitar 200 kilometer dari Palembang. Udara pegunungan yang sejuk cocok untuk tanaman kopi sehingga daerah ini terkenal sebagai penghasil kopi yang enak sejak zaman Belanda.\r\nBiji kopi dalam bahasa setempat disebut kawe, sedangkan istilah kopi berarti bubuk kopi yang siap diminum. Jenis kopi yang ditanam di Pagar Alam adalah kopi robusta. Masyarakat mengenal dua macam tanaman kopi, yaitu reguyan yang pohonnya pendek dan lengkuran yang pohonnya tinggi.\r\n\r\nLetak pagaralam yang berada kurang lebih 1.000 m dpl di atas permukaan laut membuat udara lumayan sejuk. Selain menjadi sentra perkebunan kopi dan teh, di kanan kiri jalan di Pagaralam juga ada persawahan yang lumayan luas. Kesuburan tanahnya pagaralam memang sebagai salah satu lumbung padi di Sumatera Selatan.', 'gambar1.jpg', '2019-05-20 18:56:59'),
(52, 9, 6, 'Biji Kopi', 'Biji-Kopi', 'Secangkir kopi dihasilkan melalui proses yang sangat panjang. Mulai dari teknik budidaya, pengolahan pasca panen hingga ke penyajian akhir. Hanya dari biji kopi berkualitas secangkir kopi bercita rasa tinggi bisa tersaji di meja kita.\r\n\r\nBuah kopi yang telah dipanen harus segera diolah untuk mencegah terjadinya reaksi kimia yang bisa menurunkan mutu kopi. Hasil panen disortasi dan dipilah berdasarkan kriteria tertentu, silahkan baca cara memanen buah kopi. Buah kualitas prima bila diolah dengan benar akan menghasilkan kopi bermutu tinggi.\r\n\r\nSecara umum dikenal dua cara mengolah buah kopi menjadi biji kopi, yakni proses basah dan proses kering. Selain itu ada juga proses semi basah atau semi kering, yang merupakan modifikasi dari kedua proses tersebut. Setiap cara pengolahan mempunyai keunggulan dan kelemahan, baik ditinjau dari mutu biji yang dihasilkan maupun komponen biaya produksi.', 'gambar4.jpg', '2019-05-20 18:59:35'),
(53, 8, 6, 'Kopi Lokal', 'Kopi-Lokal', 'Robusta berasal dari kata ‘robust’ yang artinya kuat, sesuai dengan gambaran postur (body) atau tingkat kekentalannya yang kuat. Kopi robusta bukan merupakan spesies karena jenis ini turunan dari spesies Coffea canephora.\r\n\r\nRobusta dapat tumbuh di dataran rendah, namun lokasi paling baik untuk membudidayakan tanaman ini pada ketinggian 400-800 meter dpl. Suhu optimal pertumbuhan kopi robusta berkisar 24-30oC dengan curah hujan 2000-3000 mm per tahun.\r\n\r\nKopi robusta sangat cocok ditanam di daerah tropis yang basah. Dengan budidaya intensif akan mulai berbuah pada umur 2,5 tahun. Agar berbuah dengan baik, tanaman ini membutuhkan waktu kering 3-4 bulan dalam setahun dengan beberapa kali turun hujan.\r\n\r\nTanaman kopi robusta menghendaki tanah yang gembur dan kaya bahan organik. Tingkat keasaman tanah (pH) yang ideal untuk tanaman ini 5,5-6,5. Kopi robusta dianjurkan dibudidayakan dibawah naungan pohon lain.', 'gambar6.jpg', '2019-05-20 19:06:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prediksi`
--

CREATE TABLE `prediksi` (
  `kd_hasil` int(10) NOT NULL,
  `nm_wilayah` varchar(30) NOT NULL,
  `waktu_panen` varchar(30) NOT NULL,
  `tahun_panen` year(4) NOT NULL,
  `hasil_panen_sebelum` int(30) NOT NULL,
  `hasil_panen_prediksi` int(30) NOT NULL,
  `mpe` decimal(4,2) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `mape` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prediksi`
--

INSERT INTO `prediksi` (`kd_hasil`, `nm_wilayah`, `waktu_panen`, `tahun_panen`, `hasil_panen_sebelum`, `hasil_panen_prediksi`, `mpe`, `jumlah`, `mape`) VALUES
(13, 'Penjalang', 'Triwulan 1', 2019, 500, 392, '13.72', 12, '0.17'),
(14, 'Lubuk Buntak', 'Triwulan 1', 2019, 142, 82, '12.15', 12, '0.32'),
(15, 'Perahu Dipo', 'Triwulan 1', 2019, 100, 1, '7.76', 12, '0.76'),
(16, 'Kance Diwe', 'Triwulan 1', 2019, 200, 174, '14.39', 12, '0.10'),
(17, 'Atung Bungsu', 'Triwulan 1', 2019, 200, 105, '15.77', 12, '-0.04'),
(18, 'Candi Jaya', 'Triwulan 1', 2019, 235, 292, '17.25', 12, '-0.19'),
(19, 'Jokoh', 'Triwulan 1', 2019, 250, 161, '13.19', 12, '0.22'),
(20, 'Pelang Kenidai', 'Triwulan 1', 2019, 230, 304, '18.56', 12, '-0.32'),
(21, 'Padang Temu', 'Triwulan 1', 2019, 200, 215, '15.76', 12, '-0.04'),
(22, 'Karang Dalo', 'Triwulan 1', 2019, 220, 503, '25.29', 12, '-0.99'),
(23, 'Burung Dinang', 'Triwulan 1', 2019, 354, 300, '14.21', 12, '0.12'),
(24, 'Muara Siban', 'Triwulan 1', 2019, 136, 194, '18.68', 12, '-0.33'),
(25, 'Rebah Tinggi', 'Triwulan 1', 2019, 115, 161, '18.46', 12, '-0.31'),
(26, 'Jangkar Mas', 'Triwulan 1', 2019, 43, 64, '21.67', 12, '-0.63'),
(27, 'Pagar Wangi', 'Triwulan 1', 2019, 210, 137, '12.73', 12, '0.27'),
(28, 'Bumi Agung', 'Triwulan 1', 2019, 145, 160, '16.16', 12, '-0.08'),
(29, 'Agung Lawangan', 'Triwulan 1', 2019, 255, 273, '15.94', 12, '-0.06'),
(30, 'Tanjung Agung', 'Triwulan 1', 2019, 85, 58, '12.91', 12, '0.25'),
(31, 'Ulu Rurah', 'Triwulan 1', 2019, 215, 163, '13.51', 12, '0.19'),
(32, 'Tumbak Ulas', 'Triwulan 1', 2019, 67, 39, '12.16', 12, '0.32'),
(33, 'Besemah Serasan', 'Triwulan 1', 2019, 300, 190, '12.56', 12, '0.28'),
(34, 'Tebat Giri Indah', 'Triwulan 1', 2019, 123, 91, '13.39', 12, '0.20'),
(35, 'Sidorejo', 'Triwulan 1', 2019, 24, 15, '12.37', 12, '0.30'),
(36, 'Nendagung', 'Triwulan 1', 2019, 141, 100, '13.12', 12, '0.23'),
(37, 'Gunung Dempo', 'Triwulan 1', 2019, 95, 69, '13.29', 12, '0.21'),
(38, 'Dempo Makmur', 'Triwulan 1', 2019, 247, 126, '11.61', 12, '0.38'),
(39, 'Bangun Rejo', 'Triwulan 1', 2019, 24, 22, '16.29', 12, '-0.09'),
(40, 'Curup Jare', 'Triwulan 1', 2019, 450, 281, '13.38', 12, '0.20'),
(41, 'Pagar Alam', 'Triwulan 1', 2019, 12, 11, '14.74', 12, '0.06'),
(42, 'Beringin Jaya', 'Triwulan 1', 2019, 8, 9, '16.56', 12, '-0.12'),
(43, 'Alun Dua', 'Triwulan 1', 2019, 80, 54, '12.86', 12, '0.25'),
(44, 'Kuripan Babas', 'Triwulan 1', 2019, 53, 35, '12.83', 12, '0.26'),
(45, 'Selibar', 'Triwulan 1', 2019, 250, 174, '13.06', 12, '0.23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(3, 'bhatti', '5400', 'xprogramm3rx@gmail.com', 'xprogramm3rx', '827ccb0eea8a706c4c34a16891f84e7b', '2017-12-03 09:41:33'),
(4, 'shadow', '5400', 'shadow@test.com', 'shadow', 'e10adc3949ba59abbe56e057f20f883e', '2017-12-03 10:47:38'),
(5, 'bli', '3211', 'blikadek378@gmail.com', 'blikadek', '4297f44b13955235245b2497399d7a93', '2019-04-18 01:12:30'),
(6, 'Blikadek', '30111', 'ikdriada@gmail.com', 'blikadekR', 'e10adc3949ba59abbe56e057f20f883e', '2019-05-05 14:14:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graphic`
--
ALTER TABLE `graphic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`kd_hasil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `graphic`
--
ALTER TABLE `graphic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `kd_hasil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
