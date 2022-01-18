-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 10.23
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinasperdagangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `akses` enum('user','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `akses`) VALUES
(1, 'admin', 'admin', 'admin'),
(4, 'user', 'user', 'user'),
(5, 'tes', 'tes', 'user'),
(6, 'tes', 'tes', 'user'),
(7, 'lyla', 'lali', 'user'),
(8, 'user123', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahanpokok`
--

CREATE TABLE `bahanpokok` (
  `idbahanpokok` int(11) NOT NULL,
  `namabarang` text NOT NULL,
  `satuan` text NOT NULL,
  `hargakemarin` text NOT NULL,
  `hargahariini` text NOT NULL,
  `perubahanrp` text NOT NULL,
  `perubahanpersen` text NOT NULL,
  `tanggalbahan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahanpokok`
--

INSERT INTO `bahanpokok` (`idbahanpokok`, `namabarang`, `satuan`, `hargakemarin`, `hargahariini`, `perubahanrp`, `perubahanpersen`, `tanggalbahan`) VALUES
(2, 'Beras Naga', '1 kg', '15000', '15000', '-', '0.00%', '2021-01-08'),
(8, 'Beras Mawar Melati', '1 kg', '15000', '15000', '-', '0.00%', '2021-11-11'),
(9, 'Beras Talia', '1 kg', '11000', '11000', '-', '0.00%', '2021-03-09'),
(10, 'Beras Mawar', '1 kg', '11000', '11000', '-', '0.00%', '2021-03-09'),
(11, 'Beras Mawar', '1 kg', '11000', '11000', '-', '0.00%', '2021-04-13'),
(12, 'Beras Ketupat', '1 kg', '12000', '12000', '-', '0.00%', '2021-06-09'),
(13, 'Beras Dua Hati', '1 kg', '15000', '15000', '-', '0.00%', '2021-07-14'),
(14, 'Beras Kapal', '1 kg', '12000', '12000', '-', '0.00%', '2021-07-21'),
(15, 'Beras Kupu Kupu', '1 kg', '12000', '12000', '-', '0.00%', '2021-10-05'),
(16, 'Beras Slyp Super', '1 kg', '13000', '13000', '-', '0.00%', '2021-08-02'),
(17, 'Beras Bambu', '1 kg', '13000', '13000', '-', '0.00%', '2021-06-01'),
(19, 'Gula Pasir', '1 kg', '14000', '13000', '1000', '-7.14%', '2021-07-06'),
(20, 'Gula Merah', '1 kg', '28000', '25000', '3000', '-10.71%', '2021-07-12'),
(21, 'Beras Naga', '5 liter', '80000', '88000', '8000', '10.00%', '2021-11-01'),
(22, 'Kunci Mas', '5 liter', '75000', '82000', '7000', '9.33%', '2021-10-05'),
(23, 'Bimoli Spesial', '1 liter', '16000', '16000', '-', '0.00%', '2021-09-07'),
(24, 'Bimoli Spesial', '620ml', '15000', '15000', '-', '0.00%', '2021-08-09'),
(25, 'Viola', '5 liter', '70000', '75000', '5000', '7.14%', '2021-10-05'),
(26, 'Periswell', '5 liter', '70000', '75000', '5000', '7.14%', '2021-08-09'),
(27, 'Tropikal', '1 liter', '20000', '20000', '-', '0.00%', '2021-09-06'),
(28, 'Tropikal', '2 liter', '33000', '33000', '-', '0.00%', '2021-08-10'),
(34, 'Gatot Kaca', '1 kg', '9000', '9000', '-', '0.00%', '0000-00-00'),
(35, 'Ketan Putih', '1 kg', '12000', '13000', '1000', '8.33%', '0000-00-00'),
(36, 'Kanji', '1 kg', '8000', '8000', '-', '0.00%', '0000-00-00'),
(37, 'Daging Sapi Lokal', '1 kg', '120000', '120000', '-', '0.00%', '0000-00-00'),
(38, 'Daging Sapi Beku', '1 kg', '90000', '90000', '-', '0.00%', '0000-00-00'),
(39, 'Daging Ayam Broiler', '1 kg', '38000', '38000', '-', '0.00%', '0000-00-00'),
(40, 'Daging Ayam Kampung', '1 kg', '75000', '75000', '-', '0.00%', '0000-00-00'),
(41, 'Telur Ayam Boiler', '16butir/kg', '24000', '20266', '3734', '-15.56%', '0000-00-00'),
(42, 'Telur Ayam Kampung', '21 butir/kg', '63000', '63000', '-', '0.00%', '0000-00-00'),
(43, 'Telur Bebek', '16 butir/kg', '53333', '53333', '-', '0.00%', '0000-00-00'),
(44, 'Cabe Merah Besarg', '1 kg', '30000', '30000', '-', '0.00%', '0000-00-00'),
(45, 'Cabe Keriting', '1 kg', '30000', '40000', '10000', '33.33%', '0000-00-00'),
(46, 'Cabe Biasa/Tiung Lokal', '1 kg', '45000', '40000', '5000', '-11.11%', '0000-00-00'),
(47, 'Bawang Merah', '1 kg', '35000', '30000', '5000', '-14.29%', '0000-00-00'),
(48, 'Bawang Putih', '1 kg', '30000', '30000', '-', '0.00%', '0000-00-00'),
(49, 'Kasar', '1 kg', '10000', '10000', '-', '0.00%', '0000-00-00'),
(50, 'Halus', '1kg/4 bks 250g', '5000', '5000', '-', '0.00%', '0000-00-00'),
(51, 'Kacang Kedelai Ekspor dan Impor', '1 kg', '10000', '10000', '-', '0.00%', '0000-00-00'),
(52, 'Lokal', '1 kg', '10000', '10000', '-', '0.00%', '0000-00-00'),
(53, 'Kacang Hijau', '1 kg', '22000', '25000', '3000', '13.64%', '0000-00-00'),
(54, 'Beras Naga', '1 kg', '15000', '15000', '-', '0.00%', '2021-09-03'),
(55, 'Beras Mawar Melati', '1 kg', '11000', '11000', '-', '0.00%', '2021-09-03'),
(56, 'Beras Talia', '1 kg', '11000', '11000', '-', '0.00%', '2021-09-03'),
(57, 'Beras Mawar', '1 kg', '11000', '11000', '-', '0.00%', '2021-09-03'),
(58, 'Beras Ketupat', '1 kg', '12000', '12000', '-', '0.00%', '2021-09-03'),
(59, 'Beras Dua Hati', '1 kg', '15000', '15000', '-', '0.00%', '2021-09-03'),
(60, 'Beras Kapal', '1 kg', '12000', '12000', '-', '0.00%', '2021-09-03'),
(61, 'Beras Kupu Kupu', '1 kg', '12000', '12000', '-', '0.00%', '2021-09-03'),
(62, 'Beras Slyp Super', '1 kg', '13000', '13000', '-', '0.00%', '2021-09-03'),
(63, 'Beras Bambu', '1 kg', '13000', '13000', '-', '0.00%', '2021-09-03'),
(64, 'Gula Pasir', '1 kg', '14000', '14000', '-', '0.00%', '2021-09-03'),
(65, 'Gula Merah', '1 kg', '28000', '28000', '-', '0.00%', '2021-09-03'),
(66, 'Bimoli Spesial Botol', '5 liter', '80000', '80000', '-', '0.00%', '2021-09-03'),
(67, 'Kunci Mas', '5 liter', '75000', '75000', '-', '0.00%', '2021-09-03'),
(68, 'Bimoli Spesial', '1 liter', '16000', '16000', '-', '0.00%', '2021-09-03'),
(69, 'Bimoli Spesial', '620ml', '15000', '15000', '-', '0.00%', '2021-09-03'),
(70, 'Viola', '5 liter', '70000', '70000', '-', '0.00%', '2021-09-03'),
(71, 'Periswell', '5 liter', '70000', '70000', '-', '0.00%', '2021-09-03'),
(72, 'Tropikal', '1 liter', '20000', '20000', '-', '0.00%', '2021-09-03'),
(73, 'Tropikal', '2 liter', '33000', '33000', '-', '0.00%', '2021-09-03'),
(74, 'Glamor', '5 liter', '75000', '75000', '-', '0.00%', '2021-09-03'),
(75, 'Kapal Malaysia', '1 liter', '15000', '15000', '-', '0.00%', '2021-09-03'),
(76, 'Mas Malaysia', '1 liter', '15000', '15000', '-', '0.00%', '2021-09-03'),
(77, 'Rama-Rama', '1 kg', '10000', '10000', '-', '0.00%', '2021-09-03'),
(78, 'Bola', '1 kg', '9000', '9000', '-', '0.00%', '2021-09-03'),
(79, 'Gatot Kaca', '1 kg', '9000', '9000', '-', '0.00%', '2021-09-03'),
(80, 'Ketan Putih', '1 kg', '12000', '12000', '-', '0.00%', '2021-09-03'),
(81, 'Kanji', '1 kg', '8000', '8000', '-', '0.00%', '2021-09-03'),
(82, 'Daging Sapi Lokal', '1 kg', '120000', '120000', '-', '0.00%', '2021-09-03'),
(83, 'Daging Sapi Beku', '1 kg', '90000', '90000', '-', '0.00%', '2021-09-03'),
(84, 'Daging Ayam Broiler', '1 kg', '30000', '30000', '-', '0.00%', '2021-09-03'),
(85, 'Daging Ayam Kampung', '1 kg', '75000', '75000', '-', '0.00%', '2021-09-03'),
(86, 'Telur Ayam Boiler', '16 butir/kg', '23500', '23500', '-', '0.00%', '2021-09-03'),
(87, 'Telur Ayam Kampung', '21 butir/kg', '63000', '63000', '-', '0.00%', '2021-09-03'),
(88, 'Telur Bebek', '16butir/kg', '53333', '53333', '-', '0.00%', '2021-09-03'),
(89, 'Cabe Merah Besarg', '1 kg', '30000', '30000', '-', '0.00%', '2021-09-03'),
(90, 'Cabe Keriting', '1 kg', '30000', '30000', '-', '0.00%', '2021-09-03'),
(91, 'Cabe Biasa/Tiung Lokal', '1 kg', '55000', '55000', '-', '0.00%', '2021-09-03'),
(92, 'Bawang Merah', '1 kg', '30000', '30000', '-', '0.00%', '2021-09-03'),
(93, 'Bawang Putih', '1 kg', '30000', '30000', '-', '0.00%', '2021-09-03'),
(94, 'Kasar', '1 kg', '10000', '10000', '-', '0.00%', '2021-09-03'),
(95, 'Halus', '1kg/4 bks 250g', '5000', '5000', '-', '0.00%', '2021-09-03'),
(96, 'Kacang Kedelai Ekspor dan Impor', '1 kg', '10000', '10000', '-', '0.00%', '2021-09-03'),
(97, 'Lokal', '1 kg', '10000', '10000', '-', '0.00%', '2021-09-03'),
(98, 'Kacang Hijau', '1 kg', '22000', '22000', '-', '0.00%', '2021-09-03'),
(99, 'Kacang Tanah', '1 kg', '30000', '30000', '-', '0.00%', '2021-09-03'),
(100, 'Kacang Merah', '1 kg', '35000', '35000', '-', '0.00%', '2021-09-03'),
(101, 'Indomie Rasa Kari Ayam', 'Bungkus', '2500', '2500', '-', '0.00%', '2021-09-03'),
(102, 'Ikan Asin teri kecil', '1 kg', '65000', '65000', '-', '0.00%', '2021-09-03'),
(103, 'Ikan Asin teri besar', '1 kg', '60000', '60000', '-', '0.00%', '2021-09-03'),
(104, 'Ikan Bandeng', '1 kg', '20000', '20000', '-', '0.00%', '2021-09-03'),
(105, 'Ikan layang', '1 kg', '15000', '20000', '5000', '33.33%', '2021-09-03'),
(106, 'Ikan Tongkol', '1 kg', '35000', '35000', '-', '0.00%', '2021-09-03'),
(107, 'Ikan Kakap Merah', '1 kg', '55000', '55000', '-', '0.00%', '2021-09-03'),
(108, 'Ikan Kembung', '1 kg', '30000', '30000', '-', '0.00%', '2021-09-03'),
(109, 'Mujair', '1 kg', '25000', '25000', '-', '0.00%', '2021-09-03'),
(110, 'Ketela Pohon', '1 Tumpuk', '10000', '10000', '-', '0.00%', '2021-09-03'),
(111, 'Kentang', '1 kg', '15000', '15000', '-', '0.00%', '2021-09-03'),
(112, 'Kol', '1 kg', '12000', '12000', '-', '0.00%', '2021-09-03'),
(113, 'Tomat', '1 kg', '20000', '20000', '-', '0.00%', '2021-09-03'),
(114, 'Kol', '1 kg', '20000', '20000', '-', '0.00%', '2021-09-03'),
(115, 'Tomat', '1 kg', '8000', '8000', '-', '0.00%', '2021-09-03'),
(116, 'Tomat', '1 kg', '8000', '8000', '-', '0.00%', '2021-09-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `idberita` int(11) NOT NULL,
  `namaberita` text NOT NULL,
  `tanggalberita` date NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idberita`, `namaberita`, `tanggalberita`, `foto`, `deskripsi`) VALUES
(1, 'Disdag Nunukan Rapat Dengan Psdkp Bahas Perdagangan Legal', '2021-10-13', '6ab1c797e3a6b704b499116c1ed4fd76.jpg', 'Upaya Dinas Perdagangan Kab. Nunukan untuk mendorong penerapan ekspor ikan secara legal terus dilakukan. Seperti tampak pagi Jumat, 18 Juni 2021 kemarin, bertempat di ruang rapat Dinas Perdagangan Kab. Nunukan berlangsung rapat koordinasi antara Dinas Perdagangan, Dinas Perikanan dan PSDKP Wilker Nunukan.\r\n\r\nKepala Dinas Perdagangan Kab. Nunukan, Ir. H. Dian Kusumanto, M.Si, yang memimpin langsung rapat tersebut. Dalam kalimat pengantarnya, pria yang sebelumnya menjabat Kepala Dinas Komunikasi dan Informatika itu mengatakan bahwa tujuan digelarnya rapat tersebut adalah untuk membangun kesamaan persepsi dan sinergitas dalam rangka mewujudkan perdagangan hasil perikanan yang legal.\r\n\r\nDian yang juga pernah memimpin Dinas Perikanan dan Kelautan tersebut lebih lanjut memaparkan bahwa tujuan utama ekspor ikan asal Nunukan dan Kaltara selama ini adalah Tawau Sabah Malaysia. Ironisnya, perdagangan tersebut belum terselenggara sesuai ketentuan yang berlaku. Karena itu, pejabat yang juga pakar di bidang aren tersebut meminta informasi dan masukan dari PSDKP terkait upaya yang dapat dilakukan bersama guna mewujudkan maksud tersebut.\r\n\r\nSalah satu topik bahasan dalam pertemuan tersebut adalah Surat Keterangan Asal (SKA) atau Certificate of Origin (COO). SKA atau Sertifikasi Asal Barang adalah suatu dokumen dimana dinyatakan dalam sertifikat tersebut bahwa barang/komoditas yang diekspor adalah berasal dari daerah/negara pengekspor.\r\n\r\nSebelumnya, tempat pengurusan SKA terdekat hanya dapat dilakukan di Kota Tarakan. Namun dengan ditetapkannya Dinas Perdagangan Kabupaten Nunukan sebagai salah satu Instansi Penerbit Surat Keterangan Asal (IPSKA) oleh Kementerian Perdagangan, maka penerbitan SKA telah dapat dilakukan di Nunukan.\r\n\r\nKepala Bidang Pengembangan Perdagangan Luar Negeri (PPLN), Ari Suwagis Tuti, SS, yang ikut mendampingi Kepala Dinas dalam rapat tersebut menjelaskan bahwa SKA dibagi atas dua yaitu SKA Preferensi dan SKA Non-Preferensi. SKA Preferensi sendiri digunakan terhadap barang ekspor Indonesia untuk memperoleh fasilitas pengurangan atau pembebasan tarif bea masuk di negara yang memiliki perjanjian kerjasama perdagangan dengan Indonesia. Adapun SKA Non Preferensi digunakan terhadap barang ekspor Indonesia tanpa memperoleh fasilitas pengurangan atau pembebasan tarif bea masuk.'),
(3, 'Kotaku Bangun Rumah Wisata Kuliner Di Pulau Nunukan', '2021-10-11', 'e1707ce8704102df198fbeaf2d2e537a.jpg', 'Penggemar kuliner di Kabupaten Nunukan kembali akan dimanjakan dengan bertambahnya tempat wisata kuliner di Pulau Nunukan. Hal tersebut disampaikan oleh Kepala Bidang Pengembangan Perdagangan Dalam Negeri, Dinas Perdagangan Kab. Nunukan, H. Syamsul Daris, SE, usai menghadiri peletakan batu pertama pembangunan Rumah Wisata Kuliner yang terletak di Kelurahan Nunukan Utara, Kamis, 17 Juni 2021. Pembangunan Rumah Wisata Kuliner ini didanai dari dana BPM (Bantuan Pemerintah untuk Masyarakat) Program KOTAKU TA 2021.\r\n\r\nProgram KOTAKU (Kota Tanpa Kumuh) adalah program yang berada di bawah Direktorat Jenderal Cipta Karya Kementerian Pekerjaan Umum dan Perumahan Rakyat. Program ini sendiri bertujuan untuk mencegah timbulnya permukiman kumuh dalam rangka untuk mendukung terwujudnya permukiman perkotaan yang layak huni, produktif, dan berkelanjutan.\r\n\r\nSyamsul Daris mengungkapkan kesyukurannya dengan adanya pembangunan tersebut. Dikatakan Syamsul bahwa meskipun anggaran transfer daerah terus mengalami penurunan yang berimplikasi pada semakin mengecilnya APBD Kab. Nunukan, namun kekurangan tersebut dapat ditutupi melalui beberapa program stategis yang dibiayai langsung oleh Pemeriintah Pusat. Pembangunan Rumah Wisata Kuliner ini merupakan salah satunya.'),
(5, 'Camat Sebatik Tengah Harap Pasar Lokal Serap Produk UKM', '2021-10-19', 'Camat_Sebatik_Tengah_Harap_Pasar_Lokal_Serap_Produk_UKM.jpg', 'Sekretaris Dinas Perdagangan, Harman, S.IP, M.A.P, baru-baru ini menyambangi Kantor Kecamatan Sebatik Tengah. Mantan Sekretaris Dinas Perhubungan tersebut didampingi oleh Kabid Pengembangan Perdagangan Luar Negeri, Ari Suwagistuti, SS. Dalam kunjungan tersebut, Harman ditemui langsung oleh Camat Sebatik Tengah, Aris Nur, S.STP.\r\n\r\nDalam pertemuan singkat tersebut, Harman yang juga pernah menjabat sebagai Camat Nunukan itu, menggali informasi terkait perkembangan pemasaran hasil produk-produk unggulan Kecamatan Sebatik Tengah, baik baku maupun produk olahan. Kecamatan Sebatik Tengah sendiri selama ini dikenal luas dengan hasil-hasil pertanian dan perkebunan seperti kakao dan pisang. Warga Kecamatan Sebatik Tengah juga dikenal produktif menghasilkan hasil kerajinan dan makanan olahan dari bahan baku unggulan yang ada di wilayah tersebut.\r\n\r\nSalah satu yang ingin diketahui Harman adalah bisnis inti yang dijalankan oleh BUMDES Bersama di Kecamatan terluar tersebut dan kendala yang dihadapinya. Mantan Camat Sebatik Tengah tahun 2011-2017 tersebut berharap Dinasnya dapat melakukan sesuatu dalam rangka pengembangan BUMDES Bersama maupun perekonomian masyarakat yang ada di bekas wilayah pengabdiannya tersebut.\r\n\r\nSembari menunggu beroperasinya pabrik kakao bantuan dari Kementerian, BUMDES Bersama Kecamatan Sebatik Tengah, menurut Aris, fokus menjalankan bisnis pembelian biji kakao dari warganya. Bedanya dengan pengumpul pada umumnya, BUMDES membeli biji kakao dalam keadaan basah. Biji kakao tersebut lalu diproses dan dikeringkan lalu dijual kembali ke pengepul besar yang ada di pulau tersebut. Ke depannya, Aris berharap agar BUMDES Bersama tersebut dapat menjual langsung biji kakao kering tersebut ke industri pengolahan yang ada di luar Kabupaten Nunukan. Namun untuk dapat merealisasikan keinginan tersebut, dibutuhkan dana yang lebih besar agar memenuhi target volume yang akan ditetapkan oleh pembeli nantinya.\r\n\r\nMelalui cara ini, menurut Aris, para petani kakao memiliki alternatif pasar selain Tawau. Selama ini, lanjutnya, satu-satunya tempat pemasaran biji kakao asal Sebatik hanyalah Tawau Sabah Malaysia. Akibat monopoli tersebut, harga kakao sepenuhnya dikendalikan oleh pembeli yang ada di negara tersebut.'),
(7, 'Kebijakan Jaga Jarak Lanjut, Bapok Dipastikan Masih Aman', '2021-03-31', 'Kebijakan_Jaga_Jarak_Lanjut,_Bapok_Dipastikan_Masih_Aman.jpg', 'Meskipuk kebijakan physical distancing (jaga jarak) dan Working From Home/WFH (bekerja dari rumah) masih berlanjut, namun persediaan Barang Pokok (Bapok) dipastikan tetap terjamin.  Hal tersebut diungkapkan Kepala Bidang Pengembangan Perdagangan Dalam Negeri, mewakili Kepala Dinas Perdagangan Kab. Nunukan, H. Syamsul Daris, SE, hari ini, Selasa 31 Maret 2020.\r\n\"Berdasarkan hasil pemantauan dan perbincangan dengan beberapa pengecer dan agen yg ditemui di lapangan, stok beras, telor, minyak goreng, dan tepung diperkirakan dapat mencukupi untuk masyarakat Nunukan setidaknya satu bulan kedepan,\" ungkap Syamsul\r\nBapok tersebut, menurut Syamsul,  berasal dari Sulawesi Selatan melalui Kapal Thalia. Beberapa hari sebelumnya, kapal dari Surabaya Jawa Timur juga melakukan bongkar muat sembako dan minuman melalui pelabuhan Tunon Taka Nunukan.\r\nKepala Seksi Pengawasan dan Pengembangan SDM pada Dinas Perdagangan, Abd. Rahman, ST, menambahkan bahwa berdasarkan laporan pemantauan dari berbagai Kecamatan, pasokan barang pokok di kecamatan lain di luar pulau Nunukan juga masih aman.\r\n\"Kami himbau kepada masyarakat agar tenang dan untuk tidak melakukan aksi penimbunan maupun aksi borong yang akan memunculkan kepanikan. Insha Allah pasokan aman,\" tuturnya.\r\nKata kuncinya, tambah Rahman, ada pada alat transportasi laut. Sepanjang jalur transportasi laut, khususnya kapal pengangkut barang antar pulau berjalan lancar, pasokan dipastikan juga aman. Sejauh ini menurut Rahman, jadwal kapal yang rutin bersandar di Pelabuhan Tunon Taka untuk membawa penumpang maupun barang, tidak mengalami perubahan.'),
(8, 'Siasati Kebijakan Lockdown Pemerintah Malaysia, Soa Barang Ke Krayan Tambah Frekuensi Penerbangan', '2020-01-28', 'Siasati_Kebijakan_Lockdown_Pemerintah_Malaysia,_Soa_Barang_Ke_Krayan_Tambah_Frekuensi_Penerbangan.jpg', 'Kabupaten Nunukan, tahun 2020 ini, kembali mendapatkan program Subsidi Ongkos Angkut (SOA) ke wilayah pedalaman dan perbatasan.\r\nProgram Pemerintah Pusat yang dinamakan Jembatan Udara (Jembara) ini telah melayani penerbangan Subsidi Barang ke Krayan sejak 28 Januari 2020 yang lalu.\r\n\"Sejak diluncurkan, sudah dilakukan sedikitnya 10 kali penerbangan pulang pergi dan berhasil mengangkut lebih kurang 9.704 kg barang kebutuhan penduduk di 5 kecamatan yang ada di Krayan,\" ungkap Kepala Dinas Perdagangan, Ir. H. Dian Kusumanto, M.Si.\r\nDitambahkan Dian bahwa jika jadwal penerbangan sebelumnya dilakukan setiap hari Jumat dan Sabtu, maka untuk satu bulan kedepan, jadwal penerbangan akan berubah dan frekuensinya pun meningkat. \r\n“Mulai minggu depan, penerbangan akan dilakukan dari hari Senin sampai dengan hari Jumat setiap minggunya untuk satu bulan kedepan,” ujar Dian.\r\nDian berharap bahwa penambahan frekuensi penerbangan sedikit banyak dapat mengatasi permasalahan yang mungkin timbul akibat kebijakan \"lockdown\" yang saat ini diberlakukan oleh Pemerintah Malaysia. \r\nPenduduk Krayan yang tersebar di lima kecamatan selama ini memang sangat menggantungkan pemenuhan kebutuhan dasarnya dengan barang-barang Malaysia.\r\nSementara itu, Kasubbag Pengawasan dan Bina SDM pada Dinas Perdagangan Kab. Nunukan, Abdul Rahman, ST,  berharap agar masyarakat Krayan juga dapat memanfaatkan penerbangan balik pesawat tersebut dengan mengirim hasil-hasil bumi Krayan untuk dipasarkan ke luar wilayah Krayan. \r\nDijelaskan Rahman bahwa pemasaran produk dan hasil bumi Krayan yang menggunakan fasilitas subsidi baru dapat dilakukan dengan Tarakan.\r\n\"Alhamdulillah masyarakat dan pengusaha Krayan telah mengoptimalkan pemanfaatan muatan balik penerbangan ini. Sejak diluncurkan akhir Januari lalu, total hasil bumi Krayan yang berhasil diangkut keluar dari Krayan tercatat sebanyak 8977 kg,” tuturnya\r\nSelain melalui Bandara Tarakan, Rahman berharap agar rute penerbangan program Jembara juga dapat melalui bandara Nunukan.\r\n“Dalam rapat-rapat koordinasi sebelumnya, kami telah mengusulkan kepada Pemerintah Pusat melalui Kementerian Perhubungan agar rute penerbangan juga dapat melalui Bandara Nunukan. Kalau tidak bisa 100%, minimal 50% rutenya melalui Nunukan,\" bebernya.\r\nDengan semakin bertambahnya frekuensi penerbangan SOA Barang Krayan-Nunukan, penduduk Nunukan juga dapat menikmati produk dan hasil bumi Krayan dengan harga yang lebih terjangkau. \r\nSelama ini, menurut Rahman, harga produk dan hasil bumi asal Krayan yang dipasarkan di Nunukan dikeluhkan mahal.\r\n“Dengan adanya subsidi angkos angkut, harga beras Krayan kini sudah bisa diperoleh dengan harga antara dua puluh lima ribu sampai dengan tiga puluh ribu rupiah per kg di pulau Nunukan” pungkas nya'),
(9, 'Sosialisasi 2', '2021-11-18', 'Foto_11.jpg', 'sosialisasi prokes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galerifoto`
--

CREATE TABLE `galerifoto` (
  `idfoto` int(11) NOT NULL,
  `namakegiatan` text NOT NULL,
  `tanggalkegiatan` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galerifoto`
--

INSERT INTO `galerifoto` (`idfoto`, `namakegiatan`, `tanggalkegiatan`, `foto`) VALUES
(1, 'Disdag Nunukan Rapat Dengan Psdkp Bahas Perdagangan Legal', '2021-06-18', '75c569984325d57df18a7bb67424ea8e.jpg'),
(2, 'Kotaku Bangun Rumah Wisata Kuliner Di Pulau Nunukan', '2021-06-17', '0ffba58cc9379891c48bb1b0c9b76f4c.jpg'),
(4, 'Camat Sebatik Tengah Harap Pasar Lokal Serap Produk UKM', '2021-07-15', '8fb2bca85ec09deab9e702a3175cafdf.jpg'),
(5, 'Galakkan Ekspor Ikan Secara Prosedural, Dinas Perdagangan Lakukan Koordinasi Dengan Skpt Sebatik', '2021-08-11', 'Foto_4.jpg'),
(6, 'Pemantauan Ketersediaan Barang Pokok di Pasar dan Pengiriman Barang Pokok Melalui Subsidi Ongkos Angkut (SOA) Barang Lewat Udara Menjelang Idul Adha', '2021-08-30', '37bcb877453d2dd8e1e58b50759aa117.jpg'),
(7, 'Rapat Linsek Kekarantinaan Dalam Rangka Mendukung Perdagangan Hasil Perikanan Luar Negeri (Ekspor-Impor) Legal dan Domestik', '2021-08-26', 'foto_6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galerivideo`
--

CREATE TABLE `galerivideo` (
  `idvideo` int(11) NOT NULL,
  `namakegiatan` text NOT NULL,
  `tanggalkegiatan` date NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galerivideo`
--

INSERT INTO `galerivideo` (`idvideo`, `namakegiatan`, `tanggalkegiatan`, `video`) VALUES
(1, 'SOSIALISASI PROTOKOL KESEHATAN SEKTOR PERDAGANGAN', '2021-07-17', '2af8ed7a9b4c0135e0d6c0b50daa2c86.mp4'),
(6, 'Kegiatan Tera Ulang', '2021-10-25', 'b9c0038434950ee32324b75f7ee25a1c.mp4'),
(7, 'Kegiatan Tera Ulang', '2021-10-25', '9984de85101642485542572d54b4e002.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenislayanan`
--

CREATE TABLE `jenislayanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_date_time` datetime NOT NULL,
  `updated_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenislayanan`
--

INSERT INTO `jenislayanan` (`id`, `nama`, `created_date_time`, `updated_date_time`) VALUES
(1, 'PENERBITAN SKA', '2022-01-18 09:59:55', '2022-01-18 09:59:55'),
(2, 'PENERBITAN TDG/SKPB', '2022-01-18 09:59:55', '2022-01-18 09:59:55'),
(3, 'PENERBITAN WARALABA/STPW', '2022-01-18 09:59:55', '2022-01-18 09:59:55'),
(4, 'REKOMENDASI IZIN SIUP MINUMAN BERALKOHOL', '2022-01-18 09:59:55', '2022-01-18 09:59:55'),
(5, 'REKOMENDASI PKAPT', '2022-01-18 09:59:55', '2022-01-18 09:59:55'),
(6, 'REKOMENDASI IZIN PENGELOLAAN PASAR', '2022-01-18 09:59:55', '2022-01-18 09:59:55'),
(7, 'PELAYANAN TERA ATAU TERA ULANG', '2022-01-18 09:59:55', '2022-01-18 09:59:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keputusan`
--

CREATE TABLE `keputusan` (
  `idkeputusan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `berkas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keputusan`
--

INSERT INTO `keputusan` (`idkeputusan`, `nama`, `berkas`) VALUES
(9, 'SOP Izin Usaha Perdagangan Pusat Perbelanjaan', 'SOP_Izin_Usaha_Perdagangan_Pusat_Perbelanjaan.pdf'),
(10, 'SOP Izin Usaha Perdagangan - Toko Swalayan', 'SOP_Izin_Usaha_Perdagangan_-_Toko_Swalayan.pdf'),
(11, 'SOP Izin Usaha Perdagangan - Surat Tanda Pendaftaran Waralaba', 'SOP_Izin_Usaha_Perdagangan_-_Surat_Tanda_Pendaftaran_Waralaba.pdf'),
(12, 'Pelayanan Tanda Daftar Gudang', 'Pelayanan_Tanda_Daftar_Gudang.pdf'),
(13, 'SOP Izin Operasional Komersial Tanda Daftar Gudang', 'SOP_Izin_Operasional_Komersial_Tanda_Daftar_Gudang.pdf'),
(14, 'SOP Izin Operasional - Surat Keterangan Perdagangang Minuman Beralkohol', 'SOP_Izin_Operasional_-_Surat_Keterangan_Perdagangang_Minuman_Beralkohol.pdf'),
(15, 'Pemberian Rekomendasi Izin STPW Waralaba', 'Pemberian_Rekomendasi_Izin_STPW_Waralaba.pdf'),
(16, 'Pemberian Rekomendasi Izin SIUP Minuman Beralkohol', 'Pemberian_Rekomendasi_Izin_SIUP_Minuman_Beralkohol.pdf'),
(17, 'Pemberian Rekomendasi Izin IUP2T,IUTM dan IUPP Pasar', 'Pemberian_Rekomendasi_Izin_IUP2T,IUTM_dan_IUPP_Pasar.pdf'),
(18, 'Pemeberian Surat Rekomendasi Pedagang Kayu Antar Pulau Terdaftar (PKAPT)', 'Pemeberian_Surat_Rekomendasi_Pedagang_Kayu_Antar_Pulau_Terdaftar_(PKAPT).pdf'),
(19, 'Pelayanan Pembelian Form Surat Keterangan Asal', 'Pelayanan_Pembelian_Form_Surat_Keterangan_Asal.pdf'),
(20, 'SOP Pemugutan Retribusi Pelayanan Pasar', 'SOP_Pemugutan_Retribusi_Pelayanan_Pasar.pdf'),
(21, 'Pelayanan Registrasi Sistem Surat Keterangan Asal', 'Pelayanan_Registrasi_Sistem_Surat_Keterangan_Asal.pdf'),
(22, 'SOP Pelayanan Penerbitan SKA', 'SOP_Pelayanan_Penerbitan_SKA.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `idpengaduan` int(11) NOT NULL,
  `NIK` text NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `nomorhp` int(15) NOT NULL,
  `email` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `hal` text NOT NULL,
  `status` enum('dibalas','pending','ditolak','') NOT NULL,
  `idadmin` int(11) NOT NULL,
  `idjenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`idpengaduan`, `NIK`, `nama`, `alamat`, `nomorhp`, `email`, `pekerjaan`, `hal`, `status`, `idadmin`, `idjenis`) VALUES
(12, '7326032404040001', 'Natalia', 'Jl Teuku Umar, Nunukan', 2147483647, 'Natalia@gmail.com', 'Rumah Tangga', 'Kelangkaan sembako', 'pending', 4, 0),
(14, '123', 'Theresyah', 'Cangkareng', 82, 'theresyah@gmail.com', 'Mahasiswa', 'Kelangkaan sembako', 'dibalas', 4, 0),
(15, '123', 'testing', 'bekasi', 21, 'sasa@example.com', 'pengangguran', '-', '', 0, 3),
(16, '123', 'tester', 'Bekasi', 123, '123@gg.com', 'Cang', '123', '', 4, 4),
(17, '123', '123', '123', 123, '123@123.com', '123', '123', '', 4, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `idreport` int(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`idreport`, `bulan`, `nilai`) VALUES
(1, 'januari', 30),
(2, 'februari', 40),
(3, 'maret', 50),
(4, 'april', 10),
(5, 'mei', 30),
(6, 'juni', 15),
(7, 'juli', 20),
(8, 'agustus', 60);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `bahanpokok`
--
ALTER TABLE `bahanpokok`
  ADD PRIMARY KEY (`idbahanpokok`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indeks untuk tabel `galerifoto`
--
ALTER TABLE `galerifoto`
  ADD PRIMARY KEY (`idfoto`);

--
-- Indeks untuk tabel `galerivideo`
--
ALTER TABLE `galerivideo`
  ADD PRIMARY KEY (`idvideo`);

--
-- Indeks untuk tabel `jenislayanan`
--
ALTER TABLE `jenislayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`idkeputusan`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`idpengaduan`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`idreport`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `bahanpokok`
--
ALTER TABLE `bahanpokok`
  MODIFY `idbahanpokok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `galerifoto`
--
ALTER TABLE `galerifoto`
  MODIFY `idfoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `galerivideo`
--
ALTER TABLE `galerivideo`
  MODIFY `idvideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jenislayanan`
--
ALTER TABLE `jenislayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `idkeputusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `idpengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `idreport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
