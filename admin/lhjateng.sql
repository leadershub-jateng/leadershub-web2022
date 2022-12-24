-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for lhjateng
DROP DATABASE IF EXISTS `lhjateng`;
CREATE DATABASE IF NOT EXISTS `lhjateng` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lhjateng`;

-- Dumping structure for table lhjateng.artikel
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `penulis` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tglUpload` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `id_tag` bigint(20) unsigned DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_artikel`),
  KEY `id_user` (`id_user`),
  KEY `id_tag` (`id_tag`),
  CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  CONSTRAINT `artikel_to_tag` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table lhjateng.artikel: ~4 rows (approximately)
INSERT INTO `artikel` (`id_artikel`, `penulis`, `judul`, `tglUpload`, `gambar`, `isi`, `id_tag`, `id_user`) VALUES
	(2, 'Harjasa Kurniawan', 'Waspada! Ada Malware Baru Ditemukan Masuk ke Akun Youtube', '2022-09-04', 'lala-azizli-OFZUaeYKP3k-unsplash.jpg', 'Ada sebuah malware baru yang menyebar melalui akun YouTube bernama Redline Infostealer. Melansir Tech Radar, pakar keamanan siber dari Kaspersky menemukan malware yang masuk ke akun YouTube & mengunggah video ke saluran mereka. <br> Seorang korban idealnya seperti gamers PC yang melihat video tentang crack, atau cheat gim favorit mereka seperti FIFA, Final Fantasy, Forza Horizon, Lego Star Wars, atau Spiderman. <br> Dalam deskripsi video itu terdapat tautan yang untuk mendapatkan cheat, namun pada kenyataanya menampung beberapa malware yang digabungkan menjadi satu. <br> Dalam bundel RedLine Stealer mampu mencuri kata sandi yang disimpan di browser orang, cookie, detail kartu kredit, percakapan pesan instan, serta dompet cryptocurrency. <br> Yang paling menarik bundel itu memiliki tiga executable berbahaya, yang disebut MakiseKurisu.exe, Download.exe, dan upload exe. <br> Makise Kurisu adalah infostealer yang mengambil cookie browser dan menyimpannya secara lokal. Download.exe mengambil video crack palsu dari repositori GitHub dan menyerahkannya ke upload.exe sehingga akan mengunggah videonya ke akun YouTube korban.', 2, 1),
	(4, 'Harjasa Kurniawan', 'Penampakan Dahsyatnya Gempa Taiwan yang Memakan Korban jiwa', '2022-09-04', 'new-artickel.jpg', 'Anggota Dewan Pertimbangan Presiden (Wantimpres) Sidarto Danusubroto mengenang kiprah mendiang Azyumardi Azra memperjuangkan Islam moderat. Sidarto berkata Azyumardi selalu memperkenalkan Islam moderat di setiap forum internasional. Dia mengaku terpukau saat mendengarkan presentasi Azyumardi di Al-Azhar beberapa tahun lalu. <br>', 2, 1),
	(5, 'Hana Purnawati', 'Program Meriah Bareng Mega Lanjut, Emas dan Apartemen Menanti Nasabah', '2022-09-07', 'jason-goodman-Oalh2MojUuk-unsplash.jpg', 'Bank Mega melanjutkan agenda Meriah Bareng Mega. Program tersebut berlaku untuk semua pengguna layanan, baik yang baru ataupun lawas. <br>Tak main-main, bagi nasabah setia bisa mendapatkan hadiah seperti 100 logam mulia seberat 5 gram, 10 logam mulia 50 gram, 20 Samsung Galaxy S22, 10 Apple iPad Pro M1, hingga grand prize satu unit apartemen Trans Park dengan nilai Rp1,2 miliar. <br> "Program ini baru kami launching dua bulan lalu berlaku sampai 31 Januari 2023," ujar Regional Head Bank Mega Kalimantan Andrew Wongjaya kepada CNNIndonesia.com pada Ahad (18/9). <br> Lantaran mendapatkan animo yang luar biasa dari para nasabah, kata dia, program ini kemudian juga diluncurkan di 7 kota besar selain Jakarta seperti Surabaya, Samarinda, Bandung, Makassar, Medan, Yogyakarta dan Semarang. <br> Khusus di Kota Tepian-sebutan Samarinda, pelaksanaannya digelar di Kawasan GOR Sempaja. Dari pagi hingga siang hari. Warga yang berolahraga di kawasan tersebut pun terhibur. <br> "Kami berharap melalui aktivitas ini, engagement dan customer loyalty bisa meningkat. Begitu juga dengan awareness masyarakat terhadap Program Meriah Bareng Mega," tegasnya', 1, 1),
	(7, 'Emir Yanwardhana', '11 Makanan Penyebab Kolesterol Tinggi, Mana yang Berbahaya????', '2022-09-18', '63a99691caa94perjadin.png', 'Makanan bisa menyehatkan tubuh juga bisa menimbulkan penyakit, terutama yang memiliki kolesterol tinggi. Pasalnya, hal itu dapat menyumbat pembuluh darah dan bisa memicu masalah jantung hingga stroke.<br><br>Melansir Healthline ada beberapa makanan yang memiliki kolesterol tinggi namun masih dapat memberikan manfaat baik bagi tubuh. Namun, ada juga jenis makanan yang harus dihindari.<br>Makanan yang digoreng sangat mengandung kolesterol tinggi sehingga harus dihindari jika memungkinkan. Pasalnya, makanan ini memiliki kandungan trans lemak sehingga dapat meningkatkan risiko penyakit jantung dan lainnya.<br>Tentunya makanan cepat saji memiliki kadar kolesterol yang tinggi, Makanan ini merupakan faktor utama risiko berbagai kondisi kronis seperti jantung, diabetes, hingga obesitas.', 2, 1);

-- Dumping structure for table lhjateng.pageview
DROP TABLE IF EXISTS `pageview`;
CREATE TABLE IF NOT EXISTS `pageview` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` text NOT NULL,
  `userip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table lhjateng.pageview: 0 rows
/*!40000 ALTER TABLE `pageview` DISABLE KEYS */;
/*!40000 ALTER TABLE `pageview` ENABLE KEYS */;

-- Dumping structure for table lhjateng.tag
DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table lhjateng.tag: ~3 rows (approximately)
INSERT INTO `tag` (`id_tag`, `deskripsi`) VALUES
	(1, 'Self Improvement'),
	(2, 'Teen'),
	(3, 'Sport');

-- Dumping structure for table lhjateng.tbl_komentar
DROP TABLE IF EXISTS `tbl_komentar`;
CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `komentar_id` int(11) NOT NULL AUTO_INCREMENT,
  `komentar` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nama_pengirim` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `artikel_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`komentar_id`) USING BTREE,
  KEY `artikel_to_comment` (`artikel_id`),
  CONSTRAINT `artikel_to_comment` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`id_artikel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table lhjateng.tbl_komentar: ~1 rows (approximately)
INSERT INTO `tbl_komentar` (`komentar_id`, `komentar`, `nama_pengirim`, `date`, `artikel_id`) VALUES
	(2, 'Bagus Sekali', 'Afifudin', '2022-12-24 02:14:07', 4);

-- Dumping structure for table lhjateng.totalview
DROP TABLE IF EXISTS `totalview`;
CREATE TABLE IF NOT EXISTS `totalview` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` text NOT NULL,
  `totalvisit` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table lhjateng.totalview: 0 rows
/*!40000 ALTER TABLE `totalview` DISABLE KEYS */;
/*!40000 ALTER TABLE `totalview` ENABLE KEYS */;

-- Dumping structure for table lhjateng.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `telp` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table lhjateng.user: ~4 rows (approximately)
INSERT INTO `user` (`id_user`, `email`, `password`, `fname`, `lname`, `gender`, `telp`) VALUES
	(1, 'fitrahtest@gmail.com', 'admin', 'fitrah', 'rahmadhani', 'M', '082222333444'),
	(2, 'dmsalfata@gmail.com', 'admin', 'dimas', 'alfat', 'M', '088221043147'),
	(3, 'muhafifudin2306@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Afif', 'Udin', 'M', '083866678086'),
	(14, 'muhafifudin66@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Muhammad', 'Afifudin', 'M', '09753672891');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
