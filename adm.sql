-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 02:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `image`) VALUES
(4, 'admin', 'admin123', '$2y$10$7DN542cxYnR6JHhjw.tLtOAWa03lA/lfZUXF6GS9jeBtdmwuHco1S', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `video` text NOT NULL,
  `image` text NOT NULL,
  `deskripsi` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `tanggal`, `judul_artikel`, `video`, `image`, `deskripsi`, `author`, `tag`) VALUES
(6, '2021-02-17', 'Unik! Pohon Pisang di Kudus Ini Berbuah di Batang', 'https://www.youtube.com/embed/0zwUpT191ic/', 'h.jpg', '&lt;p&gt;&lt;strong&gt;Kudus&lt;/strong&gt;&amp;nbsp;-&amp;nbsp;Pohon&amp;nbsp;&lt;a href=&quot;https://www.detik.com/tag/pisang-unik&quot;&gt;pisang unik&amp;nbsp;&lt;/a&gt;tumbuh di pekarangan belakang rumah warga Desa Tenggeles, Kecamatan Mejobo,&amp;nbsp;&lt;a href=&quot;https://www.detik.com/tag/kudus&quot;&gt;Kudus&lt;/a&gt;, Jawa Tengah. Pohon pisang ini berbuah di batang pohonnya.&lt;/p&gt;\r\n\r\n&lt;p&gt;Pantauan di lokasi, pohon pisang itu tumbuh di pekarangan milik Hasan Fauzi warga Desa Tenggeles, Rabu (17/2). Biasanya buah pisang tumbuh dari bagian atas pohon, kali ini buahnya justru tumbuh dari tengah batang.&lt;/p&gt;\r\n\r\n&lt;p&gt;Pohon pisang ini memiliki tinggi sekitar tiga meter. Keunikan buah pisang ini pun bikin kaget warga sekitarnya.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;Pemilik pekarangan pohon pisang Hasan Fauzi mengaku tidak menyadari jika pohon pisang yang tumbuh di pekarangan miliknya tersebut cukup unik. Dia mengaku baru mengetahui tadi pagi.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Tadi pagi kan ambil kayu, kan saya melihat ke barat. Kok ada yang aneh kayak gini (buah pisang tumbuh di batangnya). Ya kemungkinan berusia 5 bulan. Tidak kayak sewajarnya pohon pisang yang lain,&amp;quot; kata Fauzi ditemui wartawan di lokasi, Rabu (17/2/2021).&lt;/p&gt;\r\n\r\n&lt;table&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;\r\n			&lt;p&gt;&lt;strong&gt;Baca juga:&lt;/strong&gt;&lt;a href=&quot;https://news.detik.com/berita-jawa-tengah/d-5377128/dum-warga-klaten-sempat-dengar-dentuman-sebelum-sumur-ambles&quot;&gt;Dum! Warga Klaten Sempat Dengar Dentuman Sebelum Sumur Ambles&lt;/a&gt;&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;Fauzi mengatakan pohon pisang itu berbuah sekitar tiga minggu lalu. Menurutnya buah pisang yang tumbuh dari tengah batang baru terjadi di kebun miliknya.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Ini kemungkinan baru tiga minggu berbuahnya. Belum pernah ada yang unik seperti ini. Kalau jenis ini pohon pisang susu,&amp;quot; terangnya.&lt;/p&gt;\r\n\r\n&lt;p&gt;Fauzi mengatakan kebunnya memang ditanami tanaman pisang. Namun keunikan ini baru dia temukan kali ini.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Semua tanami pisang susu. Kok tidak nyangka ada yang unik, yang lain tumbuhnya normal. Kemungkinan tujuh bulan sudah ada dua buah. Beda ini tidak wajar. Tidak pernah (berbuah di batang) ini memang alam,&amp;quot; ujar Fauzi.&lt;/p&gt;\r\n\r\n&lt;p&gt;Pisang yang berbuah di batang itu pun memantik warga sekitar datang menengok pohon tersebut. Salah satunya, Sipan yang mengaku penasaran dengan pisang yang berbuah dari tengah batang tersebut.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Pisang ternyata bisa berbuah di tengah batang, terus ke sini. Ya unik, baru kali ini. Biasanya kan dipotong itu tumbuh buah di ujung pohon, tapi ini unik dan nyata. Saya baru melihatnya,&amp;quot; kata Sipan ditemui di lokasi siang tadi.&lt;/p&gt;\r\n\r\n&lt;table&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;\r\n			&lt;p&gt;&lt;strong&gt;Baca juga:&lt;/strong&gt;&lt;a href=&quot;https://news.detik.com/berita-jawa-tengah/d-5255784/tentang-daun-pisang-warna-putih-mirip-kafan-yang-bermunculan-di-kudus&quot;&gt;Tentang Daun Pisang Warna Putih Mirip Kafan yang Bermunculan di Kudus&lt;/a&gt;&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;Terpisah, Kabid Tanaman Pangan dan Perkebunan Dinas Pertanian dan Pangan&amp;nbsp;&lt;a href=&quot;https://www.detik.com/tag/kudus&quot;&gt;Kudus&lt;/a&gt;, Dewi Masitoh, menyebut pisang yang berbuah di batang memang jarang terjadi. Namun terkait fenomena ini menurutnya perlu observasi lebih lanjut.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Perlu observasi tim teknis lebih lanjut terkait dengan penemuan tersebut,&amp;quot; terang Dewi saat dimintai konfirmasi lewat pesan singkat siang ini.&lt;/p&gt;\r\n', 'Fatimatul Zahro', 'Berita'),
(7, '2021-02-17', 'Angela Tanoesoedibjo Pede Proyek \'Disneyland\' Ayahnya Jadi Wisata', 'https://www.youtube.com/embed/3vXtFe7oTQI', 'c.jpeg', '&lt;p&gt;&lt;strong&gt;Jakarta&lt;/strong&gt;&amp;nbsp;-&amp;nbsp;Pemerintah telah mendukung penuh proyek kawasan pariwisata terintegrasi milik MNC Group di Lido, Sukabumi, Jawa Barat. Salah satu proyek andalan Hary Tanoesoedibjo itu telah mendapat persetujuan dari Dewan Nasional Kawasan Ekonomi Khusus sebagai Kawasan Ekonomi Khusus Pariwisata (KEK Pariwisata).&lt;/p&gt;\r\n\r\n&lt;p&gt;Wakil Menteri Pariwisata dan Ekonomi Kreatif,&amp;nbsp;&lt;a href=&quot;https://www.detik.com/tag/angela-tanoesoedibjo&quot;&gt;Angela Tanoesoedibjo&lt;/a&gt;&amp;nbsp;yakin MNC Lido City akan menjadi kebanggaan nasional dan destinasi wisata baru di Indonesia. Apalagi proyek itu diklaim bakal setara Disneyland dan Universal Studio.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Saya yakin Kawasan Ekonomi Khusus Pariwisata MNC Lido City akan menjadi kebanggaan nasional dan destinasi wisata baru di Indonesia,&amp;quot; tulis Angela di akun Instagramnya dikutip&amp;nbsp;&lt;strong&gt;detikcom&lt;/strong&gt;, Rabu (17/2/2021).&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;table&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;\r\n			&lt;p&gt;&lt;strong&gt;Baca juga:&lt;/strong&gt;&lt;a href=&quot;https://finance.detik.com/bursa-dan-valas/d-5377006/cuan-10-saham-ini-meroket-kemarin-mnc-land-naik-hingga-34&quot;&gt;Cuan! 10 Saham Ini Meroket Kemarin, MNC Land Naik hingga 34%&lt;/a&gt;&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://www.detik.com/tag/angela-tanoesoedibjo&quot;&gt;Angela&lt;/a&gt;&amp;nbsp;yang merupakan putri dari Hary Tanoesoedibjo itu menyebut keberadaan MNC Lido City akan mendukung percepatan pemerintah mengejar target pemulihan ekonomi, baik di level pusat maupun daerah dengan peningkatan kunjungan wisatawan domestik dan internasional.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tak hanya itu, kehadiran proyek ayahnya itu juga dinilai bisa menjadi tempat pengembangan UMKM dan ekonomi kreatif sehingga membuka kesempatan usaha yang baru dan menciptakan lapangan kerja.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Sehingga membuka kesempatan usaha yang baru dan menciptakan lapangan kerja guna penyerapan tenaga kerja dari daerah,&amp;quot; tuturnya.&lt;/p&gt;\r\n\r\n&lt;table&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;\r\n			&lt;p&gt;&lt;strong&gt;Baca juga:&lt;/strong&gt;&lt;a href=&quot;https://finance.detik.com/properti/d-5375212/3-poin-penjelasan-hary-tanoe-soal-proyek-disneyland-di-lido&quot;&gt;3 Poin Penjelasan Hary Tanoe soal Proyek &amp;#39;Disneyland&amp;#39; di Lido&lt;/a&gt;&lt;/p&gt;\r\n			&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;Untuk diketahui, saat ini MNC Lido City sedang mengembangkan kawasan hunian, komersial, destinasi wisata dan resort terintegrasi seluas 3.000 hektare (Ha) di Lido, Jawa Barat, yang berbatasan dengan Provinsi DKI Jakarta dan Banten, dikelilingi dengan lebih dari 70 juta penduduk.&lt;/p&gt;\r\n\r\n&lt;p&gt;Berlokasi sekitar 60 kilometer (km) dari Jakarta, MNC Lido City dapat dicapai langsung melalui Tol Bocimi dengan waktu tempuh satu jam dari Jakarta. Setelah ditetapkan sebagai KEK Pariwisata, perusahaan juga mulai melakukan pembangunan Movieland di MNC Lido City.&lt;/p&gt;\r\n\r\n&lt;p&gt;Movieland, studio film dan drama seri outdoor di MNC Lido City disebut akan menjadi pusat industri film dan drama seri kelas dunia pertama di Indonesia.&lt;/p&gt;\r\n', 'Bagus Suseto', 'Pemerintahan'),
(8, '2021-02-16', 'TEKOTOK', 'https://www.youtube.com/embed/7zk8CT5VJlQ', 'maxresdefault.jpg', '&lt;p style=&quot;text-align:justify&quot;&gt;Saat kita membuat sbuah tanggal otomatis dengan fungsi&amp;nbsp;Date(), kita akan mendapatkan hasil dalam format bahasa inggris. Contoh,&amp;nbsp;Date(&amp;rsquo;d F Y&amp;#39;)&amp;nbsp;akan menghasilkan output&amp;nbsp;22 December 2016&amp;nbsp;(sesui tanggal sekarang). Format penanggalan ini mungkin tidak begitu penting bagi sistem yang tidak digunakan di tempat formal. Namun, bagaimana kalau untuk membuat surat atau laporan formal. Pastinya, kita dituntut untuk menggunakan bahasa indonesia yang baik dan benar.&lt;br /&gt;\r\n&lt;br /&gt;\r\nHal yang perlu kita lakukan untuk merubah tanggal ke dalam bahasa indonesia adalah merubah nama-nama bulan dari fungsi&amp;nbsp;Date(). Kita bisa melakukannya seperti berikut ini.&lt;/p&gt;\r\n', 'Bagus Suseto', 'Tekotok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
