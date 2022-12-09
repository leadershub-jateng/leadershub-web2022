-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2022 pada 08.40
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lhjateng`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tglUpload` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `id_tag` varchar(5) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `penulis`, `judul`, `tglUpload`, `gambar`, `isi`, `id_tag`, `id_user`) VALUES
(1, 'Kambali Prayoga', 'Pidato Jokowi Bikin Harga Nikel Melonjak 4% Lebih!', '2022-09-04', 'article-cover.png', 'Nikel dunia mampu lepas dari pengaruh sentimen bertambahnya pasokan dari Indonesia, harganya pun melesat hingga 4% lebih. Pada Jumat (9/9/2022) pukul 15:30 WIB harga nikel dunia tercatat US$22.630 per ton, melonjak 4,03% dibandingkan harga penutupan kemarin. <br> Presiden Indonesia Joko Widodo mengatakan bahwa Indonesia kemungkinan akan kalah dalam sengketa perdagangan dengan Uni Eropa (UE) terkait larangan ekspor bijih nikel pada yang dimulai 2020. Hal ini membuat kecemasan para pelaku pasar akan kendala pasokan menjadi berkurang karena potensi pembukaan ekspor bijih nikel. <br> \"Kelihatannya kita kalah (gugatan) tapi tidak apa-apa, industri kita akhirnya sudah jadi. Jadi kenapa takut? Kalah tidak apa-apa, syukur bisa menang,\" terang Jokowi dalam acara Sarasehan 100 Ekonomi oleh INDEF dan CNBC Indonesia, Rabu (7/9/2022). <br> \"Di tahun 2021 ketika kita hilirisasi nikel, kita dapat US$ 20,9 miliar. Lompatannya, nilai tambah lompatannya 19 kali. ini kalau mulai tarik lagi stop tembaga, timah dan nikel,\" ungkap Joko Widodo.', '1', 1),
(2, 'Harjasa Kurniawan', 'Waspada! Ada Malware Baru Ditemukan Masuk ke Akun Youtube', '2022-09-04', 'lala-azizli-OFZUaeYKP3k-unsplash.jpg', 'Ada sebuah malware baru yang menyebar melalui akun YouTube bernama Redline Infostealer. Melansir Tech Radar, pakar keamanan siber dari Kaspersky menemukan malware yang masuk ke akun YouTube & mengunggah video ke saluran mereka. <br> Seorang korban idealnya seperti gamers PC yang melihat video tentang crack, atau cheat gim favorit mereka seperti FIFA, Final Fantasy, Forza Horizon, Lego Star Wars, atau Spiderman. <br> Dalam deskripsi video itu terdapat tautan yang untuk mendapatkan cheat, namun pada kenyataanya menampung beberapa malware yang digabungkan menjadi satu. <br> Dalam bundel RedLine Stealer mampu mencuri kata sandi yang disimpan di browser orang, cookie, detail kartu kredit, percakapan pesan instan, serta dompet cryptocurrency. <br> Yang paling menarik bundel itu memiliki tiga executable berbahaya, yang disebut MakiseKurisu.exe, Download.exe, dan upload exe. <br> Makise Kurisu adalah infostealer yang mengambil cookie browser dan menyimpannya secara lokal. Download.exe mengambil video crack palsu dari repositori GitHub dan menyerahkannya ke upload.exe sehingga akan mengunggah videonya ke akun YouTube korban.', '2', 1),
(4, 'Harjasa Kurniawan', 'Penampakan Dahsyatnya Gempa Taiwan yang Memakan Korban jiwa', '2022-09-04', 'new-artickel.jpg', 'Anggota Dewan Pertimbangan Presiden (Wantimpres) Sidarto Danusubroto mengenang kiprah mendiang Azyumardi Azra memperjuangkan Islam moderat. Sidarto berkata Azyumardi selalu memperkenalkan Islam moderat di setiap forum internasional. Dia mengaku terpukau saat mendengarkan presentasi Azyumardi di Al-Azhar beberapa tahun lalu. <br>', '2', 1),
(5, 'Hana Purnawati', 'Program Meriah Bareng Mega Lanjut, Emas dan Apartemen Menanti Nasabah', '2022-09-07', 'jason-goodman-Oalh2MojUuk-unsplash.jpg', 'Bank Mega melanjutkan agenda Meriah Bareng Mega. Program tersebut berlaku untuk semua pengguna layanan, baik yang baru ataupun lawas. <br>Tak main-main, bagi nasabah setia bisa mendapatkan hadiah seperti 100 logam mulia seberat 5 gram, 10 logam mulia 50 gram, 20 Samsung Galaxy S22, 10 Apple iPad Pro M1, hingga grand prize satu unit apartemen Trans Park dengan nilai Rp1,2 miliar. <br> \"Program ini baru kami launching dua bulan lalu berlaku sampai 31 Januari 2023,\" ujar Regional Head Bank Mega Kalimantan Andrew Wongjaya kepada CNNIndonesia.com pada Ahad (18/9). <br> Lantaran mendapatkan animo yang luar biasa dari para nasabah, kata dia, program ini kemudian juga diluncurkan di 7 kota besar selain Jakarta seperti Surabaya, Samarinda, Bandung, Makassar, Medan, Yogyakarta dan Semarang. <br> Khusus di Kota Tepian-sebutan Samarinda, pelaksanaannya digelar di Kawasan GOR Sempaja. Dari pagi hingga siang hari. Warga yang berolahraga di kawasan tersebut pun terhibur. <br> \"Kami berharap melalui aktivitas ini, engagement dan customer loyalty bisa meningkat. Begitu juga dengan awareness masyarakat terhadap Program Meriah Bareng Mega,\" tegasnya', '1', 1),
(6, 'Danang Firgantoro', 'Wantimpres Jokowi Kenang Azyumardi Azra Perjuangkan Islam Moderat', '2022-09-07', '6318ad915fc68ini-terlihat-dengan-jelas-pemandanga_169.jpeg', 'Jiangxi telah menerima rata-rata 132,2 milimeter hujan sejak Juli. Ini 57% lebih rendah dari rata-rata dan rekor terendah untuk periode tersebut.<br>Sementara itu, panas yang terus menerus menghasilkan tingkat penguapan rata-rata 329 mm di seluruh provinsi. Akibatnya, permukaan airnya menyusut hingga seluas 291 kilometer persegi, atau 10% dari ukuran biasanya. Volume air di danau juga hanya sekitar 10% dari normal.<br><br>\"Temperatur yang tinggi secara konsisten, curah hujan yang rendah dan penurunan yang signifikan dalam pengosongan air ke Poyang harus disalahkan,\" tambah laporan pusat pemantauan itu.', '3', 1),
(7, 'Emir Yanwardhana', '11 Makanan Penyebab Kolesterol Tinggi, Mana yang Berbahaya?', '2022-09-18', '632735858f41dilustrasi-kolesterol-tinggi-freepik-1_169.jpeg', 'Makanan bisa menyehatkan tubuh juga bisa menimbulkan penyakit, terutama yang memiliki kolesterol tinggi. Pasalnya, hal itu dapat menyumbat pembuluh darah dan bisa memicu masalah jantung hingga stroke.<br><br>Melansir Healthline ada beberapa makanan yang memiliki kolesterol tinggi namun masih dapat memberikan manfaat baik bagi tubuh. Namun, ada juga jenis makanan yang harus dihindari.<br>Makanan yang digoreng sangat mengandung kolesterol tinggi sehingga harus dihindari jika memungkinkan. Pasalnya, makanan ini memiliki kandungan trans lemak sehingga dapat meningkatkan risiko penyakit jantung dan lainnya.<br>Tentunya makanan cepat saji memiliki kadar kolesterol yang tinggi, Makanan ini merupakan faktor utama risiko berbagai kondisi kronis seperti jantung, diabetes, hingga obesitas.', '1', 1),
(8, 'CNBC Indonesia', 'Duh! Proyek Tol Ini Ternyata Bermasalah, Yakin Beres 2024?', '2022-09-19', '6327c3564c8d6jalan-tol-semarang-demak-3_169.jpg', 'Sejumlah proyek infrastruktur tengah dikebut kabinet Presiden Joko Widodo (Jokowi). Yang ditargetkan bisa rampung dan beroperasi sebelum tahun 2024.\nHanya saja, sejumlah isu masih mewarnai proses pembangunan beberapa proyek. Meski kemudian ada yang sudah bisa diatasi, namun bisa saja mengganggu upaya pemenuhan target.\n<br><br>\nPembangunan salah satu ruas dari Tol Padang-Pekanbaru, yaitu Padang-Sicincin sempat terhenti sejak Desember 2021 karena masalah pembebasan lahan. Yang sempat alot karena melewati tanah adat.\n<br><br>\nMeski kini, menurut Direktur Operasi III Hutama Karya Koentjoro proses konstruksi sudah kembali dilakukan.\n<br><br>\n\"Kami berterima kasih pada semua pihak yang telah membantu penyelesaian pembebasan lahan pembangunan Padang-Sicincin. Hutama Karya segera memulai kembali konstruksinya,\" jelasnya dalam keterangan, dikutip Senin (19/9/2022).\n<br><br>\nTol Proyek Semarang-Demak 27 km juga terus dikejar pembangunannya sebelum 2024 mendatang. Dan merupakan bagian dari Proyek Strategis Nasional.\n<br><br>\nHanya saja ada permasalahan kondisi tanah musnah yang membuat daratan yang menjadi trase tol tertutup oleh air laut sehingga terlihat seperti fenomena yang terjadi pada Atlantis.\n<br><br>\nAkibat \'fenomena Atlantis\' ini, proses perhitungan dan pembebasan lahan menjadi kendala, sebab lahan itu sebelumnya dimiliki oleh sejumlah pihak namun kini sudah terendam air laut.\n<br><br>\nSaat ini pemerintah tengah memperkuat payung hukum untuk pembebasan lahan kondisi tanah musnah milik masyarakat yang terjadi pada seksi 1.', '1', 1),
(9, 'CNBC Indonesia', '20 Pekerjaan Ini Terancam Hilang Dalam 5 Tahun, Siap-Siap Ya!', '2022-09-19', '6327c4572d5e13156b227-1600-4d4a-8b37-de98559fafcb_169.jpeg', 'Pada 2025, beberapa pekerjaan diprediksi hilang di masa depan, menyusul terus berkembangnya teknologi digital. Tidak dapat dipungkiri, kehadiran teknologi memiliki andil yang cukup besar dalam hidup manusia.<br><br>Dalam laporan tersebut, diperkirakan 85 juta pekerjaan tergeser oleh perubahan besar-besaran dalam pembagian tenaga kerja antar manusia dan mesin tahun 2025 mendatang.<br><br>Selain itu, terdapat jenis peran tertentu yang berkurang, namun akan ada kemunculan keterampilan serta pengalaman baru. Jumlahnya sekitar 97 juta peran pada 15 industri dan 26 ekonomi yang disurvei.<br><br>Dalam laporan tersebut, diperkirakan 85 juta pekerjaan tergeser oleh perubahan besar-besaran dalam pembagian tenaga kerja antar manusia dan mesin tahun 2025 mendatang.<br><br>Selain itu, terdapat jenis peran tertentu yang berkurang, namun akan ada kemunculan keterampilan serta pengalaman baru. Jumlahnya sekitar 97 juta peran pada 15 industri dan 26 ekonomi yang disurvei.', '2', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pageview`
--

CREATE TABLE `pageview` (
  `id` int(11) NOT NULL,
  `page` text NOT NULL,
  `userip` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id_tag` varchar(5) NOT NULL,
  `deskripsi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id_tag`, `deskripsi`) VALUES
('1', 'Self Improvement'),
('2', 'Leadership'),
('3', 'Education');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `parent_komentar_id` int(11) NOT NULL,
  `komentar` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nama_pengirim` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `parent_komentar_id`, `komentar`, `nama_pengirim`, `date`) VALUES
(11, 0, 'Artikel yang sangat bermanfaat', 'Dimas Alfata', '2022-10-10 07:26:28'),
(25, 11, 'Terimakasih kak Dimas Alfata :)', 'Admin', '2022-10-18 04:25:24'),
(29, 0, 'wah, ternyata makanan cepat saji punya kadar kolestrol yang tinggi ya', 'shabrina', '2022-10-21 06:00:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `totalview`
--

CREATE TABLE `totalview` (
  `id` int(11) NOT NULL,
  `page` text NOT NULL,
  `totalvisit` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `telp` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `fname`, `lname`, `gender`, `telp`) VALUES
(1, 'fitrahtest@gmail.com', 'admin', 'fitrah', 'rahmadhani', 'L', '082222333444'),
(2, 'dmsalfata@gmail.com', 'admin', 'dimas', 'alfata', 'L', '088221043147');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tag` (`id_tag`);

--
-- Indeks untuk tabel `pageview`
--
ALTER TABLE `pageview`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`) USING BTREE;

--
-- Indeks untuk tabel `totalview`
--
ALTER TABLE `totalview`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pageview`
--
ALTER TABLE `pageview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `totalview`
--
ALTER TABLE `totalview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tag` (`id_tag`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
