-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 11:23 PM
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
(6, 'PPDB, Banyak Orangtua Mendaftar dari Subuh', '<p>Kepala Dinas Pendidikan Provinsi Jawa Barat, Dewi Sartika menanggapi soal banyaknya orangtua siswa yang datang dari subuh dalam proses Penerimaan Peserta Didik Baru ( PPDB). Dewi mengatakan, datang lebih awal tak menjadi patokan diterimanya siswa di sekolah tujuan. \"Karena memang ada Permen dari Kemendikbud yang menyatakan apabila nilainya sama nanti penilaiannya pindah ke pendaftar yang pertama kali,\" ujar Dewi saat ditemui di Gedung Sate, Jalan Diponegoro, Senin (17/6/2019).</p>\r\n<p>Namun, sambung Dewi, situasi itu sangat kecil terjadi mengingat ada kombinasi antara jarak (zonasi) dengan nilai hasil ujian nasional. Terlebih, kata Dewi, waktu penerimaan pendaftar pun dibatasi hingga pukul 14.00 WIB. \"Tapi itu akan kecil kemungkinannya khususnya untuk yang jalur kombinasi, dihitung antara jarak dan NHUN. Kalau yang jarak itu sudah pasti beda-beda. Tadi sudah disampaikan panitia, kemampuan kita memasukan data pukul 14.00 tutup. Nomor antrean berlaku tapi silakan mereka datang besok. Dibatasi karena kalau sampai malam kasihan juga mereka,\" tuturnya. Dewi menambahkan, dari hasil pantauan sementara proses PPDB di Jawa Barat berjalan cukup lancar. Salah satu yang menjadi atensi yakni besarnya animo masyarakat yang akan mendaftarkan anaknya. Hal itu wajar karena dari 774.000 lulusan SMP yang diterima di negeri hanya 281.950 siswa. \"Jadi beberapa sekolah saya tadi pagi bersama Pak Wagub ke SMA 8 dan SMK 3. Artinya memang ada kecenderungan mereka ingin mendaftar di hari pertama. Jadi antusiasme membeludak,\" kata Dewi.</p>\r\n<p>\"Kami juga melakukan video conference bersama dengan beberapa sekolah di Jabar, di Cianjur, Depok. Persiapan mereka cukup bagus. Insyaallah. Kelihatannya di hari pertama ini masalahnya tadi antusiasme yang membeludak,\" jelasnya.</p>', 'Muhammad Fajri', 'ppdb-banyak-orangtua-mendaftar-dari-subuh', 'c16ccf24599b3d4589891a3dff58d288.jpg', '18 Juni 2019', 'Selasa', '23:32');

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
(1, 'Sambutan Kepala Sekolah', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam dignissimos incidunt amet, quam, expedita nisi dolorum voluptatem reprehenderit eos nesciunt, minima debitis quod a quisquam vero eum nostrum enim! Ad deleniti tempore eaque recusandae sint? Iusto sapiente alias, dicta qui unde aut numquam fugiat repellendus, obcaecati nam, aspernatur ipsum facilis asperiores rerum voluptas quam. Quas voluptas sequi nostrum, corrupti accusantium natus, ullam dolorem temporibus architecto labore praesentium, dolor maxime ut ipsa tempore eveniet veritatis enim quaerat necessitatibus sapiente quia culpa adipisci sint? At omnis ab, error eius, minus animi tempore mollitia voluptatum saepe libero? Delectus cum incidunt a consectetur!</p>', '4a5fa2a3fc2b2b9a7a8673f69727ff93.jpg');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
