-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2018 at 02:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondok`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `slug`, `judul`, `gambar`, `deskripsi`) VALUES
(1, 'post1', 'artikeld', 'file_1526805450.jpg', 'fjabjkbdfhk,sbf,hsdbfds,fbsm,dfbsdmnfbmsdnfbkjsdbfjksdfjsdnfkjsdbfkjsdbfjsdbfkjsdbfkjsdbfhsdbfksdf sd\r\n\r\n\r\n\r\n\r\n\r\nHallo teman-teman balik lagi di artikel tutorial website Dumet School, pada kesempatan kali ini saya akan membahas tentang Cara Membuat Halaman Detail Menggunakan Codeigniter, membuat halaman detail pada portal berita atau artikel-artikel, pada pembahasan kali ini kita akan menggunakan framework dari codeigniter, codeigniter itu cukup luas juga yah, dan banyak komunitasnya di Indonesia, cukup luar biasa juga penggunaan dari framework ini, oke langsung saja kita praktekan yah, pastika teman teman sudah mendowload file codeigniternya, lalu coba ikuti langkah berikut,:\r\n\r\n    Buat file controller dengan nama Tampil.php\r\n\r\nLalu masukkan script ini :'),
(2, 'post2', 'akakaggg', 'file_1526823995.jpg', 'ffffffjkbjgbjfdkgdjfgbjdfg'),
(3, 'post3', 'fjdhfjksadbfjksdf', 'file_1526965450.jpg', 'sdsadfsadfsadfljsbdjfa\r\nasdflkhajsdfkas\r\nasdfkjbakjsdbkasdf\r\nasdfjbaskdfsadf'),
(4, '', 'rrr', 'file_1527180448.png', 'eeee'),
(5, '', 'yyyyyyyy', 'file_1531506912.jpg', 'yyyy'),
(6, '', 'GRATIS ONGKIR SE INDONESIA', 'file_1531506956.jpg', 'Codeigniter provides a limit() method clause that is used to specify the number of records to return.\r\n\r\nThe limit() method makes it easy to code multi page results or pagination with SQL, and is very useful on large tables. Returning a large number of records can impact on performance.\r\n\r\nLets you limit the number of rows you would like returned by the query\r\n\r\n$this->db->limit(15);  // Produces: LIMIT 15\r\n\r\n The second parameter lets you set a result offset.'),
(7, '', 'baru', 'file_1531558149.png', 'This code looks similar to the controller code that was used earlier. It creates a new model by extending CI_Model and loads the database library. This will make the database class available through the $this->db object.\r\n\r\nBefore querying the database, a database schema has to be created. Connect to your database and run the SQL command below. Also add some seed records.'),
(8, '', 'yyyyyyyyyyy', 'file_1531619371.jpg', 'lofyuuuuuuuuuuuuuuuuuuo'),
(9, '', 'vjhvhvjhb', 'file_1531619689.jpg', 'ssalamualaikum Wr. Wb. Puji syukur kita panjatkan kehadirat Allah SWT, disertai perasaan bangga saya menuliskan kata sambutan selaku Kepala sekolah SMA N 2 Banguntapan. Di era global dan pesatnya Teknologi Informasi (IT) ini, tidak dipungkiri bahwa keberadaan sebuah website untuk suatu lembaga sangatlah penting. Wahana website dapat digunakan sebagai media penyebarluasan informasi-informasi dari sekolah, yang memang harus diketahui oleh seluruh stake holder maupun masyarakat luas. Disamping itu, website juga dapat menjadi sarana promosi sekolah yang cukup efektif. Berbagai kegiatan positif sekolah dapat diunggah, disertai gambar-gambar yang relevan, sehingga masyarakat dapat mengetahui prestasi-prestasi yang telah berhasil diraih oleh SMA N 2 Banguntapan. Website juga dapat dijadikan sarana komunikasi antara sekolah dengan para alumni. Bahkan alumni dapat memanfaatkan website sekolah untuk konsolidasi, sehingga terbentuk ikatan alumni yang makin besar dan kuat. Sekolah menyadari bahwa alumni merupakan salah satu potensi yang apabila digali dan dikelola dengan baik dan benar akan mampu memberikan kontribusi yang sangat positip kepada sekolah. Oleh karena itu, saya sangat berharap, melalui website ini, akan semakin berkembang dan solid, sehingga pada waktunya nanti dapat memberikan kontribusi bagai kemajuan sekolah tercinta. Akhirnya disadar bahwa masih banyak kekurangan yang terjadi pada website SMA N 2 Banguntapan, oleh Karena itu, kami akan terus belajar dan meng-up date diri, sehingga tampilan, isi dan mutu kami akan terus berkembang. Kepada tim pengelolan website sekolah, agar terus mengembangkan website dengan semangat, tanpa mengenal menyerah. Terimakasih atas kerjasamanya, maju terus untuk mencapai SMA N 2 Banguntapan yang “Berakhlaq Mulia dan Berprestasi”. Wassalamualaikum Wr. Wb.'),
(10, '', 'sdksadkbkajsdbjsad', 'file_1531644413.jpg', 'dcdcdd');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `counter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `date`, `counter`) VALUES
(10, '2018-07-12', '4'),
(11, '2018-07-13', '63'),
(12, '2018-07-14', '20'),
(13, '2018-07-15', '151'),
(14, '2018-07-16', '45');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`) VALUES
(1, 'file_1527212584.png'),
(2, 'file_1527213012.jpg'),
(3, 'file_1527213076.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `deskripsi`) VALUES
(1, 'informasi k', 'nformatika (Inggris: Informatics) merupakan disiplin ilmu yang mempelajari transformasi fakta berlambang yaitu data maupun informasi pada mesin berbasis komputasi. Disiplin ilmu ini mencakup beberapa macam bidang, termasuk di dalamnya: sistem informasi, ilmu komputer, ilmu informasi, teknik komputer dan aplikasi informasi dalam sistem informasi manajemen. Secara umum informatika mempelajari struktur, sifat, dan interaksi dari beberapa sistem yang dipakai untuk mengumpulkan data, memproses dan menyimpan hasil pemrosesan data, serta menampilkannya dalam bentuk informasi. Aspek dari informatika lebih luas dari sekadar sistem informasi berbasis komputer saja, tetapi masih banyak informasi yang tidak dan belum diproses dengan komputer.\r\n\r\nInformatika mempunyai konsep dasar, teori, dan perkembangan aplikasi tersendiri. Informatika dapat mendukung dan berkaitan dengan aspek kognitif dan sosial, termasuk tentang pengaruh serta akibat sosial dari teknologi informasi pada umumnya. Penggunaan informasi dalam beberapa macam bidang, seperti bioinformatika, informatika medis, dan informasi yang mendukung ilmu perpustakaan, merupakan beberapa contoh yang lain dari bidang informatika.\r\n\r\nDalam ruang lingkup yang lebih luas, informatika meliputi beberapa aspek:\r\n\r\n    teori informasi yang mempelajari konsep matematis dari suatu informasi\r\n    ilmu informasi yang mempelajari tentang cara pengumpulan, klasifikasi, manipulasi penyimpanan, pengaksesan, dan penyebarluasan informasi untuk keperluan sosial dan kemasyarakatan secara menyeluruh\r\n    ilmu komputer dan teknik komputer yang mempelajari tentang pemrosesan, pengarsipan, dan penyebaran informasi dengan menggunakan teknologi informasi dan pemrograman yang berbasis komputer.\r\n    sistem informasi yang mempelajari mengenai teknik pengembangan suatu sistem untuk mengolah berbagai macam informasi yang ada.\r\n    keamanan informasi ilmu yang mempelajari mengenai kajian proses mengamankan dan melindungi data pada yang ada pada sistem atau komputers.\r\n    informatika sosial yang mengkaji aspek sosial dari TIK dalam perubahan sosial dan organisasional, penggunaan teknologi dalam konteks sosial, dan cara kelembagaan sosial teknologi informasi yang dipengaruhi oleh kekuatan sosial dan praktik-praktik sosial/kemasyarakatan.\r\n\r\nDalam Pemahaman di Teknik informatika mempunyai aspek kedisiplinan dalam menguasai bidang ilmu informatika yang cukup luas. Informatika dalam prospek ke depan dalam dunia pekerjaan masa depan karena informatika berada dalam segala bidang ilmu membutuhkan sentuhan ahli dari ilmu informatika.');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `text`) VALUES
(1, 'dd', 'izratool@gmail.com', 'dafdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('pengurus','pengasuh','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'pengurus', 'ef4113dcac30d9fea0cd4ed7caa66ee8', 'pengurus'),
(2, 'pengasuh', 'dbc8a81e71ebfe9ef0aec7c688a3d2c4', 'pengasuh');

-- --------------------------------------------------------

--
-- Table structure for table `syahriah`
--

CREATE TABLE `syahriah` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jumlah_pembayaran` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `syahriah`
--

INSERT INTO `syahriah` (`id`, `nama`, `jumlah_pembayaran`, `tanggal`) VALUES
(1, 'adam', '1000', '2018-05-08'),
(2, 'aaan', '333', '2018-05-09'),
(3, 'wwwwww', '1000000', '2018-05-17'),
(4, 'ddddd', '33333', '2018-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tabungan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id`, `nama`, `tabungan`, `tanggal`) VALUES
(1, 'ttt', '100000', '2018-05-02'),
(2, 'rrr', '1000', '2018-05-09'),
(3, 'akjhh', '1233', '2018-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `judul`, `deskripsi`) VALUES
(1, 'visi dan misi', 'fhfbsbkjbjsdjgs\r\nsdgjsdbfsjdfbsdjbfsd\r\nsdjdsbfsjdbjsdb\r\ngsdgsgd\r\nfkndklfnskdlfndkfndfdddddddddddddddddddddddddddddddddddd\r\nsdffffffffffffffffffffffffffffffffffffffffffffffff\r\nsdg\r\nsgdddddbsgbkjsfds\r\nsdfjkbsdkjfbksdjbfjksbfs\r\nsdkfbsdkfbksdj\r\nsfljsdfj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syahriah`
--
ALTER TABLE `syahriah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `syahriah`
--
ALTER TABLE `syahriah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
