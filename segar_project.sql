-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 08:58 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `segar_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `username` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `nama` varchar(34) NOT NULL,
  `tempatLahir` varchar(9) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `tempatBaptis` varchar(31) NOT NULL,
  `tanggalBaptis` varchar(10) NOT NULL,
  `tempatKrisma` varchar(30) NOT NULL,
  `tanggalKrisma` varchar(10) NOT NULL,
  `riwayatSd` varchar(34) NOT NULL,
  `riwayatSmp` varchar(26) NOT NULL,
  `riwayatSakit` varchar(43) NOT NULL,
  `studi` varchar(22) NOT NULL,
  `namaAyah` varchar(26) NOT NULL,
  `pekerjaanAyah` varchar(20) NOT NULL,
  `nomorTelponAyah` varchar(16) NOT NULL,
  `namaIbu` varchar(25) NOT NULL,
  `pekerjaanIbu` varchar(21) NOT NULL,
  `nomorTelponIbu` varchar(15) NOT NULL,
  `statusPernikahanOrtu` varchar(8) NOT NULL,
  `jumlahSaudara` varchar(1) NOT NULL,
  `alamatRumah` varchar(91) NOT NULL,
  `teleponEmail` varchar(15) NOT NULL,
  `rekomendasiSekolah` varchar(45) NOT NULL,
  `rekomendasiParoki` varchar(151) NOT NULL,
  `asalParoki` varchar(34) NOT NULL,
  `alamatParoki` varchar(49) NOT NULL,
  `teleponParoki` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`nama`, `tempatLahir`, `tanggalLahir`, `tempatBaptis`, `tanggalBaptis`, `tempatKrisma`, `tanggalKrisma`, `riwayatSd`, `riwayatSmp`, `riwayatSakit`, `studi`, `namaAyah`, `pekerjaanAyah`, `nomorTelponAyah`, `namaIbu`, `pekerjaanIbu`, `nomorTelponIbu`, `statusPernikahanOrtu`, `jumlahSaudara`, `alamatRumah`, `teleponEmail`, `rekomendasiSekolah`, `rekomendasiParoki`, `asalParoki`, `alamatParoki`, `teleponParoki`) VALUES
('Agustinus Noben Frestaji', 'Sidoarjo', '0000-00-00', 'St. Yosef Mojokerto', '12/18/2005', 'St. Yosef Mojokerto', '9/22/2019', 'SDK St. Yustinus de Yacobis, Krian', 'SMPN 1 Balong, Bendo', '-', 'Juara Kelas', 'Aloysius Vasi', '-', '0812-4979-0878', 'Maria M. Mujiati', '-', '0822-3070-4095', 'Sakramen', '0', 'GKR Anggrek No.6 RT 21 RW 7 Sedengan Mijen, Kec. Krian, Sidoarjo 61262', '0822-4284-0290', 'Baik', 'Baik', 'St. Yosef Mojokerto', '-', '-'),
('Albertus Dian Gedhe Nugraha', 'Blitar', '0000-00-00', 'St. Maria Blitar', '4/4/2015', 'St. Maria Blitar', '6/10/2019', 'SDN Ngadirejo 2', 'SMPK Yohanes Gabriel', '-', '-', 'Paulus Tur Subekti', '-', '0858-1575-6569', 'Damaris Jayanti', '-', '-', 'Sakramen', '6', 'Jl. KH. Agus Salim No.26 RT 03 RW 01 Kel. Ngadirejo, Kec. Kepanjen Kidul, Kota Blitar 66114', '-', 'Baik', 'Baik', 'St. Maria Blitar', '-', '-'),
('Alexander Nathanael Caesario Aji', 'Mataram', '0000-00-00', 'St. Maria Immaculata Mataram', '4/3/2005', 'St. Maria Immaculata Mataram', '9/12/2018', 'SDK St. Antonius Cakranegara', 'SMPK Kesuma Mataram', 'Diare 2006', 'Juara 3, Spelling Bee', 'Benyamin Ary Priyo Rinowo', '-', '-', 'Liowina Ari Setiawaty', '-', '-', 'Sakramen', '2', 'Graha Permata Kota Blok AN 06 Selagalas, Ds. Bug – bug, kec Lingsar, Mataram, NTB 83371', '0853-3888-3672', 'kesulitan belajar prakarya dan IPS', 'ingin menjadi seorang misionaris', 'St. Maria Immaculata Mataram - NTB', '-', '-'),
('Aloysius Gonzaga Arif Perkasa', '-', '0000-00-00', '-', '-', '-', '-', '-', 'SMP Strada Bhakti', '-', '-', 'Markus Sri Hariyanto', '-', '-', 'Theresia Sri Rahayu', '-', '-', '-', '-', 'Perumahan pondok lakah pemai Blok BB 24 RT 003/ 016 Peninggilan - Ciledug Tangerang', '0812-137-1001', '-', 'rajin mengikuti kegiatan gereja. Kisah panggilan Sejak kelas IV SD saat pergi misa ke paroki ( MEMBERI REKOMENDASI)', 'St. Bernadet Ciledug, Tangerang', '-', '-'),
('Andreas Bisma Wahyu Tama', 'Surabaya', '0000-00-00', 'Salib Suci Tropodo', '1/9/2005', 'St. Paulus Juanda', '10/27/2019', 'SD St. Carolus', 'SMP St. Carolus', '-', '-', 'Agustinus Mardijanto', '-', '0895-6314-1-2390', 'Yuliana Ari Wahyu Ningsih', '-', '0822-3283-3585', 'Sakramen', '2', 'Griya Candra Mas AA-34 RT 01, Kel. Pepe, Kec. Sedati, Sidoarjo 61253', '0813-3450-6376', 'Baik', 'Baik', 'St. Paulus Juanda', '-', '-'),
('Andreas Ivan Gunawan', 'Surabaya', '0000-00-00', 'RKZ', '1/12/2005', '-', '-', 'SDK St. Yosef', 'SMPK St. Yosef', '2014: Operasi usus buntu', '-', 'Yohanes Gunawan', '-', '0813-3090-1071', 'Agatha Winarsih', '-', '0818-3192-181', 'Sakramen', '1', 'Ketintang Timur PTT VA No.36 SURABAYA', '0813-3359-7993', 'Baik', 'Baik', 'St. Yohanes Pemandi SURABAYA', '-', '-'),
('Anselmus Gaudio Ditya Kharisma', 'Ngawi', '0000-00-00', 'St. Yosep Ngawi', '4/24/2005', 'Maria Assumpta Gamping, Sleman', '7/19/2019', 'Kanisius Wirobrajan', 'Maria Immaculata', '2019: DB', '-', 'V.E. Widya Kharism', '-', '0812-2505-0850', 'Theresia Maryanti Broto', '-', '0877-3801-3944', 'Sakramen', '0', 'Jetis RT 4 RW 32 Tirtoadi Mlati, Sleman', '0896-0706-2756', 'Baik', 'Baik', 'St. Maria Assumpta, Gamping', 'Ambarketawang, Gamping, Sleman', '(0274) 978948'),
('Benedictus Adhimas Honesto Mulyono', 'Sidoarjo', '0000-00-00', 'Sakramen Maha Kudus', '-', 'St. Paulus Juanda', '10/27/2019', 'Taman Harapan', 'St. Carolus', 'DB', '-', 'Ignatius Joko Mulyono', '-', '0812-3039-425', 'Elisabeth Ary Purwanti', '-', '0813-3216-1649', 'Sakramen', '2', 'Griya Permata Gedangan M2/03 RT 02 RW 07, Ds. Keboansikep, Kec. Gedangan, Sidoarjo 61254', '-', 'Baik', 'Baik', 'St. Paulus Juanda', '-', '-'),
('Benedictus Feli Traju', '-', '0000-00-00', '-', '12/8/2019', '-', '-', '-', 'SMP St. Yoseph', '-', '-', 'Filianus', 'Pegawai Negeri Sipil', '-', 'Elisabeth Tiwa', '-', '-', '-', '-', 'Jl. Angrek Barat RT15/RW02, Cokormulyo, Kepanjen, Malang', '0821-4292-2679', '-', 'Rajin dalam menggereja, sopan, menghormati dan peduli, aktif dalam kegiatan. Kisah panggilan: pernah diajak romo berkunjung ke biara-biara dan seminari', 'St. Maria Tak Bernoda Kepanjen', '-', '-'),
('Bonaventura Kevin Andhika Wisesa', 'Blitar', '0000-00-00', 'St. Fransiskus Asisi Mojorejo', '12/21/2014', '-', '-', 'SDN Mojorejo 01', 'SMPK Pancasila Wates', '2015: Tipes', 'Juara Kelas', 'Suwanto', '-', '0823-2004-3862', 'Yuliana Emi B.', '-', '0823-3830-0717', 'Sakramen', '1', 'Ds. Mojorejo RT 14 RW 03 Kec. Wates, Kab. Blitar 66194', '0822-6448-8699', 'Baik', 'Baik', 'St. Fransiskus Asisi Mojorejo', '-', '-'),
('Christopher Satrio Argo Yuwono', '-', '0000-00-00', '-', '12/11/2005', '-', '-', '-', 'SMPK Yos Sudarso Blitar', '-', '-', 'Krisdiyono', 'Pegawai Negeri Sipil', '-', 'Sisilia D.K.', 'Pegawai Negeri Sipili', '-', '-', '-', 'Jl. Maninjau D3 No 6 Tanjungsari RT01 RW06 Sukorejo, Blitar', '0812-3409-9493', '-', 'Cukup ulet dan perduli kepada teman, aktif dalam kegiatan', 'St. Maria Blitar', '-', '-'),
('Dion Saka Bintang', '-', '0000-00-00', '-', '3/26/2016', '-', '-', '-', 'SMPK St. Maria Tulungagung', '-', '-', 'Didit Murdowo', '-', '-', 'Erit Triani', '-', '-', '-', '-', 'Jl. Pangilma Sudirman VII RT 04/RW 06 Kepatihan - Tulungangung', '0813-1797-9790', '-', 'Pelayanan mazmur dan koor, aktif dalam kegiatan', 'St. Maria DTBA Tulungagung', '-', '-'),
('Frederiko Koten', '-', '0000-00-00', '-', '11/26/2004', '-', '-', '-', 'SMPK Panti Parama Pandaan', '-', '-', 'Christoforus Koten', '-', '-', 'Suryani Agustina', '-', '-', '-', '-', 'Dsn. Pandean, Kejapan RT04/RW14 Gempol, Pasuruan', '0812-3007-2242', '-', 'Mengikuti misa dan sekolah minggu. Mengikuti kelompok gereja.', 'St. Theresia Pandaan', '-', '-'),
('Gabriel Satya Priyahita', 'Surabaya', '0000-00-00', 'St. Yusup Blitar', '5/22/2005', 'St. Maria Annuntiata Sidoarjo', '8/11/2019', 'SDK Santa Maria Blitar', 'SMPK St. Maria 2 Sidoarjo', 'Kelas I: alergi udang; Kelas VI: DB, Alergi', 'Juara Kelas', 'Thomas Tjondro Wiyono', '-', '-', 'Sisilia Kanthi Lestari', '-', '0817-9326-023', 'Sakramen', '2', 'Pesona Sekar Gading 22-10 RT 23 RW 07 Sekar dangan, Sidoarjo 61215', '0877-0288-0690', 'Baik', 'Baik', 'St. Maria Annuntiata Sidoarjo', '-', '-'),
('Galeleo Harfia Firdaus', '-', '0000-00-00', '-', '6/6/2015', '-', '-', '-', 'SMPK St. Maria Tulungagung', '-', '-', 'Hanafi', 'Wiraswasta', '-', 'Elvira Hanoum', 'Ibu Rumah Tangga', '-', '-', '-', 'Jl. Ronggowarsito RT. 10 RW. 03 Sumbergedong -trenggalek', '0812-3321-3589', '-', 'aktif mengikuti kegiatan gereja. Ingin menjadi romo ketika menjadi misdinar ( MEMBERI REKOMENDASI)', 'St. Maria DTBA Tulungagung', '-', '-'),
('Gerald Denanda Bayu Wiliprasetyo', 'Surabaya', '0000-00-00', 'Kristus Raja', '2/25/2007', '-', '-', 'St. Theresia 2 Surabaya', 'SMPK St. Agnes Surabaya', 'DB', 'Juara Kelas', 'Lukas Kambali', '-', '0812-3116-6033', 'B. Reni Martias Pancadewi', '-', '0812-3116-6011', 'Sakramen', '3', 'Jl. Kalikepiting Jaya 8A / 5 SURABAYA', '0812-4906-7817', 'Baik', 'Baik', 'Kristus Raja Surabaya', 'Jl. Residen Sudirman No.3', '-'),
('Ignatius Aron Budi Cahyono', 'Blitar', '0000-00-00', '-', '-', '-', '-', 'SDN Resapombo 05', 'SMPN 1 Doko', '-', '-', 'Yulius Andrian Sugiono', '-', '0815-1583-3467', 'Yuliana Titis Hendriati', '-', '0857-3086-7519', 'Sakramen', '0', 'Dsn. Salamrejo RT 2 RW 2, Ds. Resapombo, Kec. Doko, Kab. Blitar 66186', '0815-1583-3467', 'Baik', 'Baik', 'St. Fransiskus Asisi Resapombo', '-', '-'),
('Ignatius Bagas Harfianto', 'Bekasi', '0000-00-00', 'St. Anna Jakarta Timur', '6/3/2005', 'St. Arnoldus Janssen', '10/14/2018', 'St. Lusia, Bekasi', 'Strada Budi Luhur, Bekasi', '2016: Tipes, DBS; 2018: Operasi Amandel', 'Rajin', 'T. Agus Joko Prasetyo', '-', '0812-5309-0774', 'Elisabeth Harfina', '-', '0878-8027-1624', 'Sakramen', '1', 'Jl. Berlian 3 No.52 RT 011/RW 037', '0878-8027-1624', 'Baik', 'Baik', 'St. Arnoldus Janssen, Bekasi', 'Jl. Ir. H. Juanda No.164 Bekasi 17113, Jawa Barat', '-'),
('Imanuel Julius Widodo', '-', '0000-00-00', '-', '-', '-', '-', '-', 'SMP Negeri 2 Bojonegoro', '-', '-', 'Poedjo (alm)', '-', '-', 'Agatha Sukemi', '-', '-', '-', '-', 'jl. Ade irma Suryani No.66 rt 007/ rw 001 Klangon - Bojonegoro', '-', '-', 'suka membantu, rendah hati dan perhatian mengikuti kegiatan rekat dan misdinar (TIDAH MENCORET SALAH SATU)', 'St. Paulus Bojonegoro', '-', '-'),
('Karolus Gerson Nala', '-', '0000-00-00', '-', '3/19/2006', '-', '9/22/2019', '-', 'SMP St. Yusup Pacet', '-', '-', 'Agustinus Jemahut', '-', '-', 'Bernadeta Mustika Ningsih', '-', '-', '-', '-', 'Dsn. Ngemplak ds. Kesimah Tengah RT001 RW 003 Pacet - Mojokerto', '-', '-', '-', '-', '-', '-'),
('Nathaniel Sturges Dotulong', 'Mojokerto', '0000-00-00', 'St. Yosef Mojokerto', '10/15/2006', 'St. Yosef Mojokerto', '9/22/2019', 'SDK Wijana Sejati', 'SMPK St. Yusup', 'Tipes', 'Cukup Cerdas', 'Roby Erol (Alm.)', '-', '-', 'Anastasia Dwi Sukasdijani', '-', '0813-3242-1966', '-', '1', 'Jl. Argopuro Raya No.2B, Ds. Wates, Kel. Wates, Kec. Magersari, Kota Mojokerto 61317', '0813-3242-1966', 'Baik', 'Baik', 'St. Yosef Mojokerto', '-', '-'),
('Niko Pratama', '-', '0000-00-00', '-', '3/20/2011', '-', '-', '-', '-', '-', '-', 'Johanson Suatan', 'Pensiunan', '-', 'Muslikah (alm)', '-', '-', '-', '-', 'Jl. Klampis semolo Timur I AB - 19 Surabaya', '0813-5778-9919', '-', 'Ramah, disiplin. Kisah panggilan disekollah katolik samping gereja dan sering melihat romo lalu tertarik (MEMBERI REKOMENDASI)', 'St. Maria Tak bercela surabaya', '-', '-'),
('Oktavianus Alvin Ardianto', 'Blitar', '0000-00-00', 'St. Fransiskus Asisi Mojorejo', '12/23/2013', '-', '-', 'SDN Mojorejo 01', 'SMPK Pancasila Wates', '2019: Patah tulang operasi jari', '-', 'Yohanes Suwardi', '-', '-', 'Nanik Subiati', '-', '-', 'Sakramen', '1', 'Ds. Mojorejo RT 15 RW 03 Kec. Wates, Kab. Blitar 66194', '-', 'Baik', 'Baik', 'St. Fransiskus Asisi Mojorejo', '-', '-'),
('Rafael Apriado Giovant', 'Sidoarjo', '0000-00-00', 'Sakramen Maha Kudus', '5/12/2005', 'Sakramen Maha Kudus', '4/8/2019', 'SDK St. Katarina', 'SMPK St. Carolus', '2017: DBD', 'malas', 'Lukas Suprihanto', '-', '0812-3422-2625', 'Christina Handini N.', '-', '0813-3045-6682', 'Sakramen', '1', 'Perum Taman Pondok Legi 1C/12a RT 07 RW 08', '0813-5956-2753', 'Baik', 'Baik', 'Sakramen Maha Kudus', '-', '-'),
('Silvester Berino Abhinaya Septano', 'Surabaya', '0000-00-00', 'St. Vincentius A Paulo Surabaya', '3/23/2005', 'St. Maria Immaculata Mataram', '12/9/2018', 'SDK Stanilaus Mataram', 'SMPK Kesuma Mataram', 'DB 2012', '-', 'Roden Fransiskus Xaverius', '-', '0877-6586-3586', 'Inneke Witaningsih', '-', '0812-1636-6821', 'Sakramen', '2', 'Jl. Alexandria IV B-08, Mataram -NTB', '0877-6586-3586', 'Kesulitan mata pelajaran IPS, Sopan dan aktif', 'Dorongan hati ingin mempersembahkan untuk Tuhan, aktif sebagai misdinar, di gereja suka ngobrol dan ngantuk', 'St. Maria Immaculata Mataram - NTB', '-', '-'),
('Stefanus Sinyo Axel Medi', '-', '0000-00-00', '-', '6/5/2005', '-', '9/29/2019', '-', 'SMP Angelus Custos 1', '-', '-', 'Hendrikus Dino', 'WNA Malaysia', '-', 'Maria Yosefina', '-', '-', '-', '-', 'Jl. Kawukan lapangan 2A perum Grand Kirana Payung No. 27 Lontar SURABAYA', '0812-5276-2983', '-', 'aktif mengereja, sopan santun dan ramah. (MEMBERI REKOMENDASI)', 'St. Stefanus Surabaya', '-', '-'),
('Yohanes Ndaru Seto Panji Sasmito', 'Blitar', '0000-00-00', 'St. Yusup Blitar', '5/3/2005', '-', '-', 'SDN Sananwetan 2 Blitar', '-', 'Penyakit kuning, tipus, sakit perut', 'harapan III, lomba MTK', 'Antonius Sumani', '-', '-', 'Yuliana Hesti Suprihatin', '-', '0812-6624-0920', 'Sakramen', '2', 'Sananwetan, Blitar 66131', '0812-6624-0920', 'Baik', 'Baik', 'St. Yusup Blitar', '-', '-'),
('Yohanes Sean Carol', '-', '0000-00-00', '-', '3/30/2009', '-', '-', '-', 'SMP Yos Sudarso Cigugur', '-', '-', 'Agatho Supriani', '-', '-', 'Kristina Mimin', '-', '-', '-', '-', 'Dsn. Cibunut Garawangi- kuningan', '0818-0627-0633', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tanggalBaptis` date NOT NULL,
  `tempatBaptis` varchar(100) NOT NULL,
  `tanggalKrisma` date NOT NULL,
  `tempatKrisma` varchar(100) NOT NULL,
  `riwayatSd` varchar(100) NOT NULL,
  `riwayatSmp` varchar(100) NOT NULL,
  `riwayatSakit` varchar(100) NOT NULL,
  `studi` varchar(100) NOT NULL,
  `namaAyah` varchar(100) NOT NULL,
  `pekerjaanAyah` varchar(80) NOT NULL,
  `nomorTelponAyah` varchar(50) NOT NULL,
  `namaIbu` varchar(100) NOT NULL,
  `pekerjaanIbu` varchar(80) NOT NULL,
  `nomorTelponIbu` varchar(50) NOT NULL,
  `statusPernikahanOrtu` varchar(100) NOT NULL,
  `jumlahSaudara` int(10) NOT NULL,
  `alamatRumah` varchar(100) NOT NULL,
  `teleponEmail` varchar(100) NOT NULL,
  `rekomendasiSekolah` varchar(100) NOT NULL,
  `rekomendasiParoki` varchar(100) NOT NULL,
  `asalParoki` varchar(100) NOT NULL,
  `alamatParoki` varchar(100) NOT NULL,
  `teleponParoki` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `tanggalLahir`, `tempatLahir`, `tanggalBaptis`, `tempatBaptis`, `tanggalKrisma`, `tempatKrisma`, `riwayatSd`, `riwayatSmp`, `riwayatSakit`, `studi`, `namaAyah`, `pekerjaanAyah`, `nomorTelponAyah`, `namaIbu`, `pekerjaanIbu`, `nomorTelponIbu`, `statusPernikahanOrtu`, `jumlahSaudara`, `alamatRumah`, `teleponEmail`, `rekomendasiSekolah`, `rekomendasiParoki`, `asalParoki`, `alamatParoki`, `teleponParoki`) VALUES
(1, 'Ignatius Bagas Harfianto', '2005-01-10', 'Bekasi', '2005-06-03', 'St. Anna Jakarta Timur', '2018-10-14', 'St. Arnoldus Janssen', 'St. Lusia, Bekasi', 'Strada Budi Luhur, Bekasi', '2016: Tipes, DBS; 2018: Operasi Amandel', 'Rajin', 'T. Agus Joko Prasetyo', '', '0812-5309-0774', 'Elisabeth Harfina', '', '0878-8027-1624', 'Sakramen', 1, 'Jl. Berlian 3 No.52 RT 011/RW 037', '0878-8027-1624', 'Baik', 'Baik', 'St. Arnoldus Janssen, Bekasi', 'Jl. Ir. H. Juanda No.164 Bekasi 17113, Jawa Barat', '-'),
(2, 'Rafael Apriado Giovant ', '2005-04-21', 'Sidoarjo', '2005-05-12', 'Sakramen Maha Kudus', '2019-04-08', 'Sakramen Maha Kudus', 'SDK St. Katarina', 'SMPK St. Carolus', '2017: DBD', 'malas', 'Lukas Suprihanto', '', '0812-3422-2625', 'Christina Handini N.', '', '0813-3045-6682', 'Sakramen', 1, 'Perum Taman Pondok Legi 1C/12a RT 07 RW 08 ', '0813-5956-2753', 'Baik', 'Baik', 'Sakramen Maha Kudus', '-', '-'),
(3, 'Anselmus Gaudio Ditya Kharisma', '2005-11-02', 'Ngawi', '2005-04-24', 'St. Yosep Ngawi', '2019-07-19', 'Maria Assumpta Gamping, Sleman', 'Kanisius Wirobrajan', 'Maria Immaculata', '2019: DB', '-', 'V.E. Widya Kharism', '', '0812-2505-0850', 'Theresia Maryanti Broto', '', '0877-3801-3944', 'Sakramen', 0, 'Jetis RT 4 RW 32 Tirtoadi Mlati, Sleman', '0896-0706-2756', 'Baik', 'Baik', 'St. Maria Assumpta, Gamping', 'Ambarketawang, Gamping, Sleman', '(0274) 978948'),
(4, 'Albertus Dian Gedhe Nugraha', '2004-05-05', 'Blitar', '2015-04-04', 'St. Maria Blitar', '2019-06-10', 'St. Maria Blitar', 'SDN Ngadirejo 2', 'SMPK Yohanes Gabriel', '-', '-', 'Paulus Tur Subekti', '', '0858-1575-6569', 'Damaris Jayanti', '', '-', 'Sakramen', 6, 'Jl. KH. Agus Salim No.26 RT 03 RW 01 Kel. Ngadirejo, Kec. Kepanjen Kidul, Kota Blitar 66114', '-', 'Baik', 'Baik', 'St. Maria Blitar', '-', '-'),
(5, 'Oktavianus Alvin Ardianto', '2004-03-10', 'Blitar', '2013-12-23', 'St. Fransiskus Asisi Mojorejo', '0000-00-00', '-', 'SDN Mojorejo 01', 'SMPK Pancasila Wates', '2019: Patah tulang operasi jari', '-', 'Yohanes Suwardi', '', '-', 'Nanik Subiati', '', '-', 'Sakramen', 1, 'Ds. Mojorejo RT 15 RW 03 Kec. Wates, Kab. Blitar 66194', '-', 'Baik', 'Baik', 'St. Fransiskus Asisi Mojorejo', '-', '-'),
(6, 'Bonaventura Kevin Andhika Wisesa', '2004-10-23', 'Blitar', '2014-12-21', 'St. Fransiskus Asisi Mojorejo', '0000-00-00', '-', 'SDN Mojorejo 01', 'SMPK Pancasila Wates', '2015: Tipes', 'Juara Kelas', 'Suwanto', '', '0823-2004-3862', 'Yuliana Emi B.', '', '0823-3830-0717', 'Sakramen', 1, 'Ds. Mojorejo RT 14 RW 03 Kec. Wates, Kab. Blitar 66194', '0822-6448-8699', 'Baik', 'Baik', 'St. Fransiskus Asisi Mojorejo', '-', '-'),
(7, 'Gerald Denanda Bayu Wiliprasetyo', '2005-09-30', 'Surabaya', '2007-02-25', 'Kristus Raja', '0000-00-00', '-', 'St. Theresia 2 Surabaya', 'SMPK St. Agnes Surabaya', 'DB', 'Juara Kelas', 'Lukas Kambali', '', '0812-3116-6033', 'B. Reni Martias Pancadewi', '', '0812-3116-6011', 'Sakramen', 3, 'Jl. Kalikepiting Jaya 8A / 5 SURABAYA', '0812-4906-7817', 'Baik', 'Baik', 'Kristus Raja Surabaya', 'Jl. Residen Sudirman No.3', '-'),
(8, 'Andreas Ivan Gunawan', '2005-11-30', 'Surabaya', '2005-01-12', 'RKZ', '0000-00-00', '-', 'SDK St. Yosef', 'SMPK St. Yosef', '2014: Operasi usus buntu', '-', 'Yohanes Gunawan', '', '0813-3090-1071', 'Agatha Winarsih', '', '0818-3192-181', 'Sakramen', 1, 'Ketintang Timur PTT VA No.36 SURABAYA', '0813-3359-7993', 'Baik', 'Baik', 'St. Yohanes Pemandi SURABAYA', '-', '-'),
(9, 'Agustinus Noben Frestaji', '2005-08-23', 'Sidoarjo', '2005-12-18', 'St. Yosef Mojokerto', '2019-09-22', 'St. Yosef Mojokerto', 'SDK St. Yustinus de Yacobis, Krian', 'SMPN 1 Balong, Bendo', '-', 'Juara Kelas', 'Aloysius Vasi', '', '0812-4979-0878', 'Maria M. Mujiati', '', '0822-3070-4095', 'Sakramen', 0, 'GKR Anggrek No.6 RT 21 RW 7 Sedengan Mijen, Kec. Krian, Sidoarjo 61262', '0822-4284-0290', 'Baik', 'Baik', 'St. Yosef Mojokerto', '-', '-'),
(10, 'Nathaniel Sturges Dotulong', '2005-06-07', 'Mojokerto', '2006-10-15', 'St. Yosef Mojokerto', '2019-09-22', 'St. Yosef Mojokerto', 'SDK Wijana Sejati', 'SMPK St. Yusup', 'Tipes', 'Cukup Cerdas', 'Roby Erol (Alm.)', '', '-', 'Anastasia Dwi Sukasdijani', '', '0813-3242-1966', '-', 1, 'Jl. Argopuro Raya No.2B, Ds. Wates, Kel. Wates, Kec. Magersari, Kota Mojokerto 61317', '0813-3242-1966', 'Baik', 'Baik', 'St. Yosef Mojokerto', '-', '-'),
(11, 'Benedictus Adhimas Honesto Mulyono', '2005-04-30', 'Sidoarjo', '0000-00-00', 'Sakramen Maha Kudus', '2019-10-27', 'St. Paulus Juanda', 'Taman Harapan', 'St. Carolus', 'DB', '-', 'Ignatius Joko Mulyono', '', '0812-3039-425', 'Elisabeth Ary Purwanti', '', '0813-3216-1649', 'Sakramen', 2, 'Griya Permata Gedangan M2/03 RT 02 RW 07, Ds. Keboansikep, Kec. Gedangan, Sidoarjo 61254', '-', 'Baik', 'Baik', 'St. Paulus Juanda', '-', '-'),
(12, 'Andreas Bisma Wahyu Tama', '2004-11-19', 'Surabaya', '2005-01-09', 'Salib Suci Tropodo', '2019-10-27', 'St. Paulus Juanda', 'SD St. Carolus', 'SMP St. Carolus', '-', '-', 'Agustinus Mardijanto', '', '0895-6314-1-2390', 'Yuliana Ari Wahyu Ningsih', '', '0822-3283-3585', 'Sakramen', 2, 'Griya Candra Mas AA-34 RT 01, Kel. Pepe, Kec. Sedati, Sidoarjo 61253', '0813-3450-6376', 'Baik', 'Baik', 'St. Paulus Juanda', '-', '-'),
(13, 'Ignatius Aron Budi Cahyono', '2004-10-02', 'Blitar', '0000-00-00', '-', '0000-00-00', '-', 'SDN Resapombo 05', 'SMPN 1 Doko', '-', '-', 'Yulius Andrian Sugiono', '', '0815-1583-3467', 'Yuliana Titis Hendriati', '', '0857-3086-7519', 'Sakramen', 0, 'Dsn. Salamrejo RT 2 RW 2, Ds. Resapombo, Kec. Doko, Kab. Blitar 66186', '0815-1583-3467', 'Baik', 'Baik', 'St. Fransiskus Asisi Resapombo', '-', '-'),
(14, 'Gabriel Satya Priyahita', '2004-11-28', 'Surabaya', '2005-05-22', 'St. Yusup Blitar', '2019-08-11', 'St. Maria Annuntiata Sidoarjo ', 'SDK Santa Maria Blitar', 'SMPK St. Maria 2 Sidoarjo', 'Kelas I: alergi udang; Kelas VI: DB, Alergi', 'Juara Kelas', 'Thomas Tjondro Wiyono', '', '-', 'Sisilia Kanthi Lestari', '', '0817-9326-023', 'Sakramen', 2, 'Pesona Sekar Gading 22-10 RT 23 RW 07 Sekar dangan, Sidoarjo 61215', '0877-0288-0690', 'Baik', 'Baik', 'St. Maria Annuntiata Sidoarjo', '-', '-'),
(15, 'Yohanes Ndaru Seto Panji Sasmito', '2005-03-24', 'Blitar', '2005-05-03', 'St. Yusup Blitar', '0000-00-00', '-', 'SDN Sananwetan 2 Blitar', '-', 'Penyakit kuning, tipus, sakit perut', 'harapan III, lomba MTK', 'Antonius Sumani ', '', '-', 'Yuliana Hesti Suprihatin', '', '0812-6624-0920', 'Sakramen', 2, 'Sananwetan, Blitar 66131', '0812-6624-0920 ', 'Baik', 'Baik', 'St. Yusup Blitar', '-', '-'),
(16, 'Alexander Nathanael Caesario Aji', '2005-02-08', 'Mataram', '2005-04-03', 'St. Maria Immaculata Mataram', '2018-09-12', 'St. Maria Immaculata Mataram', 'SDK St. Antonius Cakranegara', 'SMPK Kesuma Mataram', 'Diare 2006', 'Juara 3, Spelling Bee', 'Benyamin Ary Priyo Rinowo', '', '-', 'Liowina Ari Setiawaty', '', '-', 'Sakramen', 2, 'Graha Permata Kota Blok AN 06 Selagalas, Ds. Bug ? bug, kec Lingsar, Mataram, NTB 83371', '0853-3888-3672', 'kesulitan belajar prakarya dan IPS', 'ingin menjadi seorang misionaris', 'St. Maria Immaculata Mataram - NTB', '-', '-'),
(17, 'Silvester Berino Abhinaya Septano', '2004-12-20', 'Surabaya', '2005-03-23', 'St. Vincentius A Paulo Surabaya', '2018-12-09', 'St. Maria Immaculata Mataram', 'SDK Stanilaus Mataram', 'SMPK Kesuma Mataram', 'DB 2012', '-', 'Roden Fransiskus Xaverius ', '', '0877-6586-3586 ', 'Inneke Witaningsih', '', '0812-1636-6821 ', 'Sakramen', 2, 'Jl. Alexandria IV B-08, Mataram -NTB', '0877-6586-3586 ', 'Kesulitan mata pelajaran IPS, Sopan dan aktif', 'Dorongan hati ingin mempersembahkan untuk Tuhan, aktif sebagai misdinar, di gereja suka ngobrol dan ', 'St. Maria Immaculata Mataram - NTB', '-', '-'),
(18, 'Karolus Gerson Nala', '2007-07-05', '', '2006-03-19', '', '2019-09-22', '', '', 'SMP St. Yusup Pacet', '', '', 'Agustinus Jemahut', '', '', 'Bernadeta Mustika Ningsih', '', '', '', 0, 'Dsn. Ngemplak ds. Kesimah Tengah RT001 RW 003 Pacet - Mojokerto', '', '', '', '', '', ''),
(19, 'Galeleo Harfia Firdaus', '2006-03-17', '', '2015-06-06', '', '0000-00-00', '', '', 'SMPK St. Maria Tulungagung', '', '', 'Hanafi', 'Wiraswasta', '', 'Elvira Hanoum', 'Ibu Rumah Tangga', '', '', 0, 'Jl. Ronggowarsito RT. 10 RW. 03 Sumbergedong -trenggalek ', '0812-3321-3589', '', 'aktif mengikuti kegiatan gereja. Ingin menjadi romo ketika menjadi misdinar ( MEMBERI REKOMENDASI)', 'St. Maria DTBA Tulungagung', '', ''),
(20, 'Stefanus Sinyo Axel Medi', '2005-04-09', '', '2005-06-05', '', '2019-09-29', '', '', 'SMP Angelus Custos 1', '', '', 'Hendrikus Dino', 'WNA Malaysia', '', 'Maria Yosefina', '', '', '', 0, 'Jl. Kawukan lapangan 2A perum Grand Kirana Payung No. 27 Lontar SURABAYA', '0812-5276-2983', '', 'aktif mengereja, sopan santun dan ramah. (MEMBERI REKOMENDASI)', 'St. Stefanus Surabaya', '', ''),
(21, 'Niko Pratama', '2004-06-04', '', '2011-03-20', '', '0000-00-00', '', '', '', '', '', 'Johanson Suatan', 'Pensiunan', '', 'Muslikah (alm.)', '', '', '', 0, 'Jl. Klampis semolo Timur I AB - 19 Surabaya', '0813-5778-9919', '', 'Ramah, disiplin. Kisah panggilan disekollah katolik samping gereja dan sering melihat romo lalu tert', 'St. Maria Tak bercela surabaya', '', ''),
(22, 'Dion Saka Bintang', '2005-07-16', '', '2016-03-26', '', '0000-00-00', '', '', 'SMPK St. Maria Tulungagung', '', '', 'Didit Murdowo', '', '', 'Erit Triani', '', '', '', 0, 'Jl. Pangilma Sudirman VII RT 04/RW 06 Kepatihan - Tulungangung', '0813-1797-9790', '', 'Pelayanan mazmur dan koor, aktif dalam kegiatan', 'St. Maria DTBA Tulungagung', '', ''),
(23, 'Christopher Satrio Argo Yuwono', '2004-10-17', '', '2005-12-11', '', '0000-00-00', '', '', 'SMPK Yos Sudarso Blitar', '', '', 'Krisdiyono', 'Pegawai Negeri Sipil', '', 'Sisilia D.K.', 'Pegawai Negeri Sipil', '', '', 0, 'Jl. Maninjau D3 No 6 Tanjungsari RT01 RW06 Sukorejo, Blitar', '0812-3409-9493', '', 'Cukup ulet dan perduli kepada teman, aktif dalam kegiatan', 'St. Maria Blitar', '', ''),
(24, 'Benedictus Feli Traju', '2006-12-24', '', '2019-12-08', '', '0000-00-00', '', '', 'SMP St. Yoseph', '', '', 'Filianus', 'Pegawai Negeri Sipil', '', 'Elisabeth Tiwa', '', '', '', 0, 'Jl. Angrek Barat RT15/RW02, Cokormulyo, Kepanjen, Malang', '0821-4292-2679', '', 'Rajin dalam menggereja, sopan, menghormati dan peduli, aktif dalam kegiatan. Kisah panggilan: pernah', 'St. Maria Tak Bernoda Kepanjen', '', ''),
(25, 'Frederiko Koten', '2004-08-22', '', '2004-11-26', '', '0000-00-00', '', '', 'SMPK Panti Parama Pandan', '', '', 'Christoforus Koten', '', '', 'Suryani Agustina', '', '', '', 0, 'Dsn. Pandean, Kejapan RT04/RW14 Gempol, Pasuruan', '0812-3007-2242', '', 'Mengikuti misa dan sekolah minggu. Mengikuti kelompok gereja.', 'St. Theresia Pandan', '', ''),
(26, 'Aloysius Gonzaga Arif Perkasa', '2005-07-27', '', '0000-00-00', '', '0000-00-00', '', '', 'SMP Strada Bhakti', '', '', 'Markus Sri Hariyanto', '', '', 'Theresia Sri Rahayu', '', '', '', 0, 'Perumahan pondok lakah pemai Blok BB 24 RT 003/ 016 Peninggilan - Ciledug Tangerang', '0812-137-1001', '', 'rajin mengikuti kegiatan gereja. Kisah panggilan Sejak kelas IV SD saart ppergi misa ke paroki ( MEM', 'St. Bernadet Ciledug, Tangerang', '', ''),
(27, 'Yohanes Sean Carol', '2005-04-06', '', '2009-03-30', '', '0000-00-00', '', '', 'SMP Yos Sudarso Cigugur', '', '', 'Agatho Supriani', '', '', 'Kristina Mimin', '', '', '', 0, 'Dsn. Cibunut Garawangi- kuningan ', '0818-0627-0633', '', '', '', '', ''),
(28, 'Imanuel Julius Widodo', '2005-07-30', '', '0000-00-00', '', '0000-00-00', '', '', 'SMP Negeri 2 Bojonegoro', '', '', 'Poedjo (alm.)', '', '', 'Agatha Sukemi', '', '', '', 0, 'jl. Ade irma Suryani No.66 rt 007/ rw 001 Klangon - Bojonegoro', '', '', 'suka membantu, rendah hati dan perhatian mengikuti kegiatan rekat dan misdinar ', 'St. Paulus Bojonegoro', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`,`nama`,`password`,`username`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
