-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 10:54 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maypi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tgl_post` varchar(20) NOT NULL,
  `hari_post` varchar(20) NOT NULL,
  `jam_post` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `isi`, `penulis`, `slug`, `foto`, `tgl_post`, `hari_post`, `jam_post`) VALUES
(5, 'Nilai UN atau Zonasi? Kebingungan Orangtua soal PPDB', '<p>Proses Pendaftaran Penerimaan Siswa Baru ( PPDB) 2019 Jawa Barat untuk jalur zonasi jenjang SMP dan SMA telah dimulai dari Senin (17/6/2019) hingga Sabtu (22/6/2019). Banyak pengalaman dialami orangtua murid ketika mendaftarkan anaknya ke sekolah masing-masing sesuai zonasi yang ditentukan. Salah satunya adalah Eva Butar-butar. Eva mengisahkan, putranya yang bernama Yehezkiel Manurung baru lulus dari SD PSKD Kwitang 8 Depok, Jawa Barat, dan telah didaftarkan ke SMPN 9 Depok pada Senin kemarin secara online. Eva mengaku saat ini tidak mengalami kesulitan dalam pendaftaran anaknya melalui sistem zonasi. Namun, masih ada kekhawatiran di dalam hatinya jika nanti sistem ini juga mempertimbangkan nilai ujian nasional (UN) untuk seleksi penerimaan siswa baru walaupun hal itu sudah ditegaskan oleh pemerintah. \"Sekarang ini saya masih bingung, katanya sistem zonasi, bukan nilai UN. Boleh saja zonasi asal nilai UN enggak berlaku,\" kata Eva kepada Kompas.com, Selasa (18/6/2019). Dia menuturkan, berdasarkan informasi yang dia ketahui, nilai UN terendah di SMPN 9 Depok ialah 24, sedangkan nilai anaknya di bawah itu. Adapun daya tampung di sekolah tersebut sebanyak 10 kelas, yang terdiri dari 38 sampai 40 siswa dalam satu kelas. Eva mengatakan masih menaruh harapan agar anaknya bisa diterima di sekolah yang dituju dan proses pendaftaran ini segera selesai supaya menenangkan pikirannya. Untuk itu, dia telah menyiapkan berbagai dokumen yang dibutuhkan, termasuk melegalisasi dokumen. Jika sewaktu-waktu dibutuhkan, dokumen itu telah siap dikumpulkan. &ldquo;Sistem online ini enggak sulit, saya sudah siapkan data-data dan dokumen yang dilegalisasi. Nanti, kalau sudah ketahuan (anaknya diterima di sekolah tujuan) baru disiapkan,&rdquo; kata Eva. Syarat PPDB 2019 Untuk diketahui, pemerintah menerapkan sistem zonasi pada PPDB 2019. Sistem ini mengatur bahwa jarak dari rumah ke sekolah sebagai syarat utama, bukan nilai rapor dan ujian nasional. Dalam taklimat media di Jakarta, Selasa (15/1/2019), Menteri Pendidikan dan Kebudayaan (Mendikbud) Muhadjir Effendy mengatakan, aturan zonasi semula diterapkan pada PPDB 2018 dan akan diperketat lagi pada 2019. Pengetatan aturan itu diperkuat melalui Peraturan Mendikbud Nomor 51 Tahun 2018 tentang PPDB. Dia menegaskan, sekolah wajib menerapkan PPDB berbasis zonasi untuk 90 persen dari siswa baru, sedangkan jalur prestasi akademik dan nonakademik memliki kuota tersendiri, yaitu 5 persen. \"Dapat juga dipakai untuk kuota 5 persen sisanya bagi pelajar mendaftar ke sekolah di luar zona mereka,\" kata Muhadjir.</p>', 'Muhammad Fajri', 'nilai-un-atau-zonasi-kebingungan-orangtua-soal-ppdb', '12add3c1eb93915769fcdd7e8e932e7e.jpg', '18 Juni 2019', 'Selasa', '23:27'),
(6, 'PPDB, Banyak Orangtua Mendaftar dari Subuh', '<p>Kepala Dinas Pendidikan Provinsi Jawa Barat, Dewi Sartika menanggapi soal banyaknya orangtua siswa yang datang dari subuh dalam proses Penerimaan Peserta Didik Baru ( PPDB). Dewi mengatakan, datang lebih awal tak menjadi patokan diterimanya siswa di sekolah tujuan. \"Karena memang ada Permen dari Kemendikbud yang menyatakan apabila nilainya sama nanti penilaiannya pindah ke pendaftar yang pertama kali,\" ujar Dewi saat ditemui di Gedung Sate, Jalan Diponegoro, Senin (17/6/2019).</p>\r\n<p>Namun, sambung Dewi, situasi itu sangat kecil terjadi mengingat ada kombinasi antara jarak (zonasi) dengan nilai hasil ujian nasional. Terlebih, kata Dewi, waktu penerimaan pendaftar pun dibatasi hingga pukul 14.00 WIB. \"Tapi itu akan kecil kemungkinannya khususnya untuk yang jalur kombinasi, dihitung antara jarak dan NHUN. Kalau yang jarak itu sudah pasti beda-beda. Tadi sudah disampaikan panitia, kemampuan kita memasukan data pukul 14.00 tutup. Nomor antrean berlaku tapi silakan mereka datang besok. Dibatasi karena kalau sampai malam kasihan juga mereka,\" tuturnya. Dewi menambahkan, dari hasil pantauan sementara proses PPDB di Jawa Barat berjalan cukup lancar. Salah satu yang menjadi atensi yakni besarnya animo masyarakat yang akan mendaftarkan anaknya. Hal itu wajar karena dari 774.000 lulusan SMP yang diterima di negeri hanya 281.950 siswa. \"Jadi beberapa sekolah saya tadi pagi bersama Pak Wagub ke SMA 8 dan SMK 3. Artinya memang ada kecenderungan mereka ingin mendaftar di hari pertama. Jadi antusiasme membeludak,\" kata Dewi.</p>\r\n<p>\"Kami juga melakukan video conference bersama dengan beberapa sekolah di Jabar, di Cianjur, Depok. Persiapan mereka cukup bagus. Insyaallah. Kelihatannya di hari pertama ini masalahnya tadi antusiasme yang membeludak,\" jelasnya.</p>', 'Muhammad Fajri', 'ppdb-banyak-orangtua-mendaftar-dari-subuh', 'c16ccf24599b3d4589891a3dff58d288.jpg', '18 Juni 2019', 'Selasa', '23:32'),
(7, 'Protes soal Zonasi, Wali Murid Datangi Dinas Pendidikan Surabaya Malam-malam', '<p>Sejumlah walid murid mendatangi Kantor Dinas Pendidikan Kota Surabaya, Jawa Timur. Mereka memprotes soal sistem zonasi yang diterapkan dalam penerimaan peserta didik baru (PPDB) 2019 di Surabaya. <br><br>Pantauan detikcom pukul 22.21 WIB, Rabu (19/6/2019), para wali murid yang didominasi oleh ibu-ibu tampak bernegoisasi dengan Kepala Dinas Kota Surabaya M Ikhsan. Mereka mengatakan siap bermalam di kantor Dinas Pendidikan, Jalan Jagir, Surabaya. </p>\r\n<p>\"Harus dibatalkan. Kami juga siap bermalam di sini,\" teriak para wali murid di depan kantor Dinas Pendidikan Kota Surabaya. <br><br>\"Pak Ikhsan jangan diam saja. Kami butuh jawaban yang pasti,\" ujar ibu-ibu lainnya. </p>\r\n<p>Sebelumnya, sekitar pukul 21.30 WIB sempat terjadi aksi saling dorong antara wali murid dengan petugas Satpol PP Kota Surabaya. Hal itu terjadi akibat para wali murid memaksakan masuk.<br><br>Kapolsek Wonokromo, Kompol Christoper Lebang, mengatakan pihaknya bakal terus melakukan pengamanan di lokasi. Dia menyebut pengamanan sudah dilakukan sejak pagi. <br><br>\"Kami sejak pagi hingga kini melakukan pengamanan,\" kata Christoper. </p>', 'Muhammad Fajri', 'protes-soal-zonasi-wali-murid-datangi-dinas-pendidikan-surabaya-malam-malam', '75c914d55287c659f5735f1e2e6be8f5.jpeg', '22 Juni 2019', 'Sabtu', '21:12'),
(8, 'Sistem Zonasi PPDB 2019 Diprotes Wali Murid, Jokowi: Tanyakan Kepada Menteri Pendidikan', '<p>Pelaksanaan pendaftaran peserta didik baru (PPDB) 2019 menggunakan sistem zonasi mengundang banyak masalah. Presiden <a href=\"http://www.tribunnews.com/tag/jokowi\">Jokowi</a> mengakui sistem zonasi PPDB tahun ini banyak masalah.</p>\r\n<p>\"Tanyakan kepada Menteri Pendidikan, memang di lapangan banyak masalah yang perlu dievaluasi. Tanyakan lebih detail kepada Menteri Pendidikan, (Muhadjir Effendy),\" ujar <a href=\"http://www.tribunnews.com/tag/jokowi\">Jokowi</a> usai membagikan 3.200 sertifikat tanah di Gor Tri Dharma, Gresik, Kamis (20/5/2019).</p>\r\n<p>Sebelumnya, gelombang protes terus berdatangan dari wali murid. Mereka tidak rela anaknya tidak bisa melanjutkan pendidikan di sekolah negeri karena hanya terbentur jarak.</p>\r\n<p>Artikel ini telah tayang di <a href=\"http://www.tribunnews.com/\">Tribunnews.com</a> dengan judul Sistem Zonasi PPDB 2019 Diprotes Wali Murid, Jokowi: Tanyakan Kepada Menteri Pendidikan.<br><br>Di Kabupaten Gresik, sistem PPDB 2019 membuat DPRD Kabupaten Gresik memanggil Dinas Pendidikan (Dispendik). Sebab, para wali murid tidak terima anaknya tidak masuk sekolah negeri.</p>\r\n<p>Artikel ini telah tayang di <a href=\"http://www.tribunnews.com/\">Tribunnews.com</a> dengan judul Sistem Zonasi PPDB 2019 Diprotes Wali Murid, Jokowi: Tanyakan Kepada Menteri Pendidikan.</p>', 'Muhammad Fajri', 'sistem-zonasi-ppdb-2019-diprotes-wali-murid-jokowi-tanyakan-kepada-menteri-pendidikan', '09386e9c3196db02a5104c161f415a03.jpg', '22 Juni 2019', 'Sabtu', '21:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `foto`) VALUES
(67, '4d81d43afc4d13a4c3f44b727f3402cc.jpg'),
(68, '53966c04fa9823bb4dee39b693cbebd6.jpg'),
(69, 'd41645960da56d698b26af974957c9a4.jpg'),
(70, '30b59fe559d479598a9237bd8fb0fceb.jpg'),
(77, 'bc3e6c895a5095fad869bc6c6d40470d.jpg'),
(78, '589db686d862fa97b030677600391716.jpg'),
(79, '9eb7d6a39cdf0a8169cab699ddeb3f56.jpg'),
(80, 'e4fac4c7c215492dc8d29efcea1595ba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_header`
--

CREATE TABLE `tb_header` (
  `id` int(11) NOT NULL,
  `slide` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_header`
--

INSERT INTO `tb_header` (`id`, `slide`) VALUES
(1, '846d6995b3c6d32ea101f678872eb0c7.jpg'),
(2, 'e2a14deee7b850c8f259fa5cc32570d0.jpg'),
(3, 'be074f3badbdc60db1182964a8e24b50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sambutan`
--

CREATE TABLE `tb_sambutan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sambutan`
--

INSERT INTO `tb_sambutan` (`id`, `judul`, `isi`, `foto`) VALUES
(1, 'Sambutan Kepala Sekolah', '<p style=\"text-align: center;\">Bismillahirohmannirrohim</p>\r\n<p style=\"text-align: center;\">Assalamualaikum Warahmatullah Wabarakatuh</p>\r\n<p style=\"text-align: center;\">Alhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dapat kami bangun. Kami mengucapkan selamat datang di Website kami Madrasah Aliyah Yayasan Pendidikan Islam Martapura yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami. Tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut. Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus dijiwa demi anak bangsa.</p>', '4a5fa2a3fc2b2b9a7a8673f69727ff93.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sarana`
--

CREATE TABLE `tb_sarana` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sarana`
--

INSERT INTO `tb_sarana` (`id`, `judul`, `isi`) VALUES
(1, 'Sarana dan Prasarana', '<p class=\"MsoListParagraph\" style=\"margin-left: 14.2pt; mso-add-space: auto; text-align: justify; text-indent: -14.2pt; mso-list: l0 level1 lfo1;\"><!-- [if !supportLists]-->1.&nbsp;&nbsp;&nbsp; <!--[endif]-->Keadaan Sarana Pendidikan</p>\r\n<p style=\"padding-left: 40px;\">Adapun sarana MA Martapura Kabupaten OKUT adalah sebagai berikut :</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Meja dan Buku untuk murid : 60 stel</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Meja guru : 20 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Papan Tulis : 3 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->d.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Papan Pengumuman : 1 buah</p>\r\n<p><!-- [if !supportLists]-->2.&nbsp;&nbsp;&nbsp; <!--[endif]-->Keadaan Prasarana Pendidikan</p>\r\n<p style=\"padding-left: 40px;\">Adapun prasarana MA Martapura Kabupaten OKUT adalah sebagai berikut :</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->a.&nbsp;&nbsp;&nbsp; <!--[endif]-->Tanah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Lapangan upacara : 1 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Lapangan olahraga : 1 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->b.&nbsp;&nbsp;&nbsp; <!--[endif]-->Bangunan</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang Belajar :&nbsp; 3 Ruang</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang Kepala MA : 1 Ruang</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang Guru : 1 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang TU : 1 buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang Perpustakaan : 1 Buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang WC Guru : 1 Buah</p>\r\n<p style=\"padding-left: 40px;\"><!-- [if !supportLists]-->7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--[endif]-->Ruang WC Siswa : 2 Buah</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id`, `judul`, `isi`) VALUES
(1, 'Sejarah MA YPI', '<p style=\"text-align: justify;\">Madrasah Aliyah Martapura yang berada dibawah&nbsp; Yayasan Pendidikan Islam (YPI) Martapura berdiri pada tahun pelajaran 1995/1996 dibawah pimpinan Bapak Suwarno, BA yang pada waktu&nbsp; pertama beridir menumpang pada gedung MTs Negeri Martapura dengan jumlah siswa 11 orang yang merupakan alumni / tamatan MTs Martapura pada saat itu, serta didukung oleh tenga pengajar berjumlah 9 orang yang juga guru-guru dari MTs Negeri Martapura.</p>\r\n<p style=\"text-align: justify;\">Inisiatif untuk mendirikan Madrasah Aliyah Martapura berawal dari ide Bapak Drs. H. Khaeri selaku kepala MTs Negeri Martapura mengingat ada MTs Negeri, namun belum ada madrasah setingkat Aliyah baik negeri maupun swasta. Dengan konsep dasar untuk dapat melanjutkan kependidikan Agama bagi Madrasah setingkat Tsanawiyah, maka dengan dukungan beberapa guru MTs Negeri Martapura pada saat itu sepakat untuk mendirikan Madrasah Aliyah yang diberi nama Madrasah Aliyah Martapura dibawah naungan Yayasan Pendidikan Islam (YPI) dengan akte notaries Achmad Haidar Reza, SH Nomor 10 Tanggal 06 November 1997.</p>\r\n<p style=\"text-align: justify;\">Pada 22 juli 1998 kantor wilayah Deparatemen Agama Provinsi Sumatera Selatan mengeluarkan izin operasional dengan nomor : Wf / 6 &ndash; d / PP.03.2 / 1904 / 1998 tanggal 22 juli 1998 dengan nomor statistik madrasah (NSM) : 312160106123. Untuk kepala Madrasah pada saat berdirinya Yayasan Pendidikan Islam (YPI) Martapura menunjuk Bapak Suwarno, BA sebagai Kepala Madrasah yang statusnya adalah guru PNS pada MTs Negeri Martapura.</p>\r\n<p style=\"text-align: justify;\">Pada tanggal 20 juni 2001 Bapak Suwarno, BA ditetapkan sebagai kepala Madrasah Aliyah Martapura dengan masa jabatan 3 tahun. Pada tahun berikutnya yaitu pada petikan surat keputusan Menteri Agama RI Nomor : B.H/2/8577 tanggal 23 april 2003 Bapak Suwarno, S.Pd.I ditetapkan sebagai kepala Madrasah Aliyah Martapura hingga sekarang.</p>\r\n<p style=\"text-align: justify;\">Berdasarkan undang - undang bahawa sekolah swasta tidak diperkenankan menumpang pada sekolah Negeri maka pada tahun pelajaran 2004/2005 Madrasah Aliyah Martapura pindah ke gedung MTs Miftahul Huda di Kumpul Mulyo Kec. Martapura sampai sekarang.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_struktur`
--

INSERT INTO `tb_struktur` (`id`, `judul`, `foto`, `deskripsi`) VALUES
(1, 'judul', 'struktur.jpg', 'deskripsi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(32) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `level`, `status`, `foto`) VALUES
(1, 'Muhammad Fajri', 'mfajri429@gmail.com', '$2y$10$xpXjk1kY85/Wj/eyfMvheO.CvhJVQep0Ih8R30F.C232gKaUUnPbm', 'superadmin', 1, 'fc1eeb98ceef2b545eb5de210b17accc.JPG'),
(18, 'Andi', 'akuntigaku@gmail.com', '$2y$10$uCYG1Vp5W6c7HxMdjxPAe.SOKps.QW3BN88g5yzdCXbWXJzCHqxEm', 'admin', 1, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visi_misi`
--

CREATE TABLE `tb_visi_misi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visi_misi`
--

INSERT INTO `tb_visi_misi` (`id`, `judul`, `isi`) VALUES
(1, 'Visi dan Misi MA YPI', '<h3><strong><span style=\"font-size: 18pt;\">Visi </span></strong></h3>\r\n<p>Menjadikan lulusan yang berprestasi, beriman dan bertakwa kepada Tuhan Yang Maha Esa, menuju manusia yang berkualitas.</p>\r\n<h3><strong><span style=\"font-size: 18pt;\">Misi</span></strong></h3>\r\n<p>Mendidikan siswa yang terampil, kreatif, inovatif ahlaulkarimah, menumbuhkan jiwa kemandirian siswa dengan mempersiapkan wawasan sosial, ekonomi dan keterapilan hidup serta pemahaman agama yang kuat</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_header`
--
ALTER TABLE `tb_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sarana`
--
ALTER TABLE `tb_sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tb_header`
--
ALTER TABLE `tb_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sarana`
--
ALTER TABLE `tb_sarana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
